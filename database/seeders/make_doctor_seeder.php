<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User_ap;

use Faker\Factory as Faker;


class make_doctor_seeder extends Seeder
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
                'status' => $faker->randomElement(['Active']),
                'address' => $faker->address,
                'type' => $faker->randomElement(['doctor']),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]);
        }
    }
}
