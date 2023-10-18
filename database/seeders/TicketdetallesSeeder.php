<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TicketdetallesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ticketdetalles')->insert([
        [
            'ticket_id' => '1',
            'usuario_id' => '1',
            'descripcion'=> 'Ticket pendiente de asignar',
            'estado'=> '1',
        ],
        [
            'ticket_id' => '2',
            'usuario_id' => '1',
            'descripcion'=> 'Piezas pendientes de ensamblar',
            'estado'=> '1',
        ],
        ]);
    }
}
