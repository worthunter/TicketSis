<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departamentos')->insert([
            [
                'nombre'=> 'Soporte',
            ],
            [
                'nombre'=> 'Administración',
            ],
            [
                'nombre'=> 'Ventas',
            ],
            [
                'nombre'=> 'Contabilidad',
            ],
            [
                'nombre'=> 'Marketing',
            ],
            [
                'nombre'=> 'Desarrollo',
            ]
            ]);
    }
}
