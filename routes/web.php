<?php
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AgenteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

// Route::resource('/', LoginController::class);
Route::get('/', function () {
    return view('Login.index');
});
Route::view("/perfil", "Usuarios.Perfil.index");
Route::view("/ayuda", "Componentes.Manual.index");

Route::resource('/tickets', TicketController::class);
    //->middleware(['auth', 'verified']);   -------Línea de código para ingresar solo si están loggeados-----
Route::resource('/tareas', TareaController::class);
Route::resource('/reportes', ReporteController::class);
Route::resource('/agentes', AgenteController::class);
Route::resource('/clientes', ClienteController::class);

    // require __DIR__.'/auth.php';     -----------En conjunto con la línea comentada de arriba-------