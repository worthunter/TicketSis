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
        Schema::create('tbl_d_documentos', function (Blueprint $table) {
            $table->increments('doc_id')->unsigned()->primary();   /** Llave primaria */
            $table->foreign('ticket_id')->references('ticket_id')->on('tbl_tickets'); /** Llave foranea */
            $table->string('doc_nom')->nullable();
            $table->date('fecha_crea')->nullable();
            $table->integer('estado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_d_documentos');
    }
};
