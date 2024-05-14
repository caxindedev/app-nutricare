<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            RoleUserSeeder::class,
        ]);

        /*\App\Models\User::factory(10)->has(\App\Models\Role::factory(1))->create();
        \App\Models\Curso::factory()->count(3)->create();
        \App\Models\Ability::factory()->count(4)->create();
        \App\Models\AbilityRole::factory()->count(6)->create();
        \App\Models\Empresa::factory()->count(10)->create();
        \App\Models\Aluno::factory()->count(100)->create();*/
    }
}
