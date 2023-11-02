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
                'person_id' => 1,
                'film_id' => 1
            ],
            [
                'id' => 2,
                'person_id' => 5,
                'film_id' => 2
            ],
            [
                'id' => 3,
                'person_id' => 2,
                'film_id' => 3
            ],
            [
                'id' => 4,
                'person_id' => 1,
                'film_id' => 4
            ],
            [
                'id' => 5,
                'person_id' => 10,
                'film_id' => 5
            ],
            [
                'id' => 6,
                'person_id' => 4,
                'film_id' => 6
            ],
            [
                'id' => 7,
                'person_id' => 4,
                'film_id' => 7
            ],
            [
                'id' => 8,
                'person_id' => 4,
                'film_id' => 8
            ],
            [
                'id' => 9,
                'person_id' => 7,
                'film_id' => 9
            ],
            [
                'id' => 10,
                'person_id' => 11,
                'film_id' => 10
            ],
            [
                'id' => 11,
                'person_id' => 6,
                'film_id' => 11
            ]
        ]);
    }
}
