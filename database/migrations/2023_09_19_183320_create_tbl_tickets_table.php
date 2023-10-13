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
        Schema::create('tbl_tickets', function (Blueprint $table) {
            $table->increments('ticket_id')->unsigned()->primary();   /** Llave primaria */
            $table->foreign('id_usuario')->references('id_usuario')->on('tbl_usuarios'); /** Llave foranea */
            $table->foreign('cat_id')->references('cat_id')->on('tbl_categorias');
            $table->string('ticket_titulo')->nullable();
            $table->boolean('garantia')->nullable();
            $table->string('sub_estados')->nullable();
            $table->string('nom_usu')->nullable();
            $table->string('ape_usu')->nullable();
            $table->string('correo_usu')->nullable();
            $table->string('direccion')->nullable();
            $table->integer('telefono_usu')->nullable();
            $table->string('entidad')->nullable();
            $table->string('localidad')->nullable();
            $table->string('municipio')->nullable();
            $table->string('ticket_descrip')->nullable();
            $table->string('ticket_estado')->nullable();
            $table->date('fecha_crea')->nullable();
            $table->string('usu_asig')->nullable();
            $table->date('fecha_asig')->nullable();
            $table->date('fecha_cierre')->nullable();
            $table->integer('estado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_tickets');
    }
};
