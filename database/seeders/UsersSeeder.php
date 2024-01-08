<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'rol_id' => '5',
                'departamento_id'=>'3',
                'nombre'=> 'Carlos Duarte',
                'empresa'=> 'CALCO',
                'email' => 'heroku@outlook.com',
                'password'=> Hash::make('heroku'),
                'rfc'=>'UEHDK1278SD3',
                'direccion'=> Str::random(20),
                'telefono'=> '1234567891',
                'extension'=> '235',
                'entidad'=> 'Aguascalientes',
                'municipio'=> 'ags',
                'estado'=> 'activo',
            ],
            [
                'rol_id' => '1',
                'departamento_id'=>'6',
                'nombre'=> 'José María Castañeda Gallardo',
                'empresa'=> 'PDV',
                'email' => 'test@test.com',
                'password'=> Hash::make('heroku123'),
                'rfc'=>'UEHDK1278SD3',
                'direccion'=> 'San artín #430 Col. Ricardo B. Anaya',
                'telefono'=> '1268123492',
                'extension'=> '975',
                'entidad'=> 'San Luis Potosí',
                'municipio'=> 'SLP',
                'estado'=> 'activo',
            ],
            [
                'rol_id' => '4',
                'departamento_id'=>'1',
                'nombre'=> 'Fernando Olivares',
                'empresa'=> 'PDV',
                'email' => Str::random(10).'@outlook.com',
                'password'=> Hash::make('password'),
                'rfc'=>'UEHDK1278SD3',
                'direccion'=> Str::random(20),
                'telefono'=> '1354123954',
                'extension'=> '795',
                'entidad'=> 'Oaxaca',
                'municipio'=> 'oax',
                'estado'=> 'activo',
            ],
            [
                'rol_id' => '4',
                'departamento_id'=>'2',
                'nombre'=> 'Gabriel Ponce',
                'empresa'=> 'PDV',
                'email' => Str::random(10).'@outlook.com',
                'password'=> Hash::make('algosecreto'),
                'rfc'=>'UEHDK1278SD3',
                'direccion'=> Str::random(20),
                'telefono'=> '1485435991',
                'extension'=> '123',
                'entidad'=> 'Morelos',
                'municipio'=> 'mrs',
                'estado'=> 'inactivo',
            ],
            [
                'rol_id' => '4',
                'departamento_id'=>'3',
                'nombre'=> 'Pablo García',
                'empresa'=> 'TELMEX',
                'email' => Str::random(10).'@outlook.com',
                'password'=> Hash::make('contrasena1234'),
                'rfc'=>'UEHDK1278SD3',
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
