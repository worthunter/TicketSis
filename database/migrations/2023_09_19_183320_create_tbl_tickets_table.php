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
            $table->integer('ticket_id')->unsigned()->primary();   /** Llave primaria */
            $table->foreign('id_usuarios')->references('id_usuarios')->on('tbl_usuarios'); /** Llave foranea */
            $table->foreign('cat_id')->references('cat_id')->on('tbl_categorias');
            $table->string('ticket_titulo')->nullable();
            $table->boolean('garantia')->nullable();
            $table->string('sub_estados')->nullable();
            $table->string('sub_estados')->nullable();
            $table->string('sub_estados')->nullable();
            $table->string('sub_estados')->nullable(); /** Pendiente de terminar */
            $table->string('sub_estados')->nullable();
            $table->string('sub_estados')->nullable();
            $table->string('sub_estados')->nullable();
            $table->string('sub_estados')->nullable();
            $table->string('sub_estados')->nullable();
            $table->string('sub_estados')->nullable();
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
