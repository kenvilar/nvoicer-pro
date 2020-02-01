<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'first_name' => 'Admin',
            'last_name' => 'istrator',
            'role' => 'admin',
            'email' => 'kenvilar@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
