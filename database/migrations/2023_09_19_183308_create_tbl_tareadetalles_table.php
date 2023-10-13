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
        Schema::create('tbl_tareadetalles', function (Blueprint $table) {
            $table->increments('tareadet_id')->unsigned()->primary();   /** Llave primaria */
            $table->foreign('tarea_id')->references('tarea_id')->on('tbl_tareas'); /** Llave foranea */
            $table->foreign('id_usuario')->references('id_usuario')->on('tbl_usuarios'); /** Llave foranea */
            $table->string('tareadet_descrip')->nullable();
            $table->date('fecha_crea')->nullable();
            $table->integer('estado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_tareadetalles');
    }
};
