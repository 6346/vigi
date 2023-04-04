<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenreMotorcycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genre_Motorcycle')->insert([
            [
                'genre_id' => 1,
                'Motorcycle_id' => 1,
            ],
            [
                'genre_id' => 2,
                'Motorcycle_id' => 2,
            ],
            [
                'genre_id' => 3,
                'Motorcycle_id' => 3,
            ],
            [
                'genre_id' => 4,
                'Motorcycle_id' => 4,
            ],
            [
                'genre_id' => 5,
                'Motorcycle_id' => 5,
            ]
        ]);
    }
}
