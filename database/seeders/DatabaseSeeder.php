<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PersonsSeeder::class);
        $this->call(FilmsSeeder::class);
        $this->call(GenresSeeder::class);
        $this->call(ActeursSeeder::class);
        $this->call(FilmsGenresSeeder::class);
    }
}
