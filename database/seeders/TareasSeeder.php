<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TareasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tareas')->insert([
        [
            'usuario_id' => '1',
            'titulo' => 'Entregar componentes',
            'usu_asignado'=> 'Luis',
            'descripcion'=> 'Llevar los componentes a la sucursal',
            'estado'=> '1',
        ],
        [
            'usuario_id' => '2',
            'titulo' => 'Respaldo BD',
            'usu_asignado'=> 'Raúl',
            'descripcion'=> 'Realizar el respaldo de la base de datos',
            'estado'=> '1',
        ],
        ]);
    }
}
