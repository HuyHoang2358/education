<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            'Toán học',
            'Văn học',
            'Vật lý',
            'Lịch sử',
            'Địa lý',
            'Hóa học',
            'Ngữ Văn',
            'Tiếng anh',
        ];


        foreach ($subjects as $subject) {
            $slug = Str::slug($subject, '-');
            Subject::updateOrCreate(
                ['slug' => $slug],
                [
                    'name' => $subject,
                    'description' => 'Môn học ' . $subject,
                    'icon' => "/icons/subjects/" . $slug . ".png",
                ]
            );
        }
    }
}
