<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SecretariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Carlos Caxinde",
            'email' => 'carlos.caxinde@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
