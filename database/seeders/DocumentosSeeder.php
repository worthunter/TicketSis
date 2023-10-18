<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('documentos')->insert([
            [
                'ticket_id'=> '1',
                'doc_nom' => 'Ejemplo',
                'estado' => '1',
            ],
            [
                'ticket_id'=> '1',
                'doc_nom' => 'Example',
                'estado' => '1',
            ],
            [
                'ticket_id'=> '1',
                'doc_nom' => 'Dropdown',
                'estado' => '1',
            ],
            [
                'ticket_id'=> '1',
                'doc_nom' => 'Modal',
                'estado' => '1',
            ],
            [
                'ticket_id'=> '1',
                'doc_nom' => 'Header',
                'estado' => '1',
            ]
            ]);
    }
}
