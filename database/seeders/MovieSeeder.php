<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MotorcycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('Motorcycles')->delete();

        DB::table('Motorcycles')->insert([

            [
                'title' => 'Harley Davidson',
                'description' => 'Harley davidson very cool motorcycle',
                'release_date' => '1999-11-01',
                'runtime' => 750,
                'rating' => '10',
                'image' => 'https://cdn.room58.com/2023/02/28/mcn_36e18e96c4ecd120c3b696dcd7bdd980_a8729cd223294dd9.jpg',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'title' => 'Kawasaki Ninja',
                'description' => 'Kawasaki Ninja is a fast motorcycle. Motorcycle of the year 2022 ',
                'release_date' => '2000-07-08',
                'runtime' => 1000,
                'rating' => '10',
                'image' => 'https://motoday.lt/image/cache/data/Kawasaki%20motociklai/Kawasaki%202020/Ninja%20H2R/ninja-H2R-3-650x650.jpg',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'title' => 'Suzuki YZF',
                'description' => ' Cool Motorcycle, Very nice',
                'release_date' => '1994-06-23',
                'runtime' => 125,
                'rating' => '9',
                'image' => 'https://motobeast.lt/wp-content/uploads/2018/01/yamaha2012.jpg',
                'created_at' => Date::now(),
                'updated_at' => Date::now()

            ],
            [
                'title' => "Yamaha",
                'description' => "Cool motorcycle Japan ",
                'release_date' => "2000-07-07",
                'runtime' => 1200,
                'rating' => "10",
                'image' => 'https://www.madornomad.com/wp-content/uploads/2022/04/Yamaha-XT1200Z-Super-Tenere-Review-4.jpg',
                'created_at' => Date::now(),
                'updated_at' => Date::now()

            ],
            [
                'title' => "Aprilia Diablo",
                'description' => "Ducatti paste",
                'release_date' => "2001-07-09",
                'runtime' => 750,
                'rating' => "10",
                'image' => 'https://www.apriliaforum.com/forums/attachment.php?attachmentid=8719&stc=1&d=1079906680'
                'created_at' => Date::now(),
                'updated_at' => Date::now()

            ],
            [
                'title' => "Aprilia RS 50",
                'description' => "Italian Motorcycle",
                'release_date' => "2017-07-07",
                'runtime' => 125,
                'rating' => "7",
                'image' => 'https://motobeast.lt/wp-content/uploads/2017/11/1097.jpg',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
        ]);
    }
}
