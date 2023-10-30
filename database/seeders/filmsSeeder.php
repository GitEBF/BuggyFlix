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
                'pochette' => 'https://th.bing.com/th/id/OIG.qeMDetbBbjOFFi_bjsgm?pid=ImgGn',
                'duree' => '9h56',
                'annee' => '2023',
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
                'pochette' => 'https://th.bing.com/th/id/OIG.Y8Z5PfyDNs.3lbtlqE78?pid=ImgGn',
                'duree' => '2h32',
                'annee' => '2022',
                'date' => date('2022-10-24'),
                'cote' => '20',
                'rating' => 'PG-18',
                
                'langue' => 'EN-FR',
                'subtitle' => 'EN-FR',
            ],
            [
                'id' => 3,
                'titre' => 'etienne se pend en live',
                'resume' => 'Le film non-officiel de etienne',
                'type' =>'Documentaire',
                'brand' => 'etijay corp',
                'pochette' => 'https://th.bing.com/th/id/OIG.WhBNmXYDaUOp16O9L4hy?pid=ImgGn',
                'duree' => '2h32',
                'annee' => '2022',
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
                'pochette' => 'https://th.bing.com/th/id/OIG.OpUsLN_lfPcz6XMhnrYV?pid=ImgGn&w=1024&h=1024&rs=1',
                'duree' => '1h45',
                'annee' => '2023',
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
                'pochette' => 'https://th.bing.com/th/id/OIG.lnttRa2J6n1wq.GFdBgF?pid=ImgGn&w=1024&h=1024&rs=1',
                'duree' => '2h10',
                'annee' => '2024',
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
                'pochette' => 'https://th.bing.com/th/id/OIG.Or1v_bMXh0eBKb.z617h?pid=ImgGn&w=1024&h=1024&rs=1',
                'duree' => '2h05',
                'annee' => '2023',
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
                'pochette' => 'https://th.bing.com/th/id/OIG.DqlyVWOpXSd9yMqhuRsR?pid=ImgGn',
                'duree' => '1h55',
                'annee' => '2025',
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
                'pochette' => 'https://th.bing.com/th/id/OIG.BLr9CmEcS_pjyGsFvgd4?pid=ImgGn',
                'duree' => '2h20',
                'annee' => '2024',
                'date' => date('2024-07-13'),
                'cote' => '8.7',
                'rating' => 'PG-18',
               
                'langue' => 'EN-FR',
                'subtitle' => 'EN-ES-FR',
            ],
            [
                'id' => 9,
                'titre' => 'Juju va dans une école primaire',
                'resume' => 'Une comédie surréaliste explorant les aventures de Juju dans une école primaire.',
                'type' =>'Film',
                'brand' => 'etijay corp',
                'pochette' => 'https://th.bing.com/th/id/OIG.xTQtckZG4gangnsBcx9J?pid=ImgGn&w=1024&h=1024&rs=1',
                'duree' => '1h50',
                'annee' => '2024',
                'date' => date('2024-05-20'),
                'cote' => '7.5',
                'rating' => 'PG-18',
                
                'langue' => 'EN-FR',
                'subtitle' => 'EN-FR-JPN',
            ],
            [
                'id' => 10,
                'titre' => 'Mouad fait le ramadan',
                'resume' => 'Wallah jai pas mangé',
                'type' =>'Film',
                'brand' => 'etijay corp',
                'pochette' => 'https://th.bing.com/th/id/OIG.bfL6gyAiybuTCdI1zRf5?pid=ImgGn&w=1024&h=1024&rs=1',
                'duree' => '2h15',
                'annee' => '2025',
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
                'pochette' => 'https://th.bing.com/th/id/OIG.Lk6eXgwQkXBb259ij95F?pid=ImgGn',
                'duree' => '2h36',
                'annee' => '2023',
                'date' => date('2023-04-30'),
                'cote' => '9.8',
                'rating' => 'PG-18',
                
                'langue' => 'arabe',
                'subtitle' => 'EN-FR',
            ],
        ]);
    }
}
