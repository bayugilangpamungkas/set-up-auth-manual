<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'status' => 'active',
            'password' => 'password',
        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'role' => 'user',
            'status' => 'active',
            'password' => 'password',
        ]);
    }
}
