<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PersonsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('persons')->insert([
            [
                'id' => 1,
                'nom' => 'Isaac Pipoco',
                'dateNaissance' => '2005-2-26',
                'lieuNaissance' => 'Brésil',
                'img' => 'pipocoLeBeau.jpg'
            ],
            [
                'id' => 2,
                'nom' => 'etijay',
                'dateNaissance' => '2005-5-20',
                'lieuNaissance' => 'Québec',
                'img' => 'etiJayPasBeau.png'
            ],
            [
                'id' => 3,
                'nom' => 'Master Buggy-Cheese',
                'dateNaissance' => '1997-08-08',
                'lieuNaissance' => 'Orange Cheese Town',
                'img' => 'myLord.jpg'
            ],
            [
                'id' => 4,
                'nom' => 'chumnon',
                'dateNaissance' => '2005-1-28',
                'lieuNaissance' => "Saint-Léonard-d'Aston",
                'img' => 'deadInside.png'
            ],
            [
                'id' => 5,
                'nom' => 'Hog Rider',
                'dateNaissance' => '2012-8-2',
                'lieuNaissance' => 'COC',
                'img' => 'hogRider.png'
            ],
            [
                'id' => 6,
                'nom' => 'Tony-Tony Chopper',
                'dateNaissance' => '2000-12-24',
                'lieuNaissance' => 'Drum Island',
                'img' => 'racoonDogo.jpg'
            ],
            [
                'id' => 7,
                'nom' => 'Pawn',
                'dateNaissance' => '500-1-1',
                'lieuNaissance' => 'Board',
                'img' => 'elPion.jfif'
            ],
            [
                'id' => 8,
                'nom' => 'Cell',
                'dateNaissance' => '2015-04-28',
                'lieuNaissance' => 'Agario',
                'img' => 'cell.png'
            ],
            [
                'id' => 9,
                'nom' => 'Your Mom',
                'dateNaissance' => '1975-10-10',
                'lieuNaissance' => 'My house',
                'img' => 'myLady.jpg'
            ],
            [
                'id' => 10,
                'nom' => 'Batmobile',
                'dateNaissance' => '1939-5-1',
                'lieuNaissance' => 'Batcave',
                'img' => 'batMobile.jpg'
            ],
            [
                'id' => 11,
                'nom' => 'CO2',
                'dateNaissance' => '0-1-1',
                'lieuNaissance' => 'Mes poumons',
                'img' => 'co2.webp'
            ],
        ]);

    }
}
