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
        Schema::create('tareadetalles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tarea_id'); 
            $table->foreign('tarea_id')->references('id')->on('tareas');
            $table->unsignedBigInteger('usuario_id'); 
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->string('descripcion')->nullable();
            $table->integer('estado')->nullable();
            $table->date('fecha_crea')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareadetalles');
    }
};
