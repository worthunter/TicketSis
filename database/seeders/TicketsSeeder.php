<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
        [
            'cliente_id'=> '1',
            'agente_id'=> '2',
            'categoria_id' => '1',
            'titulo' => 'Respaldo de información',
            'prioridad' => 'alta',
            'garantia'=> 'no',
            'subestados_id'=> '1',
            'descripcion'=> 'Se requiere un respaldo del sistema',
            'estado'=> 'abierto',
            'notas'=> 'Retomar la actividad de reespaldo de información',
            'fecha_asig'=> '2023-07-10 10:20:00',
        ],
        [
            'cliente_id'=> '2',
            'agente_id'=> '3',
            'categoria_id' => '1',
            'titulo' => 'Falla del sistema',
            'prioridad' => 'media',
            'garantia'=> 'no',
            'subestados_id'=> '2',
            'descripcion'=> 'Reparar y analizar',
            'estado'=> 'abierto',
            'notas'=> 'Comprobar la falla del sistema',
            'fecha_asig'=> '2023-04-10 09:35:12',
        ],
        [
            'cliente_id'=> '3',
            'agente_id'=> '1',
            'categoria_id' => '1',
            'titulo' => 'Llevar equipo a la terminal',
            'prioridad' => 'baja',
            'garantia'=> 'no',
            'subestados_id'=> '4',
            'descripcion'=> 'Faltante de equipo, llevar a sucursal',
            'estado'=> 'cerrado',
            'notas'=> 'Retomar la actividad de reespaldo en la fecha asignada',
            'fecha_asig'=> '2023-07-10 10:20:00',
        ],
        [
            'cliente_id'=> '4',
            'agente_id'=> '2',
            'categoria_id' => '1',
            'titulo' => 'Adaptación de punto de venta',
            'prioridad' => 'alta',
            'garantia'=> 'si',
            'subestados_id'=> '2',
            'descripcion'=> 'Adaptar punto de venta a negocio',
            'estado'=> 'cerrado',
            'notas'=> 'Retomar la actividad en sucursal',
            'fecha_asig'=> '2022-08-24 03:42:00',
        ],
        ]);
    }
}
