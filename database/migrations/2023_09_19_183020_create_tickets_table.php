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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->unsignedBigInteger('age_id'); 
            $table->foreign('age_id')->references('id')->on('agentes'); 
            $table->unsignedBigInteger('categoria_id'); 
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->string('titulo')->nullable();
            $table->string('garantia', 2)->nullable();
            $table->string('sub_estados')->nullable();
            $table->string('ticket_descrip')->nullable();
            $table->string('ticket_estado')->nullable();
            $table->string('age_asig')->nullable();
            $table->integer('estado')->nullable();
            $table->date('fecha_asig')->nullable();
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
