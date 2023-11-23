<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('clientes')->insert([
        [
            'rol_id' => '5',
            'empresa'=>'cecsa',
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
            'rol_id' => '5',
            'empresa'=>'telmex',
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
            'estado'=> 'inactivo',

        ],
        [
            'rol_id' => '5',
            'empresa'=>'cummins',
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
            'rol_id' => '5',
            'empresa'=>'banorte',
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
            'estado'=> 'activo',
        ],
        [
            'rol_id' => '5',
            'empresa'=>'carso',
            'rfc'=>'UEHDK1278SD3',
            'nombre'=> 'Pablo',
            'apellido' => 'Duarte',
            'correo' => Str::random(10).'@outlook.com',
            'contra'=> Hash::make('contrasena1234'),
            'direccion'=> Str::random(20),
            'telefono'=> '156219584',
            'extension'=> '546',
            'entidad'=> 'Nayarit',
            'municipio'=> 'nyt',
            'estado'=> 'activo',
        ],
    ]);
    }
}
