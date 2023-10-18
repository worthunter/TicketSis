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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nom_usu', 40)->nullable();
            $table->string('ape_usu', 40)->nullable();
            $table->string('correo_usu', 90)->nullable();
            $table->string('contra_usu')->nullable();
            $table->integer('rol')->nullable();
            $table->string('direccion', 80)->nullable();
            $table->integer('telefono_usu')->nullable();
            $table->integer('extension')->nullable();
            $table->string('entidad', 50)->nullable();
            $table->string('municipio', 50)->nullable();
            $table->boolean('estado')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
