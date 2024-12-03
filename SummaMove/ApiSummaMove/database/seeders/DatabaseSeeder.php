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

    //Je moet eerst 2 users aanmaken voordat je de Exercise_userSeeder kan seeden.
    public function run(): void
    {
        $this->call([
            ExerciseSeeder::class,
            //Exercise_userSeeder::class,
        ]);
    }
}
