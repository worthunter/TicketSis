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
            $table->unsignedBigInteger('usuario_id'); //Llave foranea
            $table->foreign('usuario_id')->references('id')->on('usuarios'); //Llave foranea
            $table->unsignedBigInteger('categoria_id'); 
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->string('titulo')->nullable();
            $table->string('garantia', 2)->nullable();
            $table->string('sub_estados')->nullable();
            $table->string('nom_usu', 40)->nullable();
            $table->string('ape_usu', 40)->nullable();
            $table->string('correo_usu', 90)->nullable();
            $table->string('direccion', 80)->nullable();
            $table->integer('telefono_usu')->nullable();
            $table->string('entidad', 50)->nullable();
            $table->string('municipio', 50)->nullable();
            $table->string('ticket_descrip')->nullable();
            $table->string('ticket_estado')->nullable();
            $table->string('usu_asig')->nullable();
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
