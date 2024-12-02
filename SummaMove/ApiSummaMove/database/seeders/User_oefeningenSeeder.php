<?php

namespace Database\Seeders;

use App\Models\user_oefeningen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class User_oefeningenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user_oefeningen::create([
            'user_id' => 1,
            'oefening_id' => 1,
            'reps' => '10',
        ]);

        user_oefeningen::create([
            'user_id' => 1,
            'oefening_id' => 2,
            'reps' => '15',
        ]);

        user_oefeningen::create([
            'user_id' => 2,
            'oefening_id' => 1,
            'reps' => '12',
        ]);

        user_oefeningen::create([
            'user_id' => 2,
            'oefening_id' => 3,
            'reps' => '20',
        ]);
    }
}
