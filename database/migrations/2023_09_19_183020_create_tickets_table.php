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
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->unsignedBigInteger('agente_id'); 
            $table->foreign('agente_id')->references('id')->on('agentes'); 
            $table->unsignedBigInteger('categoria_id'); 
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->string('titulo', 100)->nullable();
            $table->string('prioridad')->nullable();
            $table->string('garantia', 2)->nullable();
            $table->unsignedBigInteger('subestados_id');
            $table->foreign('subestados_id')->references('id')->on('subestados');
            $table->string('ticket_descrip', 400)->nullable();
            $table->string('ticket_estado')->nullable();
            $table->string('agente_asig')->nullable();
            $table->string('estado')->nullable();
            $table->date('fecha_asig')->nullable();
            $table->timestamp('fecha_crea')->nullable();
            $table->timestamp('fecha_mod')->nullable();
            $table->timestamp('fecha_eli')->nullable();
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
