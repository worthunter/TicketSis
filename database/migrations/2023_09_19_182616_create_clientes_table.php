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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rol_id'); 
            $table->foreign('rol_id')->references('id')->on('roles');
            $table->string('empresa', 100)->nullable();
            $table->string('rfc',20)->nullable();
            $table->string('nombre', 50)->nullable();
            $table->string('apellido', 50)->nullable();
            $table->string('correo', 50)->nullable();
            $table->string('contra', 200)->nullable();
            $table->string('direccion', 100)->nullable();
            $table->string('telefono', 10)->nullable();
            $table->integer('extension')->nullable();
            $table->string('entidad', 80)->nullable();
            $table->string('municipio', 80)->nullable();
            $table->integer('estado')->nullable();
            $table->timestamp('fecha_crea')->nullable();
            $table->timestamp('fecha_mod')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
