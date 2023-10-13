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
        Schema::create('tbl_ticketdetalles', function (Blueprint $table) {
            $table->increments('ticketdet_id')->unsigned()->primary(); //* Llave primaria */
            $table->foreign('ticket_id')->references('ticket_id')->on('tbl_tickets'); //* Llave foranea */
            $table->foreign('id_usuario')->references('id_usuario')->on('tbl_usuarios');  //* Lave foranea */
            $table->string('ticketdet_descrip')->nullable();
            $table->date('fecha_crea')->nullable();
            $table->integer('estado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_ticketdetalles');
    }
};
