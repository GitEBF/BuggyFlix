<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

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
                'person_id' => 3,
                'film_id' => 1,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Buggy Cheese'
            ],
            [
                'id' => 2,
                'person_id' => 8,
                'film_id' => 2,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Cell le mangeur'
            ],
            [
                'id' => 3,
                'person_id' => 9,
                'film_id' => 2,
                'role' => "Personnage secondaire",
                'nomPersonnage' => 'Maman cuisinière'
            ],
            [
                'id' => 4,
                'person_id' => 2,
                'film_id' => 3,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Etienne Pendu'
            ],
            [
                'id' => 5,
                'person_id' => 1,
                'film_id' => 4,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Pipoco'
            ],
            [
                'id' => 6,
                'person_id' => 2,
                'film_id' => 5,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Tijay Furious'
            ],
            [
                'id' => 7,
                'person_id' => 4,
                'film_id' => 6,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Arthur Legros'
            ],
            [
                'id' => 8,
                'person_id' => 4,
                'film_id' => 7,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Arthur Lobèse'
            ],
            [
                'id' => 9,
                'person_id' => 4,
                'film_id' => 8,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Arthur Crise-Cardiaque'
            ],
            [
                'id' => 10,
                'person_id' => 7,
                'film_id' => 9,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Juju Predateur'
            ],
            [
                'id' => 11,
                'person_id' => 10,
                'film_id' => 9,
                'role' => "Voiture",
                'nomPersonnage' => 'Juju mobile'
            ],
            [
                'id' => 12,
                'person_id' => 5,
                'film_id' => 10,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Mouad Asfour'
            ],
            [
                'id' => 13,
                'person_id' => 5,
                'film_id' => 10,
                'role' => "Personnage secondaire",
                'nomPersonnage' => 'Mali Asfour (le frère jumeau)'
            ],
            [
                'id' => 14,
                'person_id' => 3,
                'film_id' => 11,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Buggy Cheese'
            ],
            [
                'id' => 15,
                'person_id' => 6,
                'film_id' => 11,
                'role' => "La victime",
                'nomPersonnage' => 'Racoon dog'
            ],
            [
                'id' => 16,
                'person_id' => 11,
                'film_id' => 11,
                'role' => "Le témoin",
                'nomPersonnage' => 'Charle Oscar 2ieme du nom'
            ],
            [
                'id' => 17,
                'person_id' => 7,
                'film_id' => 12,
                'role' => "Personnage principal",
                'nomPersonnage' => 'Juju lePuits'
            ],
            [
                'id' => 18,
                'person_id' => 3,
                'film_id' => 12,
                'role' => "Ennemie",
                'nomPersonnage' => 'La main couper'
            ],
        ]);
    }
}
