<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;
use App\Models\Appointment;

class AppointmentsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $sydney = new Carbon(null, 'Australia/Sydney');

        for ($i = 0; $i < 10; $i++) {
            $from = $sydney->copy()->addMinutes($faker->numberBetween(0, 1440));
            $to = $from->copy()->addMinutes($faker->numberBetween(30, 240));

            Appointment::create([
                'from' => $from->format('U'),
                'to' => $to->format('U'),
                'user_id' => $faker->numberBetween(1, 10),
                'doctor_id' => $faker->numberBetween(1, 5),
            ]);
        }
    }
}
