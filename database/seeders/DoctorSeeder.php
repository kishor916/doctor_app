<?php

namespace Database\Seeders;

use App\Models\User_ap;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 99; $i++) {
            User_ap::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'password' => bcrypt($faker->password),
                'gender' => $faker->randomElement(['Male', 'Female']),
                'phone' => $faker->phoneNumber,
                'status' => $faker->randomElement(['Active', 'Inactive']),
                'address' => $faker->address,
                'type' => $faker->randomElement(['doctor', 'user']),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]);
        }
        
    }
}
