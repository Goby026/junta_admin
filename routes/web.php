<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ZonaController;
use App\Http\Controllers\DeudaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::resource('zonas', ZonaController::class);
Route::resource('deudas', DeudaController::class);
Route::resource('clientes', ClienteController::class);


// ruta para generar pdf de deudas
Route::get('deudapdf/{cliente}', [ClienteController::class, 'deudapdf'])->name('cliente.pdf');

require __DIR__.'/auth.php';
