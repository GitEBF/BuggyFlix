<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UsagersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usagers')->insert([
            [
                'email' => 'yup@hotmail.ca',
                'birthDate' => '2014-03-21',
                'role' => '2',
                'password' => Hash::make('buggyCheese')
            ],
            [
                'email' => 'root@root.ca',
                'birthDate' => '1710-03-21',
                'role' => '1',
                'password' => Hash::make('root')
            ],
            [
                'email' => 'kid@kid.ca',
                'birthDate' => '2022-03-21',
                'role' => '3',
                'password' => Hash::make('kid')
            ],
            [
                'email' => 'lamothear02@gmail.com',
                'birthDate' => '2005-01-28',
                'role' => '1',
                'password' => Hash::make('123soleil')
            ],
        ]);
    }
}
