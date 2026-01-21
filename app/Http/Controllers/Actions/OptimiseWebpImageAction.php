<?php

namespace App\Http\Controllers\Actions;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class OptimiseWebpImageAction extends Controller
{
    public function handle(string $input): array
    {
        $image = Image::read($input);

        if ($image->width() > 1000) {
            $image->scale(width: 1000);
        }

        $encoded = $image->toWebp(quality: 95)->toString();
        $fileName = Str::random().'.webp';

        return [
            'fileName' => $fileName,
            'webpString' => $encoded,
        ];

    }
}
