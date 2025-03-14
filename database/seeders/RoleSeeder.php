<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'học sinh', 'description' => 'Sinh viên hoặc học viên'],
            ['name' => 'giáo viên', 'description' => 'Người giảng dạy'],
            ['name' => 'phụ huynh', 'description' => 'Cha mẹ học sinh'],
            ['name' => 'cộng tác viên', 'description' => 'Cộng tác viên'],
            ['name' => 'admin', 'description' => 'Quản trị viên hệ thống'],
        ];
        foreach ($roles as $role) {
            Role::updateOrCreate(['name' => $role['name']], $role);
        }
    }
}
