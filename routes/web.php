<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

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
    return view('login.index');
});

#Route::get('/tickets', function () {
#    return view('Tickets.index');
#});

#Route::get('/Componentes/Meta/metalinks', function () {
    # Ruta por nombre para los metadatos y links de estilos 
#})->name('metalinks');
