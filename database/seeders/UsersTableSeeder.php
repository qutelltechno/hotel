<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role_id' => 1, // Admin role
            ],
            [
                'name' => 'Receptionist User',
                'email' => 'receptionist@receptionist.com',
                'password' => Hash::make('password'),
                'role_id' => 2, // Receptionist role
            ],
            [
                'name' => 'Customer User',
                'email' => 'customer@customer.com',
                'password' => Hash::make('password'),
                'role_id' => 3, // Customer role
            ],
        ]);
    }
}
    