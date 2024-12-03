<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Exercises_user;

class Exercise_userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exercises_user::create([
            'user_id' => 1,
            'exercise_id' => 1,
            'reps' => '10',
        ]);

        Exercises_user::create([
            'user_id' => 1,
            'exercise_id' => 2,
            'reps' => '15',
        ]);

        Exercises_user::create([
            'user_id' => 2,
            'exercise_id' => 1,
            'reps' => '12',
        ]);

        Exercises_user::create([
            'user_id' => 2,
            'exercise_id' => 3,
            'reps' => '20',
        ]);
    }
}
