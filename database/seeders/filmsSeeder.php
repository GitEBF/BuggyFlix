<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert([
            [
                'id' => 1,
                'titre' => 'Buggy cheese official movie',
                'resume' => 'Le film officiel de buggy cheese',
                'type' => 'Documentaire',
                'brand' => 'etijay corp',
                'pochette' => 'buggyCheese.jfif',
                'duree' => '9h56',
                'date' => date('2023-10-23'),
                'cote' => '9.7',
                'rating' => 'G',
                'langue' => 'EN-FR',
                'subtitle' => 'EN-FR',
            ],
            [
                'id' => 2,
                'titre' => 'Mange tout sa',
                'resume' => 'Le film officiel de sir Isaac Pipoco qui mange les noix',
                'type' =>'Film',
                'brand' => 'etijay corp',
                'pochette' => 'mangeTout.jfif',
                'duree' => '2h32',
                'date' => date('2022-10-24'),
                'cote' => '20',
                'rating' => 'PG-18',
                
                'langue' => 'EN-FR',
                'subtitle' => 'EN-FR',
            ],
            [
                'id' => 3,
                'titre' => 'etienne le pendeur pendu',
                'resume' => 'Le film non-officiel de etienne',
                'type' =>'Documentaire',
                'brand' => 'etijay corp',
                'pochette' => 'tresSad.jfif',
                'duree' => '2h32',
                'date' => date('2022-10-25'),
                'cote' => '20',
                'rating' => 'G',
               
                'langue' => 'EN-FR',
                'subtitle' => 'EN-FR',
            ],
            [
                'id' => 4,
                'titre' => 'Pipoco got leaked his new albums !!!!',
                'resume' => 'Une comédie désastreuse sur les mésaventures de sir Isaac Pipoco',
                'type' =>'Documentaire',
                'brand' => 'spotify',
                'pochette' => 'pipoAAA.jfif',
                'duree' => '1h45',
                'date' => date('2023-09-13'),
                'cote' => '8.5',
                'rating' => 'PG-13',
                
                'langue' => 'EN-FR',
                'subtitle' => 'EN-FR',
            ],
            [
                'id' => 5,
                'titre' => 'tijay fait des tonneaux en live',
                'resume' => 'Un film trop cool sur le ti accident de tijay',
                'type' =>'Film',
                'brand' => 'etijay corp',
                'pochette' => 'vroomboom.jfif',
                'duree' => '2h10',
                'date' => date('2024-11-09'),
                'cote' => '9.2',
                'rating' => 'PG',
                
                'langue' => 'EN-FR',
                'subtitle' => 'EN-FR',
            ],
            [
                'id' => 6,
                'titre' => 'Arthur au PFK',
                'resume' => 'WELL WELL WELL',
                'type' =>'Série',
                'brand' => 'etijay corp',
                'pochette' => 'arthurMiam.jfif',
                'duree' => '2h05',
                'date' => date('2023-03-24'),
                'cote' => '7.8',
                'rating' => 'PG-18',
                
                'langue' => 'EN-FR',
                'subtitle' => 'EN-FR',
            ],
            [
                'id' => 7,
                'titre' => 'Arthur au PFK 2',
                'resume' => 'noooo way',
                'type' =>'Série',
                'brand' => 'etijay corp',
                'pochette' => 'arthurMiamMiam.jfif',
                'duree' => '1h55',
                'date' => date('2025-06-12'),
                'cote' => '8.0',
                'rating' => 'PG-18',
                
                'langue' => 'EN-FR',
                'subtitle' => 'EN-ES-FR',
            ],
            [
                'id' => 8,
                'titre' => 'Arthur pas au PFK',
                'resume' => 'ya pu faim big',
                'type' =>'Série',
                'brand' => 'etijay corp',
                'pochette' => 'arthurBurp.jfif',
                'duree' => '2h20',
                'date' => date('2024-07-13'),
                'cote' => '8.7',
                'rating' => 'PG-18',
               
                'langue' => 'EN-FR',
                'subtitle' => 'EN-ES-FR',
            ],
            [
                'id' => 9,
                'titre' => 'Juju le fermier',
                'resume' => 'Une comédie surréaliste explorant les aventures de Juju à la ferme de mathurin.',
                'type' =>'Film',
                'brand' => 'etijay corp',
                'pochette' => 'leJuju.jfif',
                'duree' => '1h50',
                'date' => date('2024-05-20'),
                'cote' => '7.5',
                'rating' => 'PG-18',
                
                'langue' => 'EN-FR',
                'subtitle' => 'EN-FR-JPN',
            ],
            [
                'id' => 10,
                'titre' => 'Le chevaucheur du soleil couchant',
                'resume' => 'L\'incroyable aventure du hog rider à l\'époque du far west',
                'type' =>'Film',
                'brand' => 'etijay corp',
                'pochette' => 'hogRouge.jfif',
                'duree' => '2h15',
                'date' => date('2025-12-24'),
                'cote' => '9.0',
                'rating' => 'G',
                
                'langue' => 'arabe',
                'subtitle' => 'EN-FR',
            ],
            [
                'id' => 11,
                'titre' => 'Buggy Cheese : The Horror Movie',
                'resume' => 'zebi ça fait peur en sah',
                'type' =>'Film',
                'brand' => 'buggy cheese',
                'pochette' => 'heLooksIntoYourSoul.jfif',
                'duree' => '2h36',
                'date' => date('2023-04-30'),
                'cote' => '9.8',
                'rating' => 'PG-18',
                'langue' => 'arabe',
                'subtitle' => 'EN-FR',
            ],
                  [
                'id' => 12,
                'titre' => 'roche papier sciseaux contre juju',
                'resume' => 'on bet des cookies avec buggy !!!',
                'type' =>'Film',
                'brand' => 'buggy cheese',
                'pochette' => 'RPS.jfif',
                'duree' => '6h74',
                'date' => date('2067-04-30'),
                'cote' => '9.9',
                'rating' => 'PG-21',
                'langue' => 'EN-FR',
                'subtitle' => 'EN-FR',
            ],
        ]);
    }
}
