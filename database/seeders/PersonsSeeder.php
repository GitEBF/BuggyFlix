<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PersonsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('person')->insert([
            [
                'id' => 1,
                'nom' => 'Isaac Pipoco',
                'dateNaissance' => date('Y-m-d'),
                'lieuNaissance' => 'Brésil',
            ],
            [
                'id' => 2,
                'nom' => 'etijay',
                'dateNaissance' => date('Y-m-d'),
                'lieuNaissance' => 'Québec',
            ],
        ]);

    }
}
