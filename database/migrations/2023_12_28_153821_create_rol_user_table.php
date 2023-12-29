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
        Schema::create('rol_user', function (Blueprint $table) {

            $table->id();

             //Id´s foraneas
             $table->unsignedBigInteger('rol_id');
             $table->foreign('rol_id')->references('id')->on('roles');
             $table->unsignedBigInteger('user_id'); //Puede ser null en el caso de registrar clientes
             $table->foreign('user_id')->nullable()->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rol_user');
    }
};
