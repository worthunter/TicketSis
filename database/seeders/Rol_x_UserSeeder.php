<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Rol_x_UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('rol_x_user')->insert([
        [
            'rol_id' => '4',
            'user_id'=>'1',
        ],
        [
            'rol_id' => '4',
            'user_id'=>'2',
        ],
        [
            'rol_id' => '4',
            'user_id'=>'3',
        ],
        [
            'rol_id' => '3',
            'user_id'=>'4',
        ],
        [
            'rol_id' => '5',
            'user_id'=>'5',
        ],
    ]);
    }
}
