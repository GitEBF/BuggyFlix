<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActeursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('acteurs')->insert([
            [
                'id' => 1,
                'personID' => 3,
                'filmID' => 1,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Buggy Cheese'
            ],
            [
                'id' => 2,
                'personID' => 8,
                'filmID' => 2,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Cell le mangeur'
            ],
            [
                'id' => 3,
                'personID' => 9,
                'filmID' => 2,
                'role' => "Personnage secondaire",
                'nomPersonnage' => 'Maman cuisinière'
            ],
            [
                'id' => 4,
                'personID' => 2,
                'filmID' => 3,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Etienne Pendu'
            ],
            [
                'id' => 5,
                'personID' => 1,
                'filmID' => 4,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Pipoco'
            ],
            [
                'id' => 6,
                'personID' => 2,
                'filmID' => 5,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Tijay Furious'
            ],
            [
                'id' => 7,
                'personID' => 4,
                'filmID' => 6,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Arthur Legros'
            ],
            [
                'id' => 8,
                'personID' => 4,
                'filmID' => 7,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Arthur Lobèse'
            ],
            [
                'id' => 9,
                'personID' => 4,
                'filmID' => 8,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Arthur Crise-Cardiaque'
            ],
            [
                'id' => 10,
                'personID' => 7,
                'filmID' => 8,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Juju Predateur'
            ],
            [
                'id' => 11,
                'personID' => 10,
                'filmID' => 8,
                'role' => "Voiture",
                'nomPersonnage' => 'Juju mobile'
            ],
            [
                'id' => 12,
                'personID' => 5,
                'filmID' => 10,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Mouad Asfour'
            ],
            [
                'id' => 13,
                'personID' => 5,
                'filmID' => 10,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Mouad Asfour'
            ],
            [
                'id' => 14,
                'personID' => 3,
                'filmID' => 11,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Buggy Cheese'
            ],
            [
                'id' => 15,
                'personID' => 6,
                'filmID' => 11,
                'role' => "La victime",
                'nomPersonnage' => 'Racoon dog'
            ],
            [
                'id' => 16,
                'personID' => 11,
                'filmID' => 11,
                'role' => "Le témoin",
                'nomPersonnage' => 'Charle Oscar 2ieme du nom'
            ],
        ]);
    }
}
