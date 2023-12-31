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
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agente_id'); 
            $table->foreign('agente_id')->references('id')->on('agentes');
            $table->unsignedBigInteger('departamento_id'); 
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->string('titulo', 100)->nullable();
            $table->string('descripcion', 400)->nullable();
            $table->string('estado', 15)->nullable();
            $table->string('notas', 400)->nullable();
            $table->string('vencimiento')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
