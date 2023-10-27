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
            $table->string('descripcion', 400)->nullable();
            $table->timestamp('fecha_crea')->nullable();
            $table->timestamp('fecha_mod')->nullable();
            $table->integer('estado')->nullable();
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
