<?php

use App\Http\Controllers\UserController;    
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AgenteController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Login.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::view("/perfil", "Usuarios.Perfil.index");
    Route::view("/ayuda", "Componentes.Manual.index");

    Route::resource('/tickets', TicketController::class);
    Route::resource('/tareas', TareaController::class);
    Route::resource('/reportes', ReporteController::class);
    Route::resource('/agentes', AgenteController::class);
    Route::resource('/clientes', ClienteController::class);
    Route::resource('/users', UserController::class);

    return view('Login.index');
});

require __DIR__.'/auth.php';
