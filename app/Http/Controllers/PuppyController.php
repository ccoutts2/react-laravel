<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Actions\OptimiseWebpImageAction;
use App\Http\Resources\PuppyResource;
use App\Models\Puppy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class PuppyController extends Controller

{
    // Index
    public function index (Request $request) {

        $search = $request->search;

        return Inertia::render('puppies/index', [
        'puppies' => PuppyResource::collection(
            Puppy::query()
                ->when($search, function ($query, $search) {
                    $query->where('name', 'like', "%{$search}%")
                        ->orWhere('trait', 'like', "%{$search}%");
                })
                ->with(['user', 'likedBy'])
                ->latest()
                ->paginate(9)
                ->withQueryString()
        ),
        'likedPuppies' => $request->user() ? PuppyResource::collection($request->user()->likedPuppies) : [],
        'filters' => [
            'search' => $search,
        ]
    ]);
    }

    // Like
    public function like(Request $request, Puppy $puppy) 
    {

      
        $puppy->likedBy()->toggle($request->user()->id);

        return back();
    }

    // Store
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'trait' =>  'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,gif,svg,webp|max:5120', 
        ]);

        $image_url = null;

        if ($request->hasFile('image')) {

            $optimised = (new OptimiseWebpImageAction())->handle($request->file('image'));

            $path = 'puppies/' . $optimised['fileName'];
            
            $stored = Storage::disk('public')->put($path, $optimised['webpString']);

            if (!$stored) {
                return back()->withErrors(['image' => 'Failed to upload image.'])->withInput();
            }

            $image_url = Storage::url($path);
        }

        $request->user()->puppies()->create([
            'name' => $request->name,
            'trait' => $request->trait,
            'image_url' => $image_url,
        ]);

        return redirect()->route('home', ['page' => 1])->with('success', 'Puppy created successfully!');
    }
    
}

