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
                'img' => ''
            ],
            [
                'id' => 2,
                'nom' => 'etijay',
                'dateNaissance' => date('Y-m-d'),
                'lieuNaissance' => 'Québec',
                'img' => 'https://cegeptroisrivieres-my.sharepoint.com/:i:/g/personal/etienne_blanchard_frappier_01_edu_cegeptr_qc_ca/Ee4mD-092B1Io5fP8hNNq2sB5XFzH1G_5NhbVpfmxbvw6w?e=W1hrbK'
            ],
            [
                'id' => 3,
                'nom' => 'Master Buggy-Cheese',
                'dateNaissance' => '0-1-1',
                'lieuNaissance' => 'Orange Cheese Town',
                'img' => 'https://cegeptroisrivieres-my.sharepoint.com/:i:/g/personal/etienne_blanchard_frappier_01_edu_cegeptr_qc_ca/Ee4mD-092B1Io5fP8hNNq2sB5XFzH1G_5NhbVpfmxbvw6w?e=W1hrbK'
            ],
            [
                'id' => 4,
                'nom' => 'chumnon',
                'dateNaissance' => date('Y-m-d'),
                'lieuNaissance' => "Saint-Léonard-d'Aston",
                'img' => 'https://cegeptroisrivieres-my.sharepoint.com/:i:/g/personal/etienne_blanchard_frappier_01_edu_cegeptr_qc_ca/Ee4mD-092B1Io5fP8hNNq2sB5XFzH1G_5NhbVpfmxbvw6w?e=W1hrbK'
            ],
            [
                'id' => 5,
                'nom' => 'Master Buggy-Cheese',
                'dateNaissance' => '0-1-1',
                'lieuNaissance' => 'Orange Cheese Town',
                'img' => 'https://cegeptroisrivieres-my.sharepoint.com/:i:/g/personal/etienne_blanchard_frappier_01_edu_cegeptr_qc_ca/Ee4mD-092B1Io5fP8hNNq2sB5XFzH1G_5NhbVpfmxbvw6w?e=W1hrbK'
            ],
            [
                'id' => 6,
                'nom' => 'Master Buggy-Cheese',
                'dateNaissance' => '0-1-1',
                'lieuNaissance' => 'Orange Cheese Town',
                'img' => 'https://cegeptroisrivieres-my.sharepoint.com/:i:/g/personal/etienne_blanchard_frappier_01_edu_cegeptr_qc_ca/Ee4mD-092B1Io5fP8hNNq2sB5XFzH1G_5NhbVpfmxbvw6w?e=W1hrbK'
            ],
            [
                'id' => 7,
                'nom' => 'Master Buggy-Cheese',
                'dateNaissance' => '0-1-1',
                'lieuNaissance' => 'Orange Cheese Town',
                'img' => 'https://cegeptroisrivieres-my.sharepoint.com/:i:/g/personal/etienne_blanchard_frappier_01_edu_cegeptr_qc_ca/Ee4mD-092B1Io5fP8hNNq2sB5XFzH1G_5NhbVpfmxbvw6w?e=W1hrbK'
            ],
            [
                'id' => 8,
                'nom' => 'Master Buggy-Cheese',
                'dateNaissance' => '0-1-1',
                'lieuNaissance' => 'Orange Cheese Town',
                'img' => 'https://cegeptroisrivieres-my.sharepoint.com/:i:/g/personal/etienne_blanchard_frappier_01_edu_cegeptr_qc_ca/Ee4mD-092B1Io5fP8hNNq2sB5XFzH1G_5NhbVpfmxbvw6w?e=W1hrbK'
            ],
            [
                'id' => 9,
                'nom' => 'Master Buggy-Cheese',
                'dateNaissance' => '0-1-1',
                'lieuNaissance' => 'Orange Cheese Town',
                'img' => 'https://cegeptroisrivieres-my.sharepoint.com/:i:/g/personal/etienne_blanchard_frappier_01_edu_cegeptr_qc_ca/Ee4mD-092B1Io5fP8hNNq2sB5XFzH1G_5NhbVpfmxbvw6w?e=W1hrbK'
            ],
            [
                'id' => 10,
                'nom' => 'Master Buggy-Cheese',
                'dateNaissance' => '0-1-1',
                'lieuNaissance' => 'Orange Cheese Town',
                'img' => 'https://cegeptroisrivieres-my.sharepoint.com/:i:/g/personal/etienne_blanchard_frappier_01_edu_cegeptr_qc_ca/Ee4mD-092B1Io5fP8hNNq2sB5XFzH1G_5NhbVpfmxbvw6w?e=W1hrbK'
            ],
            [
                'id' => 11,
                'nom' => 'Master Buggy-Cheese',
                'dateNaissance' => '0-1-1',
                'lieuNaissance' => 'Orange Cheese Town',
                'img' => 'https://cegeptroisrivieres-my.sharepoint.com/:i:/g/personal/etienne_blanchard_frappier_01_edu_cegeptr_qc_ca/Ee4mD-092B1Io5fP8hNNq2sB5XFzH1G_5NhbVpfmxbvw6w?e=W1hrbK'
            ],
        ]);

    }
}
