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
        Schema::create('ticketdetalles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ticket_id'); 
            $table->foreign('ticket_id')->references('id')->on('tickets');
            $table->unsignedBigInteger('cliente_id'); 
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->unsignedBigInteger('agentes_id'); 
            $table->foreign('agentes_id')->references('id')->on('agentes');
            $table->string('descripcion')->nullable();
            $table->integer('estado')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticketdetalles');
    }
};
