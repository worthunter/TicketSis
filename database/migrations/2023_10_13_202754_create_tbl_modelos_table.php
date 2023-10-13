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
        Schema::create('tbl_modelos', function (Blueprint $table) {
            $table->increments('id_modelo')->unsigned()->primary();   /** Llave primaria */
            $table->foreign('id_usuario')->references('id_usuario')->on('tbl_usuarios'); /** Llave foranea */
            $table->foreign('ticket_id')->references('ticket_id')->on('tbl_tickets'); /** Llave foranea */
            $table->string('modelo')->nullable();
            $table->string('categoria')->nullable();
            $table->date('fecha_crea')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_modelos');
    }
};
