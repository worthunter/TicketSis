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
            $table->integer('taread_id')->unsigned()->primary();   /** Llave primaria */
            $table->foreign('tarea_id')->references('id_usuarios')->on('tbl_usuarios'); /** Llave foranea */
            $table->integer('id_usuario')->nullable();
            $table->string('tarea_descrip')->nullable();
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
