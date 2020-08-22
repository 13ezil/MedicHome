<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make("12345678"),
            'phonenumber' => "12345678",
            'type' => 'admin'
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => Hash::make("12345678"),
            'phonenumber' => "12345678",
            'type' => 'user'
        ]);
    }
}
