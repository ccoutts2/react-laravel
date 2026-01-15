<?php

namespace Database\Seeders;

use App\Models\Puppy;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Chris',
            'email' => 'chris@mail.com',
        ]);

        $this->call(PuppySeeder::class);
    }
}
