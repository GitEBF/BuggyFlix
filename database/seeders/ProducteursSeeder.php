<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProducteursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('producteurs')->insert([
            [
                'id' => 1,
                'personID' => 9,
                'filmID' => 1
            ],
            [
                'id' => 2,
                'personID' => 3,
                'filmID' => 2
            ],
            [
                'id' => 3,
                'personID' => 2,
                'filmID' => 3
            ],
            [
                'id' => 4,
                'personID' => 2,
                'filmID' => 4
            ],
            [
                'id' => 5,
                'personID' => 4,
                'filmID' => 5
            ],
            [
                'id' => 6,
                'personID' => 5,
                'filmID' => 6
            ],
            [
                'id' => 7,
                'personID' => 5,
                'filmID' => 7
            ],
            [
                'id' => 8,
                'personID' => 2,
                'filmID' => 8
            ],
            [
                'id' => 9,
                'personID' => 6,
                'filmID' => 9
            ],
            [
                'id' => 10,
                'personID' => 9,
                'filmID' => 10
            ],
            [
                'id' => 11,
                'personID' => 1,
                'filmID' => 11
            ]
        ]);
    }
}