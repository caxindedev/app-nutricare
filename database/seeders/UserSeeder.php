<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Osvaldo Pedro",
            'email' => 'osvaldo.pedro@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => "Sávio Figueiredo",
            'email' => 'savio.figueiredo@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => "Otávio Francisco",
            'email' => 'otavio.francisco@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => "Edna Sebastião",
            'email' => 'edna.sebastiao@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => "Rebeca Costa",
            'email' => 'rebeca.costa@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => "Yuri Santos",
            'email' => 'yuri.santos@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => "José António",
            'email' => 'jose.antonio@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => "Walter Costa",
            'email' => 'walter.costa@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => "Jéssica Rosário",
            'email' => 'jessica.rosario@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
