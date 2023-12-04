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
            'agente_id' => '1',
            'departamento_id' => '1',
            'titulo' => 'Entregar componentes',
            'descripcion'=> 'Llevar los componentes a la sucursal',
            'estado'=> 'abierto',
            'notas'=> 'Reportarse en la sucursal',
        ],
        [
            'agente_id' => '2',
            'departamento_id' => '2',
            'titulo' => 'Respaldo BD',
            'descripcion'=> 'Realizar el respaldo de la base de datos',
            'estado'=> 'abierto',
            'notas'=> 'Retomar la actividad de reespaldo en la fecha asignada',
        ],
        [
            'agente_id' => '3',
            'departamento_id' => '3',
            'titulo' => 'Realizar correciones en software',
            'descripcion'=> 'Entrar al codigo fuente del programa para modificar y adaptar el sistema a los requerimientos',
            'estado'=> 'abierto',
            'notas'=> '',
        ],
        [
            'agente_id' => '2',
            'departamento_id' => '4',
            'titulo' => 'estadisticas del servidor',
            'descripcion'=> 'implementar estadísticas en el servidor',
            'estado'=> 'cerrado',
            'notas'=> 'Instalar el software necesario para respaldas la información',
        ],
        [
            'agente_id' => '1',
            'departamento_id' => '5',
            'titulo' => 'Entregar componentes',
            'descripcion'=> 'Llevar los componentes a la sucursal',
            'estado'=> 'abierto',
            'notas'=> '',
        ],
        [
            'agente_id' => '3',
            'departamento_id' => '6',
            'titulo' => 'Respaldo BD',
            'descripcion'=> 'Realizar el respaldo de la base de datos',
            'estado'=> 'cerrado',
            'notas'=> '',
        ],
        ]);
    }
}
