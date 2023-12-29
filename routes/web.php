<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AgenteController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\TareaController;

// Route::resource('/', LoginController::class);

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Login.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::view("/perfil", "Usuarios.Perfil.index");
    Route::view("/ayuda", "Componentes.Manual.index");

    Route::resource('/tickets', TicketController::class);
    Route::resource('/tareas', TareaController::class);
    Route::resource('/reportes', ReporteController::class);
    Route::resource('/agentes', AgenteController::class);
    Route::resource('/clientes', ClienteController::class);

    return view('Login.index');
});

require __DIR__.'/auth.php';
