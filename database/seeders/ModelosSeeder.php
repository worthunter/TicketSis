<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ModelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modelos')->insert([
        [
            'ticket_id'=> '1',
            'usuario_id' => '1',
            'modelo' => 'EliteDisplay E201',
            'categoria'=> 'Monitores',
        ],
        [
            'ticket_id'=> '1',
            'usuario_id' => '1',
            'modelo' => 'OHAUS defender 3000',
            'categoria'=> 'Básculas',
        ],
        [
            'ticket_id'=> '1',
            'usuario_id' => '1',
            'modelo' => 'LaserJet 501',
            'categoria'=> 'impresoras',
        ],
        [
            'ticket_id'=> '1',
            'usuario_id' => '1',
            'modelo' => 'Miniprinter Pro 301',
            'categoria'=> 'Impresoras',
        ],
        ]);
    }
}
