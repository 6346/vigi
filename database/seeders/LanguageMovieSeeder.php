<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LanguageMotorcycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('language_Motorcycle')->insert([
            [
                'language_id' => 1,
                'Motorcycle_id' => 1,
            ],
            [
                'language_id' => 2,
                'Motorcycle_id' => 2,
            ],
            [
                'language_id' => 3,
                'Motorcycle_id' => 3,
            ],
            [
                'language_id' => 4,
                'Motorcycle_id' => 4,
            ],
            [
                'language_id' => 5,
                'Motorcycle_id' => 5,
            ]
        ]);
    }
}
