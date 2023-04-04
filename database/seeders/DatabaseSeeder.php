<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\modeleeder;
use Database\Seeders\GenreSeeder;
use Database\Seeders\MotorcycleSeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\LanguageSeeder;
use Database\Seeders\GenreMotorcycleSeeder;
use Database\Seeders\CountryMotorcycleSeeder;
use Database\Seeders\LanguageMotorcycleSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MotorcycleSeeder::class,
            UserSeeder::class,
            modeleeder::class,
            LanguageSeeder::class,
            GenreSeeder::class,
            CountrySeeder::class,
            GenreMotorcycleSeeder::class,
            LanguageMotorcycleSeeder::class,
            CountryMotorcycleSeeder::class,
        ]);
    }
}
