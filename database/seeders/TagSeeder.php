<?php

namespace Database\Seeders;


use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        $tags = [
            'HSG',
            'Đại trà',
            'Tuyển sinh',
            'Giữa kỳ 1',
            'Giữa kỳ 2',
            'Cuối kỳ 1',
            'Cuối kỳ 2',
            'Thi thử',
            'THPT',
            'THCS',
            'Tiểu học',
            'Đại học',
            'Cao học',
        ];
        foreach ($tags as $tag) {
            Tag::updateOrCreate(['name' => $tag]);
        }
    }
}
