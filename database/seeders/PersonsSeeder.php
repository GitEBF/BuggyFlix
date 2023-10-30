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
                'img' => 'https://i.postimg.cc/W461XwBX/Microsoft-Teams-image.jpg'
            ],
            [
                'id' => 2,
                'nom' => 'etijay',
                'dateNaissance' => '2005-5-20',
                'lieuNaissance' => 'Québec',
                'img' => 'https://i.postimg.cc/fbKMxTdP/Microsoft-Teams-image-1.png'
            ],
            [
                'id' => 3,
                'nom' => 'Master Buggy-Cheese',
                'dateNaissance' => '1997-08-08',
                'lieuNaissance' => 'Orange Cheese Town',
                'img' => 'https://i.pinimg.com/736x/96/41/15/964115aa813deb8064db05180d18decf.jpg'
            ],
            [
                'id' => 4,
                'nom' => 'chumnon',
                'dateNaissance' => '2005-1-28',
                'lieuNaissance' => "Saint-Léonard-d'Aston",
                'img' => 'https://i.postimg.cc/L8VFjN4x/image.png'
            ],
            [
                'id' => 5,
                'nom' => 'Hog Rider',
                'dateNaissance' => '2012-8-2',
                'lieuNaissance' => 'COC',
                'img' => 'https://www.kindpng.com/picc/m/85-852781_clash-royale-hog-rider-png-transparent-png.png'
            ],
            [
                'id' => 6,
                'nom' => 'Tony-Tony Chopper',
                'dateNaissance' => '2000-12-24',
                'lieuNaissance' => 'Drum Island',
                'img' => 'https://i.kym-cdn.com/entries/icons/facebook/000/042/079/chopcrycover.jpg'
            ],
            [
                'id' => 7,
                'nom' => 'Pawn',
                'dateNaissance' => '500-1-1',
                'lieuNaissance' => 'Board',
                'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoxyfYw1Wg2F2U9hAshR4dZRus5rv_VtkW8Q&usqp=CAU'
            ],
            [
                'id' => 8,
                'nom' => 'Cell',
                'dateNaissance' => '2015-04-28',
                'lieuNaissance' => 'Agario',
                'img' => 'https://www.seekpng.com/png/detail/357-3574725_ykle-agario-premium-skins-agario-mobile-line-split.png'
            ],
            [
                'id' => 9,
                'nom' => 'Your Mom',
                'dateNaissance' => '1975-10-10',
                'lieuNaissance' => 'My house',
                'img' => 'https://www.international.gc.ca/world-monde/assets/images/issues_development-enjeux_developpement/gender_equality-egalite_des_genres/jacqueline_oneill.jpg'
            ],
            [
                'id' => 10,
                'nom' => 'Batmobile',
                'dateNaissance' => '1939-5-1',
                'lieuNaissance' => 'Batcave',
                'img' => 'https://img.lapresse.ca/924x615/200811/06/22885-prix-depart-enchere-100-000.jpg'
            ],
            [
                'id' => 11,
                'nom' => 'CO2',
                'dateNaissance' => '0-1-1',
                'lieuNaissance' => 'Mes poumons',
                'img' => 'https://cdn.shopify.com/s/files/1/0019/5952/files/CO2-Molecule-Image.jpg'
            ],
        ]);

    }
}
