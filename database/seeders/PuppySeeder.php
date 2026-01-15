<?php

namespace Database\Seeders;

use App\Models\Puppy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PuppySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $puppies = [
            ['name' => 'Bella', 'trait' => 'Always Happy', 'image_url' => '1.jpg'],
            ['name' => 'Charlie', 'trait' => 'Super Energetic', 'image_url' => '2.jpg'],
            ['name' => 'Luna', 'trait' => 'Very Needy', 'image_url' => '3.jpg'],
            ['name' => 'Max', 'trait' => 'Loves Naps', 'image_url' => '4.jpg'],
            ['name' => 'Cooper', 'trait' => 'Highly Intelligent', 'image_url' => '5.jpg'],
            ['name' => 'Daisy', 'trait' => 'Professional Barker', 'image_url' => '6.jpg'],
            ['name' => 'Milo', 'trait' => 'Food Obsessed', 'image_url' => '7.jpg'],
            ['name' => 'Lucy', 'trait' => 'Fast Runner', 'image_url' => '8.jpg'],
            ['name' => 'Rocky', 'trait' => 'Loyal Protector', 'image_url' => '9.jpg'],
            ['name' => 'Bear', 'trait' => 'Gentle Giant', 'image_url' => '10.jpg'],
        ];

        foreach($puppies as $puppy) {
            Puppy::create([
            'name' => $puppy['name'],
            'trait' => $puppy['trait'],
            'image_url' => Storage::url('puppies/' . $puppy['image_url']),
            'user_id' => 1
            ]);
        }
         
    }
}
