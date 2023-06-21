<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'admin@ice.com',
            'password' => 'lolita',
            'name' => 'Админов Админ',
            'role_id' => 1
        ]);
        User::create([
            'email' => 'user@ice.com',
            'password' => 'lolita1',
            'name' => 'Юзеров Юзер',
            'role_id' => 2
        ]);
        User::create([
            'email' => 'editor@ice.com',
            'password' => 'lolita2',
            'name' => 'Редач Юля',
            'role_id' => 3
        ]);
    }
}
