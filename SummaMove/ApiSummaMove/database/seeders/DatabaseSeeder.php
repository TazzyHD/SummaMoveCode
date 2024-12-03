<?php

namespace Database\Seeders;

use App\Models\Exercises_user;
use App\Models\User;
use App\Models\Prestatie;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            //ExerciseSeeder::class,
            Exercise_userSeeder::class,
        ]);

//        User::create()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
