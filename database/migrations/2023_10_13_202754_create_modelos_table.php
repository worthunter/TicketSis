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
        Schema::create('modelos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ticket_id'); 
            $table->foreign('ticket_id')->references('id')->on('tickets');
            $table->unsignedBigInteger('usuario_id'); 
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->string('modelo')->nullable();
            $table->string('categoria')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelos');
    }
};
