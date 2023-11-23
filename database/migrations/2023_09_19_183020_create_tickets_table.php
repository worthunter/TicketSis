<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            /* CAMPOS DE OSTICKET

            id
            titulo
            estado (subestados->subestados_id)
            prioridad
            departamento
            categoria (categoria_id)
            cliente (nombre, apellido, correo, número tel.) (Link a cliente.show)
            agente (agente->agente_id) (agente que creó el ticket)
            ing_asignado (agente->agente_id)
            descripción
            vencimiento
            creado
            modificado
            cerrado

            *****Datos por categoría de ticket 
        ---PREVENTIVO---
            tipo_prev (tipo de equipo)
            marca_prev
            modelo_prev
            serie_prev
            falla_prev
            requerimientos (requiere) (revisión)

        ---CORRECTIVO---
            tipo_corr (tipo de equipo)
            marca_corr
            modelo_corr
            serie_corr
            falla_corr
            requerimientos (requiere) (revisión)

        ---REDES---
            servicio_red (tipo de servicio)
            num_equipos_red (número de equipos en la red)
            compania_red
            herramienta_red (o material para atender)
            descrip_red

        ---SOFTWARE---
            servicio_soft (tipo de servicio)
            nombre_soft
            version_soft
            herramienta_soft (o material para atender)
            adicional_soft

        ---CAS BROTHER---
            caso_cas (número del caso)
            servicio_cas (servicio de garantía o reparación, etc)
            categoria_cas (Tipo de impresora)
            modelo_cas
            serie_cas
            compra_cas (fecha de compra)
            falla_cas
            descrip_cas


            */
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->unsignedBigInteger('agente_id'); 
            $table->foreign('agente_id')->references('id')->on('agentes'); 
            $table->unsignedBigInteger('categoria_id'); 
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->string('titulo', 100)->nullable();
            $table->string('prioridad')->nullable();
            $table->string('garantia', 2)->nullable();
            $table->string('modelo', 60)->nullable();
            $table->string('cat_modelo', 60)->nullable();
            $table->unsignedBigInteger('subestados_id');
            $table->foreign('subestados_id')->references('id')->on('subestados');
            $table->string('ticket_descrip', 400)->nullable();
            $table->string('ticket_estado')->nullable();
            $table->date('fecha_asig')->nullable();
            $table->string('estado', 15)->nullable();
            $table->string('notas', 400)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();         
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
