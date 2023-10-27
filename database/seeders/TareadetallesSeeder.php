<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TareadetallesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tareadetalles')->insert([
        [
            'tarea_id'=> '1',
            'descripcion' => 'Tarea postergada 3 días',
            'estado'=> '1',
        ],
        [
            'tarea_id'=> '2',
            'descripcion' => 'Entrega pendiente',
            'estado'=> '1',
        ],
        ]);
    }
}
