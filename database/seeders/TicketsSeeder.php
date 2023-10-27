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
            'modelo' => 'EliteDisplay E201',
            'cat_modelo'=> 'Monitores',
            'subestados_id'=> '1',
            'ticket_descrip'=> 'Se requiere un respaldo del sistema',
            'ticket_estado'=> 'abierto',
            'estado'=> '1',
            'fecha_asig'=> '2023-07-10 10:20:00',
        ],
        [
            'cliente_id'=> '1',
            'agente_id'=> '3',
            'categoria_id' => '1',
            'titulo' => 'Falla del sistema',
            'prioridad' => 'media',
            'garantia'=> 'no',
            'modelo' => 'OHAUS defender 3000',
            'cat_modelo'=> 'Básculas',
            'subestados_id'=> '2',
            'ticket_descrip'=> 'Reparar y analizar',
            'ticket_estado'=> 'abierto',
            'estado'=> '1',
            'fecha_asig'=> '2023-04-10 09:35:12',
        ],
        [
            'cliente_id'=> '1',
            'agente_id'=> '1',
            'categoria_id' => '1',
            'titulo' => 'Llevar equipo a la terminal',
            'prioridad' => 'baja',
            'garantia'=> 'no',
            'modelo' => 'LaserJet 501',
            'cat_modelo'=> 'impresoras',
            'subestados_id'=> '4',
            'ticket_descrip'=> 'Faltante de equipo, llevar a sucursal',
            'ticket_estado'=> 'abierto',
            'estado'=> '1',
            'fecha_asig'=> '2023-07-10 10:20:00',
        ],
        [
            'cliente_id'=> '1',
            'agente_id'=> '2',
            'categoria_id' => '1',
            'titulo' => 'Adaptación de punto de venta',
            'prioridad' => 'alta',
            'garantia'=> 'si',
            'modelo' => 'Miniprinter Pro 301',
            'cat_modelo'=> 'Impresoras',
            'subestados_id'=> '2',
            'ticket_descrip'=> 'Adaptar punto de venta a negocio',
            'ticket_estado'=> 'abierto',
            'estado'=> '1',
            'fecha_asig'=> '2022-08-24 03:42:00',
        ],
        ]);
    }
}
