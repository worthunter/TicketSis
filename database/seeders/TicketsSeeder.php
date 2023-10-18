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
            'usuario_id'=> '1',
            'categoria_id' => '1',
            'titulo' => 'Respaldo de información',
            'garantia'=> 'no',
            'sub_estados'=> 'En espera',
            'nom_usu'=> Str::random(20),
            'ape_usu'=> Str::random(20),
            'correo_usu'=> Str::random(10).'@outlook.com',
            'direccion'=> Str::random(20),
            'telefono_usu'=> '1345678921',
            'entidad'=> Str::random(15),
            'municipio'=> Str::random(15),
            'ticket_descrip'=> 'Se requiere un respaldo del sistema',
            'ticket_estado'=> 'abierto',
            'usu_asig'=> 'Luis',
            'estado'=> '1',
            'fecha_asig'=> '2023-07-10 10:20:00',
        ],
        [
            'usuario_id'=> '1',
            'categoria_id' => '1',
            'titulo' => 'Falla del sistema',
            'garantia'=> 'no',
            'sub_estados'=> 'Recibido',
            'nom_usu'=> Str::random(20),
            'ape_usu'=> Str::random(20),
            'correo_usu'=> Str::random(10).'@outlook.com',
            'direccion'=> Str::random(20),
            'telefono_usu'=> '2104567895',
            'entidad'=> Str::random(15),
            'municipio'=> Str::random(15),
            'ticket_descrip'=> 'Reparar y analizar',
            'ticket_estado'=> 'abierto',
            'usu_asig'=> 'Raúl',
            'estado'=> '1',
            'fecha_asig'=> '2023-04-10 09:35:12',
        ],
        [
            'usuario_id'=> '1',
            'categoria_id' => '1',
            'titulo' => 'Llevar equipo a la terminal',
            'garantia'=> 'no',
            'sub_estados'=> 'En espera de confirmación de cliente',
            'nom_usu'=> Str::random(20),
            'ape_usu'=> Str::random(20),
            'correo_usu'=> Str::random(10).'@outlook.com',
            'direccion'=> Str::random(20),
            'telefono_usu'=> '1234567892',
            'entidad'=> Str::random(15),
            'municipio'=> Str::random(15),
            'ticket_descrip'=> 'Faltante de equipo, llevar a sucursal',
            'ticket_estado'=> 'abierto',
            'usu_asig'=> 'Roberto',
            'estado'=> '1',
            'fecha_asig'=> '2023-07-10 10:20:00',
        ],
        [
            'usuario_id'=> '1',
            'categoria_id' => '1',
            'titulo' => 'Adaptación de punto de venta',
            'garantia'=> 'si',
            'sub_estados'=> 'En espera',
            'nom_usu'=> Str::random(20),
            'ape_usu'=> Str::random(20),
            'correo_usu'=> Str::random(10).'@outlook.com',
            'direccion'=> Str::random(20),
            'telefono_usu'=> '1234567891',
            'entidad'=> Str::random(15),
            'municipio'=> Str::random(15),
            'ticket_descrip'=> 'Adaptar punto de venta a negocio',
            'ticket_estado'=> 'abierto',
            'usu_asig'=> 'Saúl',
            'estado'=> '1',
            'fecha_asig'=> '2022-08-24 03:42:00',
        ],
        ]);
    }
}
