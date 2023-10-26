<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RealisateursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('realisateurs')->insert([
            [
                'id' => 1,
                'personID' => 1,
                'filmID' => 1
            ],
            [
                'id' => 2,
                'personID' => 5,
                'filmID' => 2
            ],
            [
                'id' => 3,
                'personID' => 2,
                'filmID' => 3
            ],
            [
                'id' => 4,
                'personID' => 1,
                'filmID' => 4
            ],
            [
                'id' => 5,
                'personID' => 10,
                'filmID' => 5
            ],
            [
                'id' => 6,
                'personID' => 4,
                'filmID' => 6
            ],
            [
                'id' => 7,
                'personID' => 4,
                'filmID' => 7
            ],
            [
                'id' => 8,
                'personID' => 4,
                'filmID' => 8
            ],
            [
                'id' => 9,
                'personID' => 7,
                'filmID' => 9
            ],
            [
                'id' => 10,
                'personID' => 11,
                'filmID' => 10
            ],
            [
                'id' => 11,
                'personID' => 6,
                'filmID' => 11
            ]
        ]);
    }
}
