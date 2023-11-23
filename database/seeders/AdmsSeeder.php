<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('adms')->insert([
        [
            'rol_id' => '2',
            'rfc'=>'UEHDK1278SD3',
            'nombre'=> 'Carlos',
            'apellido' => 'Chevayle',
            'correo' => Str::random(10).'@outlook.com',
            'contra'=> Hash::make('ca'),
            'direccion'=> Str::random(20),
            'telefono'=> '1234567891',
            'extension'=> '235',
            'entidad'=> 'Aguascalientes',
            'municipio'=> 'ags',
            'estado'=> 'activo',
        ],
        [
            'rol_id' => '1',
            'rfc'=>'UEHDK1278SD3',
            'nombre'=> 'José',
            'apellido' => 'Castañeda',
            'correo' => Str::random(10).'@outlook.com',
            'contra'=> Hash::make('contra'),
            'direccion'=> Str::random(20),
            'telefono'=> '1268123492',
            'extension'=> '975',
            'entidad'=> 'Morelos',
            'municipio'=> 'alamos',
            'estado'=> 'activo',
        ],
        [
            'rol_id' => '3',
            'rfc'=>'UEHDK1278SD3',
            'nombre'=> 'Fernando',
            'apelido' => 'Chavez',
            'correo' => Str::random(10).'@outlook.com',
            'contra'=> Hash::make('password'),
            'direccion'=> Str::random(20),
            'telefono'=> '1354123954',
            'extension'=> '795',
            'entidad'=> 'Oaxaca',
            'municipio'=> 'oax',
            'estado'=> 'activo',
        ],
        [
            'rol_id' => '3',
            'rfc'=>'UEHDK1278SD3',
            'nombre'=> 'Gabriel',
            'apellido' => 'Huerta',
            'correo' => Str::random(10).'@outlook.com',
            'contra'=> Hash::make('algosecreto'),
            'direccion'=> Str::random(20),
            'telefono'=> '1485435991',
            'extension'=> '123',
            'entidad'=> 'Morelos',
            'municipio'=> 'mrs',
            'estado'=> 'inactivo',
        ],
    ]);
    }
}
