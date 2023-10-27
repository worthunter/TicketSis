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
            'rol' => 'Administrador Global',
        ],
        [
            'rol' => 'Administrador 1',
        ],
        [
            'rol' => 'Administrador 2',
        ],
        [
            'rol' => 'Soporte',
        ],
        [
            'rol' => 'Cliente',
        ],
    ]);
    }
}
