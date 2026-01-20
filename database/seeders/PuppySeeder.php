<?php

namespace Database\Seeders;

use App\Http\Controllers\Actions\OptimiseWebpImageAction;
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
                ['name' => 'Bailey', 'trait' => 'Ball Obsessed', 'image_url' => '14.jpg'],
                ['name' => 'Teddy', 'trait' => 'Professional Snuggler', 'image_url' => '3.jpg'],
                ['name' => 'Molly', 'trait' => 'Squirrel Chaser', 'image_url' => '19.jpg'],
                ['name' => 'Buddy', 'trait' => 'Always Wiggling', 'image_url' => '7.jpg'],
                ['name' => 'Coco', 'trait' => 'Secretly a Cat', 'image_url' => '21.jpg'],
                ['name' => 'Rosie', 'trait' => 'Garden Digger', 'image_url' => '2.jpg'],
                ['name' => 'Leo', 'trait' => 'Majestic Barker', 'image_url' => '11.jpg'],
                ['name' => 'Ruby', 'trait' => 'Little Diva', 'image_url' => '16.jpg'],
                ['name' => 'Oliver', 'trait' => 'Expert Beggar', 'image_url' => '5.jpg'],
                ['name' => 'Penny', 'trait' => 'Zoomie King', 'image_url' => '22.jpg'],
                ['name' => 'Duke', 'trait' => 'Tough Guy', 'image_url' => '9.jpg'],
                ['name' => 'Zoe', 'trait' => 'Butterfly Hunter', 'image_url' => '13.jpg'],
                ['name' => 'Bentley', 'trait' => 'Classy Howler', 'image_url' => '1.jpg'],
                ['name' => 'Stella', 'trait' => 'Star Gazer', 'image_url' => '20.jpg'],
                ['name' => 'Tucker', 'trait' => 'Mud Magnet', 'image_url' => '4.jpg'],
                ['name' => 'Lola', 'trait' => 'Drama Queen', 'image_url' => '18.jpg'],
                ['name' => 'Jax', 'trait' => 'Stick Collector', 'image_url' => '6.jpg'],
                ['name' => 'Ginger', 'trait' => 'Spicy Personality', 'image_url' => '12.jpg'],
                ['name' => 'Murphy', 'trait' => 'Goofy Grinner', 'image_url' => '15.jpg'],
                ['name' => 'Sadie', 'trait' => 'Sweet Soul', 'image_url' => '8.jpg'],
                ['name' => 'Zeus', 'trait' => 'Thunder Barker', 'image_url' => '10.jpg'],
                ['name' => 'Sophie', 'trait' => 'Prancing Paws', 'image_url' => '17.jpg'],
                ['name' => 'Winston', 'trait' => 'Distinguished Gentleman', 'image_url' => '2.jpg'],
                ['name' => 'Gracie', 'trait' => 'Graceful Tripper', 'image_url' => '21.jpg'],
                ['name' => 'Finn', 'trait' => 'Water Lover', 'image_url' => '3.jpg'],
                ['name' => 'Chloe', 'trait' => 'Fashion Icon', 'image_url' => '14.jpg'],
                ['name' => 'Louie', 'trait' => 'Napping Expert', 'image_url' => '9.jpg'],
                ['name' => 'Nala', 'trait' => 'Jungle Explorer', 'image_url' => '22.jpg'],
                ['name' => 'Buster', 'trait' => 'Shoe Chewer', 'image_url' => '5.jpg'],
                ['name' => 'Olive', 'trait' => 'Tiny But Mighty', 'image_url' => '7.jpg'],
                ['name' => 'Gus', 'trait' => 'Old Soul', 'image_url' => '19.jpg'],
                ['name' => 'Piper', 'trait' => 'High Pitch Whistler', 'image_url' => '1.jpg'],
                ['name' => 'Oreo', 'trait' => 'Sweet & Crunchy', 'image_url' => '11.jpg'],
                ['name' => 'Harley', 'trait' => 'Biker Dog', 'image_url' => '4.jpg'],
                ['name' => 'Koda', 'trait' => 'Mountain Hiker', 'image_url' => '13.jpg'],
                ['name' => 'Willow', 'trait' => 'Quiet Observer', 'image_url' => '20.jpg'],
                ['name' => 'Bruno', 'trait' => 'Heavy Breather', 'image_url' => '6.jpg'],
                ['name' => 'Hazel', 'trait' => 'Eye Contact Master', 'image_url' => '12.jpg'],
                ['name' => 'Dexter', 'trait' => 'Problem Solver', 'image_url' => '18.jpg'],
                ['name' => 'Maya', 'trait' => 'Beach Bum', 'image_url' => '8.jpg'],
                ['name' => 'Thor', 'trait' => 'Hammer Chewer', 'image_url' => '15.jpg'],
                ['name' => 'Millie', 'trait' => 'Professional Cuddler', 'image_url' => '10.jpg'],
                ['name' => 'Diesel', 'trait' => 'Full Speed Only', 'image_url' => '2.jpg'],
                ['name' => 'Roxie', 'trait' => 'Sassy Walker', 'image_url' => '16.jpg'],
                ['name' => 'Simba', 'trait' => 'Couch King', 'image_url' => '17.jpg'],
                ['name' => 'Mimi', 'trait' => 'Pocket Sized', 'image_url' => '1.jpg'],
                ['name' => 'Hank', 'trait' => 'Wiggle Butt', 'image_url' => '9.jpg'],
                ['name' => 'Remi', 'trait' => 'Bird Watcher', 'image_url' => '4.jpg'],
                ['name' => 'Otis', 'trait' => 'Snore Champion', 'image_url' => '22.jpg'],
                ['name' => 'Belle', 'trait' => 'Southern Charm', 'image_url' => '11.jpg'],
                ['name' => 'Kobe', 'trait' => 'Jump Shot Pro', 'image_url' => '14.jpg'],
                ['name' => 'Abby', 'trait' => 'Always Curious', 'image_url' => '6.jpg'],
                ['name' => 'Chester', 'trait' => 'Cheese Thief', 'image_url' => '21.jpg'],
                ['name' => 'Izzy', 'trait' => 'Hyper Active', 'image_url' => '3.jpg'],
                ['name' => 'Oscar', 'trait' => 'Garbage Inspector', 'image_url' => '8.jpg'],
                ['name' => 'Lexi', 'trait' => 'Agility Pro', 'image_url' => '19.jpg'],
                ['name' => 'Blue', 'trait' => 'Howl Master', 'image_url' => '12.jpg'],
                ['name' => 'Sasha', 'trait' => 'Gentle Leader', 'image_url' => '15.jpg'],
                ['name' => 'Copper', 'trait' => 'Fox Hunter', 'image_url' => '20.jpg'],
                ['name' => 'Emma', 'trait' => 'Patient Sister', 'image_url' => '7.jpg'],
                ['name' => 'Arlo', 'trait' => 'Dinosaur Fan', 'image_url' => '2.jpg'],
                ['name' => 'Coco', 'trait' => 'Sweet Treat', 'image_url' => '13.jpg'],
                ['name' => 'Ranger', 'trait' => 'Trail Guide', 'image_url' => '5.jpg'],
                ['name' => 'Lulu', 'trait' => 'Spinning Top', 'image_url' => '18.jpg'],
                ['name' => 'Samson', 'trait' => 'Innocent Looker', 'image_url' => '10.jpg'],
                ['name' => 'Maddie', 'trait' => 'Sock Swallower', 'image_url' => '16.jpg'],
                ['name' => 'Marley', 'trait' => 'Chaotic Good', 'image_url' => '1.jpg'],
                ['name' => 'Annie', 'trait' => 'Morning Greeter', 'image_url' => '22.jpg'],
                ['name' => 'Bo', 'trait' => 'Belly Rub Fanatic', 'image_url' => '9.jpg'],
                ['name' => 'Xena', 'trait' => 'Warrior Princess', 'image_url' => '11.jpg'],
                ['name' => 'Chico', 'trait' => 'Feisty Spirit', 'image_url' => '4.jpg'],
                ['name' => 'Heidi', 'trait' => 'Professional Hider', 'image_url' => '14.jpg'],
                ['name' => 'Toby', 'trait' => 'Ear Scratcher', 'image_url' => '6.jpg'],
                ['name' => 'Lady', 'trait' => 'Proper Manners', 'image_url' => '17.jpg'],
                ['name' => 'Benny', 'trait' => 'Happy Whistler', 'image_url' => '19.jpg'],
                ['name' => 'Macy', 'trait' => 'Window Watcher', 'image_url' => '21.jpg'],
                ['name' => 'Rocco', 'trait' => 'Rock Solid', 'image_url' => '8.jpg'],
                ['name' => 'Maya', 'trait' => 'Softest Fur', 'image_url' => '3.jpg'],
                ['name' => 'Prince', 'trait' => 'Demanding Royalty', 'image_url' => '12.jpg'],
                ['name' => 'Dixie', 'trait' => 'Country Gal', 'image_url' => '20.jpg'],
                ['name' => 'Chance', 'trait' => 'Second Chance Hero', 'image_url' => '15.jpg'],
                ['name' => 'Kyra', 'trait' => 'Silent Stalker', 'image_url' => '13.jpg'],
                ['name' => 'Rex', 'trait' => 'Tiny T-Rex', 'image_url' => '5.jpg'],
                ['name' => 'Nova', 'trait' => 'Space Cadet', 'image_url' => '18.jpg'],
                ['name' => 'Apollo', 'trait' => 'Sun Bather', 'image_url' => '2.jpg'],
                ['name' => 'Cleo', 'trait' => 'Ancient Soul', 'image_url' => '10.jpg'],
                ['name' => 'Romeo', 'trait' => 'Loves Everyone', 'image_url' => '16.jpg'],
                ['name' => 'Athena', 'trait' => 'Wise Paws', 'image_url' => '7.jpg'],
                ['name' => 'Brutus', 'trait' => 'Big Softie', 'image_url' => '1.jpg'],
                ['name' => 'Cookie', 'trait' => 'Always Crumby', 'image_url' => '22.jpg'],
                ['name' => 'George', 'trait' => 'Curious Monkey', 'image_url' => '11.jpg'],
                ['name' => 'Frankie', 'trait' => 'Blue Eyed Bandit', 'image_url' => '14.jpg'],
                ['name' => 'Zelda', 'trait' => 'Legendary Hunter', 'image_url' => '4.jpg'],
                ['name' => 'Benson', 'trait' => 'Bowtie Wearer', 'image_url' => '9.jpg'],
                ['name' => 'Ellie', 'trait' => 'Gentle Nuzzler', 'image_url' => '6.jpg'],
                ['name' => 'Moose', 'trait' => 'Clumsy Walker', 'image_url' => '17.jpg'],
                ['name' => 'Tess', 'trait' => 'Frisbee Pro', 'image_url' => '19.jpg'],
                ['name' => 'Jasper', 'trait' => 'Gem of a Dog', 'image_url' => '21.jpg'],
                ['name' => 'Pippin', 'trait' => 'Second Breakfast Fan', 'image_url' => '8.jpg'],
                ['name' => 'Skye', 'trait' => 'Cloud Chaser', 'image_url' => '3.jpg'],
        ];

        $optimiser = new OptimiseWebpImageAction();

        foreach($puppies as $puppy) {

            $input = base_path('seed-images/' . $puppy['image_url']);

            $optimised = $optimiser->handle($input);

            $path = 'puppies/' . $optimised['fileName'];

            Storage::disk('public')->put($path, $optimised['webpString']);

            Puppy::create([
            'name' => $puppy['name'],
            'trait' => $puppy['trait'],
            'image_url' => Storage::url($path),
            'user_id' => 1
            ]);
        }
         
    }
}
