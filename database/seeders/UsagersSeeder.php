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
                'role' => 1,
                'password' => Hash::make('buggyCheese')
            ],
        ]);
    }
}
