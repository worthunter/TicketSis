<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UsuarioController;

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

Route::resource('tickets', TicketController::class);

Route::resource('tareas', TareaController::class);

Route::resource('reportes', ReporteController::class);

Route::resource('usuarios', UsuarioController::class);

Route::resource('login', LoginController::class);