<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            [
                'id' => 1,
                'nom' => 'Action',
            ],
            [
                'id' => 2,
                'nom' => 'Comédie',
            ],
            [
                'id' => 3,
                'nom' => 'Horreur',
            ],
            [
                'id' => 4,
                'nom' => 'Romance',
            ],
            [
                'id' => 5,
                'nom' => 'Aventure',
            ],
            [
                'id' => 6,
                'nom' => 'Drame',
            ],
            [
                'id' => 7,
                'nom' => 'Fantastique',
            ],
            [
                'id' => 8,
                'nom' => 'Thriller',
            ],
            [
                'id' => 9,
                'nom' => 'Musical',
            ],
        ]);
    }
}
