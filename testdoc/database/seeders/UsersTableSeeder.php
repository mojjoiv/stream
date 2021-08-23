<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        user::truncate();
        $faker = \Faker\Factory::create();

        $password = hash::make('toptal');

        user::create([
            'name' => 'Administrator',
            'email' => 'admin@test.com',
            'password' => $password,
        ]);

        for ($i = 0; $i < 10; $i++) {
            user::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
            ]);
        }
    }
}
