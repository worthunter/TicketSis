<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('adms')->insert([
        [
            'rol_id' => '1',
            'persona_id'=> '2',
        ],
        [
            'rol_id' => '2',
            'persona_id'=> '3',
        ],
        [
            'rol_id' => '3',
            'persona_id'=> '4',
        ],
        [
            'rol_id' => '3',
            'persona_id'=> '1',
        ],
    ]);
    }
}
