<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class filmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert([
              [
                'id' => 1,
                'titre' => "Buggy cheese official movie",
              ],
              [
                'id' => 2,
                'titre' => "Sir Isaac Pipoco evangelise le monde !",
              ],
            ]);
    }
}
