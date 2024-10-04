<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        if (!User::where('email', 'admon@robotics.com')->exists()) {
            User::create([
                'name' => 'Admon',
                'email' => 'admon@robotics.com',
                'password' => Hash::make('Adm@2022'),
                'role' => 'Administrative'
            ]);
        }

        if (!User::where('email', 'tecmilenio@robotics.com')->exists()) {
            User::create([
                'name' => 'Tecmilenio',
                'email' => 'tecmilenio@robotics.com',
                'password' => Hash::make('Adm@2022'),
                'role' => 'Teacher'
            ]);
        }

        if (!User::where('email', 'student@robotics.com')->exists()) {
            User::create([
                'name' => 'Student',
                'email' => 'student@robotics.com',
                'password' => Hash::make('Adm@2022'),
                'role' => 'Student'
            ]);
        }
    }
}
