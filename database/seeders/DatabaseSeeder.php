<?php

namespace Database\Seeders;

use App\Models\Student;
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
        // User::factory(10)->create();
/*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        for ($i = 1; $i <= 20; $i++) {
            Student::create([
                'name' => "Student $i",
                'avatar' => '/assets/img/home/Avatar.png',
                'score' => rand(50, 100),
                'location' => "District/City $i",
            ]);
        }
    }
}
