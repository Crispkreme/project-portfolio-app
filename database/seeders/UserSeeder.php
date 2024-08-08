<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Admin Account',
            'username' => 'admin',
            'email'    => 'admin@account.com',
            'phone'    => '09052885214',
            'birthdate' => '2024-08-07',
            'address' => '',
            'password' => Hash::make('admin123'),
            'usertype' => 'admin',
            'profile'  => '',
            'email_verified_at' => now(),
        ]);
    }
}
