<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {                                       //Orden por llaves foráneas
        $this->call('RolesSeeder');         //0
        $this->call('PersonasSeeder');      //0
        $this->call('Subestadoseeder');     //0
        $this->call('CategoriasSeeder');    //0
        $this->call('AgentesSeeder');       //2 rol_id, persona_id
        $this->call('ClientesSeeder');      //2 rol_id, persona_id
        $this->call('AdmsSeeder');          //2 rol_id, persona_id
        $this->call('TicketsSeeder');       //4 cliente_id, agente_id, categoría_id, subestados_id
        $this->call('TareasSeeder');        //1 agente_id
        $this->call('DocumentosSeeder');    //1 ticket_id
        $this->call('TareadetallesSeeder'); //1 tarea_id
        $this->call('TicketdetallesSeeder');//1 ticket_id
    }
}
