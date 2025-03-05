<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run()
    {
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