<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
        [
            'nombre'=> 'Preventivo',
            'estado' => '1',
        ],
        [
            'nombre'=> 'Correctivo',
            'estado' => '1',
        ],
        [
            'nombre'=> 'Redes',
            'estado' => '1',
        ],
        [
            'nombre'=> 'Software',
            'estado' => '1',
        ],
        [
            'nombre'=> 'CAS Brother',
            'estado' => '1',
        ]
        ]);
    }
}
