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
        Schema::create('users', function (Blueprint $table) {

            $table->id();

            //Id´s foraneas
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id')->references('id')->on('roles');
            $table->unsignedBigInteger('departamento_id'); //Puede ser null en el caso de registrar clientes
            $table->foreign('departamento_id')->nullable()->references('id')->on('departamentos');

            //Campos básicos
            $table->string('nombre', 100)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('rfc',13)->nullable();
            $table->string('direccion', 100)->nullable();
            $table->string('telefono', 10)->nullable();
            $table->string('extension', 4)->nullable();
            $table->string('entidad', 80)->nullable();
            $table->string('municipio', 80)->nullable();
            $table->string('estado', 15)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
