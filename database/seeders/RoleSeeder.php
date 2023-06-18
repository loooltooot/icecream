<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'title' => 'Администратор'
            ],
            [
                'title' => 'Простой пользователь'
            ],
            [
                'title' => 'Пользователь с расширенными правами'
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role)->save();
        }
    }
}
