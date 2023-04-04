<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            [
                "name" => "Speed",
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                "name" => "Sport",
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                "name" => "Country",
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                "name" => "Beater",
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                "name" => "Durango",
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                "name" => "Fantasy",
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
        ]);
    }
}
