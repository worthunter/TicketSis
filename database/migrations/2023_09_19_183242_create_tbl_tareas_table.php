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
        Schema::create('tbl_tareas', function (Blueprint $table) {
            $table->integer('tarea_id')->unsigned()->primary();   /** Llave primaria */
            $table->foreign('id_usuarios')->references('id_usuarios')->on('tbl_usuarios'); /** Llave foranea */
            $table->integer('tipo_c_id')->nullable();
            $table->string('tarea_titulo')->nullable();
            $table->string('nom_usu')->nullable();
            $table->string('usu_asignado')->nullable();
            $table->string('tarea_descripcion')->nullable();
            $table->integer('tarea_estado')->nullable();
            $table->date('fecha_crea')->nullable();
            $table->integer('estado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_tareas');
    }
};
