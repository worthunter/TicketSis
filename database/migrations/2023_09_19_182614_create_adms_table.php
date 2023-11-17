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
        Schema::create('adms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rol_id'); 
            $table->foreign('rol_id')->references('id')->on('roles');
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
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adms');
    }
};
