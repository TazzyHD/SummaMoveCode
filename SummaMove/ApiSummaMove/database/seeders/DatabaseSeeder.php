<?php

namespace Database\Seeders;

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
            OefeningSeeder::class,
            User_oefeningenSeeder::class,
        ]);

//        User::create()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
