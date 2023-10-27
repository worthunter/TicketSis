<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SubestadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subestados')->insert([
        [
            'nombre' => 'Recibido',
        ],
        [
            'modelo' => 'En espera de diagnóstico',
        ],
        [
            'modelo' => 'En espera de cotización',
        ],
        [
            'modelo' => 'En espera de autorizacion del cliente',
        ],
        [
            'modelo' => 'En espera de Refacciones',
        ],
        [
            'modelo' => 'Realizado si entregar',
        ],
        [
            'modelo' => 'Entregado',
        ],
        [
            'modelo' => 'Entregado sin facturar',
        ],
        [
            'modelo' => 'En garantia',
        ],
        ]);
    }
}
