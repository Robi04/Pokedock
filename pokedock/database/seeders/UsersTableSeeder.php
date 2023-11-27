<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;  
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $password = $faker->regexify('^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{12}$');

        foreach (range(1, 50) as $index) {
            \DB::table('users')->insert([
                'password_user' => Hash::make($password),
                'username_user' => $faker->name,
                'credit_user' => $faker->numberBetween(0, 100),
                'fidelity_point_user' => $faker->numberBetween(0, 100),
                'email_user' => $faker->unique()->safeEmail
            ]);
        }
    }
}
