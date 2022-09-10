<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@invincible.com',
                'type' => 1,
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Manager User',
                'email' => 'manager@invincible.com',
                'type' => 2,
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'User',
                'email' => 'user@invincible.com',
                'type' => 0,
                'password' => bcrypt('12345678'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
