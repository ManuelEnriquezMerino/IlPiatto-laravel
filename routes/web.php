<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\RestriccionController;
use App\Http\Controllers\OpcionalController;

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

Route::resource('platos', PlatoController::class);

Route::resource('categorias', CategoriaController::class);

Route::resource('restricciones', RestriccionController::class);

Route::resource('opcionales', OpcionalController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
