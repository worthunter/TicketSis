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
        Schema::create('tbl_usuarios', function (Blueprint $table) {
            $table->increments('id_usuario')->unsigned()->primary();   /** Llave primaria */
            $table->string('nom_usu')->nullable();
            $table->string('ape_usu')->nullable();
            $table->string('correo_usu')->nullable();
            $table->string('contra_usu')->nullable();
            $table->integer('rol_id')->nullable();
            $table->string('direc')->nullable();
            $table->integer('telefono_usu')->nullable();
            $table->integer('extension')->nullable();
            $table->string('entidad')->nullable();
            $table->string('municipio')->nullable();
            $table->date('fecha_crea')->nullable();
            $table->date('fecha_mod')->nullable();
            $table->date('fecha_elim')->nullable();
            $table->boolean('estado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_usuarios');
    }
};
