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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50)->nullable();
            $table->string('apellido', 50)->nullable();
            $table->string('correo', 50)->nullable();
            $table->string('contra', 30)->nullable();
            $table->string('direccion', 80)->nullable();
            $table->string('telefono', 10)->nullable();
            $table->integer('extension')->nullable();
            $table->string('entidad', 80)->nullable();
            $table->string('municipio', 80)->nullable();
            $table->string('estado', 40)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
