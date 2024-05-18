<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'John',
            'middle_name' => 'Admin',
            'last_name' => 'Doe',
            'position' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ])->assignRole('admin');

        // User::create([
        //     'first_name' => 'John',
        //     'middle_name' => 'Admin',
        //     'last_name' => 'Doe',
        //     'position' => 'admin',
        //     'email' => 'staff@gmail.com',
        //     'password' => bcrypt('staff123')
        // ])->assignRole('staff');

        // User::create([
        //     'first_name' => 'John',
        //     'middle_name' => 'Admin',
        //     'last_name' => 'Doe',
        //     'position' => 'admin',
        //     'email' => 'worker@gmail.com',
        //     'password' => bcrypt('12345678')
        // ])->assignRole('worker');
    }
}
