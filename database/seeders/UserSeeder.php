<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name'=>'Jose Daniel Soliz',
            'email'=>'jsoliz064@gmail.com',
            'password'=>password_hash('1234',PASSWORD_DEFAULT),
        ])->assignRole('Admin');

        User::create([
            'name'=>'maria',
            'email'=>'maria@gmail.com',
            'password'=>password_hash('12345',PASSWORD_DEFAULT),
        ])->assignRole('Admin');
    }
}
