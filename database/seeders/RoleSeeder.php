<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => "Secretaria",
        ]);
        DB::table('roles')->insert([
            'name' => "Aluno",
        ]);
        DB::table('roles')->insert([
            'name' => "Administrador",
        ]);
        DB::table('roles')->insert([
            'name' => "Nutricionista",
        ]);
        DB::table('roles')->insert([
            'name' => "Corporate",
        ]);
    }
}
