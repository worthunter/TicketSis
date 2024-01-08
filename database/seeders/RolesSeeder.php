<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('roles')->insert([
        [
            'nombre' => 'Administrador Global',
        ],
        [
            'nombre' => 'Administrador 1',
        ],
        [
            'nombre' => 'Administrador 2',
        ],
        [
            'nombre' => 'Agente',
        ],
        [
            'nombre' => 'Cliente',
        ],
    ]);
    }
}
