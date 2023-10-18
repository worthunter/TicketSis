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
            'estado'=> '1',
        ],
        [
            'modelo' => 'En espera de diagnóstico',
            'estado'=> '1',
        ],
        [
            'modelo' => 'En espera de cotización',
            'estado'=> '1',
        ],
        [
            'modelo' => 'En espera de autorizacion del cliente
            ',
            'estado'=> '1',
        ],
        [
            'modelo' => 'En espera de Refacciones',
            'estado'=> '1',
        ],
        [
            'modelo' => 'Realizado si entregar',
            'estado'=> '1',
        ],
        [
            'modelo' => 'Entregado',
            'estado'=> '1',
        ],
        [
            'modelo' => 'Entregado sin facturar',
            'estado'=> '1',
        ],
        [
            'modelo' => 'En garantia',
            'estado'=> '1',
        ],
        ]);
    }
}
