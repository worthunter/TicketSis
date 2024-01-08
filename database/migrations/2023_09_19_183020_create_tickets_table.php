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
            $table->id();
            //Llaves foraneas
            //$table->unsignedBigInteger('cliente_id');
            //$table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            //$table->unsignedBigInteger('agente_id'); 
            //$table->foreign('agente_id')->references('id')->on('agentes')->onDelete('cascade'); 
            $table->unsignedBigInteger('categoria_id'); 
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->unsignedBigInteger('subestados_id');
            $table->foreign('subestados_id')->references('id')->on('subestados');
            $table->unsignedBigInteger('departamento_id'); 
            $table->foreign('departamento_id')->references('id')->on('departamentos');

            //Prueba de doble llave foranea para la tabla Users
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('agente_id');
            $table->foreign('agente_id')->references('id')->on('users')->onDelete('cascade');

            //Campos generales
            $table->string('titulo', 100)->nullable();
            $table->string('prioridad', 20)->nullable();
            $table->string('garantia', 2)->nullable();
            $table->string('descripcion', 400)->nullable();
            $table->string('estado', 15)->nullable();
            $table->string('notas', 400)->nullable();
            $table->date('fecha_asig')->nullable();
            $table->date('vencimiento')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            //Preventivo
            $table->string('prev_tipo', 50)->nullable(); //tipo de equipo
            $table->string('prev_marca', 50)->nullable();
            $table->string('prev_modelo', 50)->nullable();
            $table->string('prev_serie', 50)->nullable();
            $table->string('prev_requiere', 80)->nullable(); //revisión, atender en sitio, etc.
            //Correctivo
            $table->string('corr_tipo', 50)->nullable();
            $table->string('corr_marca', 50)->nullable();
            $table->string('corr_modelo', 50)->nullable();
            $table->string('corr_serie', 50)->nullable();
            $table->string('corr_requiere', 80)->nullable();
            //Redes
            $table->string('red_tipo_servicio', 50)->nullable(); //Instalación, configuración, mantenimiento, otro.
            $table->string('red_num_equipos', 3)->nullable();
            $table->string('red_compania', 80)->nullable(); //Compañía de internet
            $table->string('red_requiere', 80)->nullable(); //Herramienta o material para resolver
            //Software
            $table->string('soft_tipo_servicio', 80)->nullable(); //Instalación, configuración, capacitación, mantenimiento, otro.
            $table->string('soft_nombre',80)->nullable(); //Nombre del software
            $table->string('soft_version', 80)->nullable(); //Compañía de internet
            $table->string('soft_requiere', 80)->nullable();
            //CAS Brother
            $table->string('cas_caso', 80)->nullable();
            $table->string('cas_tipo_servicio', 80)->nullable(); //Servicio garantías ASC, otro.
            $table->string('cas_categoria', 40)->nullable();
            $table->string('cas_modelo', 80)->nullable();
            $table->string('cas_serie', 80)->nullable();
            $table->date('cas_compra')->nullable();
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
