<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountryMotorcycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('country_Motorcycle')->insert([
            [
                'country_id' => 1,
                'Motorcycle_id' => 1,
            ],
            [
                'country_id' => 2,
                'Motorcycle_id' => 2,
            ],
            [
                'country_id' => 3,
                'Motorcycle_id' => 3,
            ],
            [
                'country_id' => 4,
                'Motorcycle_id' => 4,
            ],
            [
                'country_id' => 5,
                'Motorcycle_id' => 5,
            ]
        ]);
    }
}
