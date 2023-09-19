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
        Schema::create('tbl_subestados', function (Blueprint $table) {
            $table->integer('id_subestados')->unsigned()->primary(); /** Llave primaria */
            $table->string('nom_subestados')->nullable();
            $table->integer('estado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_subestados');
    }
};
