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
            $table->string('nombre', 40)->nullable();
            $table->string('apellido', 40)->nullable();
            $table->string('correo', 90)->nullable();
            $table->string('contra')->nullable();
            $table->string('direccion', 80)->nullable();
            $table->integer('telefono')->nullable();
            $table->integer('extension')->nullable();
            $table->string('municipio', 50)->nullable();
            $table->boolean('estado')->nullable();
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
