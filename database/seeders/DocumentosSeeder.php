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
            ],
            [
                'ticket_id'=> '1',
                'doc_nom' => 'Example',
            ],
            [
                'ticket_id'=> '1',
                'doc_nom' => 'Dropdown',
            ],
            [
                'ticket_id'=> '1',
                'doc_nom' => 'Modal',
            ],
            [
                'ticket_id'=> '1',
                'doc_nom' => 'Header',
            ]
            ]);
    }
}
