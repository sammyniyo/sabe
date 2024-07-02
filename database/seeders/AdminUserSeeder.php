<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'sabeltdrw@gmail.com',
            'password' => Hash::make('12345'),
            'is_admin' => true,
        ]);
    }
}
