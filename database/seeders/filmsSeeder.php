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
                'pochette' => 'https://grandmarcheistanbul.fr/wp-content/uploads/6420318000891.jpg',
                'duree' => '9h56',
                'annee' => '2023',
                'rating' => '9.7',
                'realisateur' => 1,
                'producteur' => 2,
            ],
            [
                'id' => 2,
                'titre' => 'Mange tout sa',
                'resume' => 'Le film officiel de sir Isaac Pipoco qui mange les noix',
                'pochette' => 'https://i.scdn.co/image/ab67616d0000b2739eda0eb834ac399764455ec8',
                'duree' => '2h32',
                'annee' => '2022',
                'rating' => '20',
                'realisateur' => 3,
                'producteur' => 4,
            ],
            [
                'id' => 3,
                'titre' => 'etienne se pend en live',
                'resume' => 'Le film non-officiel de etienne',
                'pochette' => 'https://th.bing.com/th/id/OIP.Bydn1N4aXZ1c9XX7cJp6wgHaHa?pid=ImgDet&rs=1',
                'duree' => '2h32',
                'annee' => '2022',
                'rating' => '20',
                'realisateur' => 3,
                'producteur' => 4,
            ],
            [
                'id' => 4,
                'titre' => 'Le Québectastrophe',
                'resume' => 'Une comédie désastreuse sur les mésaventures du quotidien au Québec.',
                'pochette' => 'https://th.bing.com/th/id/R.ff9b37915814fe23797079e439524c9e?rik=6b%2fEieoArn9b%2fA&riu=http%3a%2f%2ffr.web.img5.acsta.net%2fpictures%2f18%2f10%2f10%2f15%2f38%2f1128360.jpg&ehk=I0tAXE0FJyJ72yLJAlHzQY8sF0XyymN7RzR1ysliFHE%3d&risl=&pid=ImgRaw&r=0',
                'duree' => '1h45',
                'annee' => '2023',
                'rating' => '8.5',
                'realisateur' => 5,
                'producteur' => 6,
            ],
            [
                'id' => 5,
                'titre' => 'Poutine à Gogo',
                'resume' => 'Un film hilarant sur la quête de la meilleure poutine du Québec.',
                'pochette' => 'https://fr.web.img2.acsta.net/pictures/17/03/20/09/46/147185.jpg',
                'duree' => '2h10',
                'annee' => '2024',
                'rating' => '9.2',
                'realisateur' => 7,
                'producteur' => 8,
            ],
            [
                'id' => 6,
                'titre' => 'Le Voyage du Sirop de érable',
                'resume' => 'Une aventure comique à travers les érablières du Québec pour retrouver un sirop précieux.',
                'pochette' => 'https://th.bing.com/th/id/R.33e12e2ac326347629ca05dd3ebb6909?rik=hcT95A1kYVrAbQ&riu=http%3a%2f%2fcedric974.c.e.pic.centerblog.net%2fo%2f8188c854.jpg&ehk=%2bhPXQ4HHD3lLdmA7HUjTNIdAcjxGxR54OwgIW7SD40Y%3d&risl=&pid=ImgRaw&r=0',
                'duree' => '2h05',
                'annee' => '2023',
                'rating' => '7.8',
                'realisateur' => 9,
                'producteur' => 10,
            ],
            [
                'id' => 7,
                'titre' => 'Maudit Hiver Québécois',
                'resume' => 'Une comédie absurde sur les défis de lhiver québécois, avec des personnages farfelus.',
                'pochette' => 'https://th.bing.com/th/id/R.1ed0df7795167f19d0b9c1410243c572?rik=FLuz5Fjemv7%2bMg&riu=http%3a%2f%2ffr.web.img6.acsta.net%2fpictures%2f17%2f01%2f23%2f11%2f55%2f108361.jpg&ehk=a8DScmleAdrKMfYfNTOUwv5U7Q%2frFpn%2flX5BhmHK%2b%2bI%3d&risl=&pid=ImgRaw&r=0',
                'duree' => '1h55',
                'annee' => '2025',
                'rating' => '8.0',
                'realisateur' => 2,
                'producteur' => 1,
            ],
            [
                'id' => 8,
                'titre' => 'Escapades à La Poutine',
                'resume' => 'Une série de péripéties comiques liées à la dégustation de poutines dans tout le Québec.',
                'pochette' => 'https://th.bing.com/th/id/R.6685f0f5b0030a01795bd3a670d74dca?rik=6x7pPmgmUsZQsA&riu=http%3a%2f%2ffr.web.img5.acsta.net%2fpictures%2f19%2f03%2f22%2f10%2f28%2f3053424.jpg&ehk=wfIqFbmbHz6A2MHYbKfVAtY5rUHgUVsb0QOmGmajPVo%3d&risl=&pid=ImgRaw&r=0',
                'duree' => '2h20',
                'annee' => '2024',
                'rating' => '8.7',
                'realisateur' => 4,
                'producteur' => 3,
            ],
            [
                'id' => 9,
                'titre' => 'Le Québec Ab-surde',
                'resume' => 'Une comédie surréaliste explorant les bizarreries du Québec avec une touche de absurdité.',
                'pochette' => 'https://th.bing.com/th/id/R.7c51605aba2564e795c1c00e3304a458?rik=d9fqxCuA%2foodAg&riu=http%3a%2f%2ffr.web.img2.acsta.net%2fpictures%2f16%2f12%2f07%2f16%2f42%2f055198.jpg&ehk=w0R3EcoxtRdwvtc2q%2fGBMvi4isZzRJeVcSh7pXeDKVQ%3d&risl=&pid=ImgRaw&r=0',
                'duree' => '1h50',
                'annee' => '2024',
                'rating' => '7.5',
                'realisateur' => 6,
                'producteur' => 5,
            ],
            [
                'id' => 10,
                'titre' => 'La Quête du Sirop Magique',
                'resume' => 'Une aventure comique pour sauver le sirop de érable magique du Québec des méchants sorciers.',
                'pochette' => 'https://th.bing.com/th/id/OIP.OYEiST_eod7_E41Qy9ycHAHaHa?pid=ImgDet&rs=1',
                'duree' => '2h15',
                'annee' => '2025',
                'rating' => '9.0',
                'realisateur' => 8,
                'producteur' => 7,
            ],
        ]);
    }
}
