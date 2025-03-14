<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Profile;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $roles = Role::all(); // Get all roles
        foreach ($roles as $role) {
            for ($i = 1; $i <= 3; $i++) {
                $user = User::updateOrCreate(
                    ['email' => strtolower(str_replace(' ', '_', $role->name)) . $i . '@gmail.com'],
                    [
                        'name' => $role->name . $i,
                        'email' => str_replace('-', '',Str::slug($role->name)) . $i . '@gmail.com',
                        'password' => Hash::make('123456789'),
                        'role_id' => $role->id, // Assign role
                    ]
                );

                // Add profile for each user
                Profile::updateOrCreate(
                    [ 'user_id' => $user->id],
                    [
                        'user_id' => $user->id,
                        'avatar' => $faker->imageUrl(100, 100, 'people'),
                        'phone' => $faker->phoneNumber,
                        'birthday' => $faker->date(),
                        'address' => $faker->address,
                        'ip_address' => $faker->ipv4,
                    ]);
            }
        }

    }
}
