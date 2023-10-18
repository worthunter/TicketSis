<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
        [
            'nom_usu'=> 'Carlos',
            'ape_usu' => 'Chevayle',
            'correo_usu' => Str::random(10).'@outlook.com',
            'contra_usu'=> Hash::make('password'),
            'rol'=> '5',
            'direccion'=> Str::random(20),
            'telefono_usu'=> '1234567891',
            'extension'=> '235',
            'entidad'=> 'Aguascalientes',
            'municipio'=> 'ags',
            'estado'=> '1',
        ],
        [
            'nom_usu'=> 'José',
            'ape_usu' => 'Castañedea',
            'correo_usu' => Str::random(10).'@outlook.com',
            'contra_usu'=> Hash::make('password'),
            'rol'=> '1',
            'direccion'=> Str::random(20),
            'telefono_usu'=> '1268123492',
            'extension'=> '975',
            'entidad'=> 'Morelos',
            'municipio'=> 'alamos',
            'estado'=> '1',
        ],
        [
            'nom_usu'=> 'Fernando',
            'ape_usu' => 'Chavez',
            'correo_usu' => Str::random(10).'@outlook.com',
            'contra_usu'=> Hash::make('password'),
            'rol'=> '3',
            'direccion'=> Str::random(20),
            'telefono_usu'=> '1354123954',
            'extension'=> '795',
            'entidad'=> 'Oaxaca',
            'municipio'=> 'oax',
            'estado'=> '1',
        ],
        [
            'nom_usu'=> 'Gabriel',
            'ape_usu' => 'Huerta',
            'correo_usu' => Str::random(10).'@outlook.com',
            'contra_usu'=> Hash::make('password'),
            'rol'=> '2',
            'direccion'=> Str::random(20),
            'telefono_usu'=> '1485435991',
            'extension'=> '123',
            'entidad'=> 'Morelos',
            'municipio'=> 'mrs',
            'estado'=> '1',
        ],
        [
            'nom_usu'=> 'Pablo',
            'ape_usu' => 'Duarte',
            'correo_usu' => Str::random(10).'@outlook.com',
            'contra_usu'=> Hash::make('password'),
            'rol'=> '4',
            'direccion'=> Str::random(20),
            'telefono_usu'=> '156219584',
            'extension'=> '546',
            'entidad'=> 'Nayarit',
            'municipio'=> 'nyt',
            'estado'=> '1',
        ],
        ]);
    }
}