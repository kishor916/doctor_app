<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Specialization;


class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specializations = 
        [
            [
                'name' => 'Cardiology',
            ],
            [
                'name' => 'Oncology ',
            ],
            [
                'name' => 'Gastroenterology',
            ],
            [
                'name' => 'Pediatrics',
            ],
            [
                'name' => 'Dermatology',
            ],
            [
                'name' => 'Neurology',
            ],
            [
                'name' => 'Orthopedic',
            ],
            [
                'name' => 'Gynecology',
            ],
            [
                'name' => 'Psychiatry',
            ],
            [
                'name' => 'Endocrinology',
            ],
        ];

        Specialization::insert($specializations);
    }
}
