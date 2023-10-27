<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('agentes')->insert([
        [
            'rol_id' => '4',
            'persona_id'=> '3',
        ],
        [
            'rol_id' => '4',
            'persona_id'=> '1',
        ],
        [
            'rol_id' => '4',
            'persona_id'=> '5',
        ],
        [
            'rol_id' => '4',
            'persona_id'=> '4',
        ],
        [
            'rol_id' => '4',
            'persona_id'=> '3',
        ],
    ]);
    }
}
