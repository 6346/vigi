<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class modeleeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('model')->delete();

        DB::table('model')->insert([
            [
                'first_name' => 'Harley',
                'last_name' => 'Davidson',
                'date_of_birth' => '1980-07-03',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ], [
                'first_name' => 'Kawasaki',
                'last_name' => 'Ninja',
                'date_of_birth' => '1999-11-11',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ], [
                'first_name' => 'Suzuki',
                'last_name' => 'YZF',
                'date_of_birth' => '2000-12-18',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ], [
                'first_name' => 'Yamaha',
                'last_name' => 'Super tennere',
                'date_of_birth' => '2010-12-31',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ], [
                'first_name' => 'Aprilia',
                'last_name' => 'Italiano',
                'date_of_birth' => '1984-07-23',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ]
        ]);
    }
}
