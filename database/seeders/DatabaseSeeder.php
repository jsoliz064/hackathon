<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user1= new User();
        $user1->name='maria';
        $user1->email='maria@gmail.com';
        $user1->password=bcrypt('12345');
        $user1->save();
    }
}
