<?php

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
Route::middleware(['auth'])->group(function () {

    Route::get('/reproductores', [App\Http\Controllers\ReproductoresController::class, 'index'])->name('reproductores');
    Route::post('reproductores-store', [App\Http\Controllers\ReproductoresController::class, 'store'])->name('reproductores.store');
    Route::get('reproductores-create', [App\Http\Controllers\ReproductoresController::class, 'create'])->name('reproductores.create');
    Route::get('reproductores-edit/{id}', [App\Http\Controllers\ReproductoresController::class, 'edit'])->name('reproductores.edit');
    Route::get('reproductores-show/{id}', [App\Http\Controllers\ReproductoresController::class, 'show'])->name('reproductores.show');
    Route::put('reproductores-update/{id}', [App\Http\Controllers\ReproductoresController::class, 'update'])->name('reproductores.update');
    Route::post('reproductores-delete', [App\Http\Controllers\ReproductoresController::class, 'delete'])->name('reproductores.delete');

    Route::get('/animales', [App\Http\Controllers\AnimalesController::class, 'index'])->name('animales');
    Route::post('animales-store', [App\Http\Controllers\AnimalesController::class, 'store'])->name('animales.store');
    Route::get('animales-create', [App\Http\Controllers\AnimalesController::class, 'create'])->name('animales.create');
    Route::get('animales-edit/{id}', [App\Http\Controllers\AnimalesController::class, 'edit'])->name('animales.edit');
    Route::get('animales-show/{id}', [App\Http\Controllers\AnimalesController::class, 'show'])->name('animales.show');
    Route::put('animales-update/{id}', [App\Http\Controllers\AnimalesController::class, 'update'])->name('animales.update');
    Route::post('animales-delete', [App\Http\Controllers\AnimalesController::class, 'delete'])->name('animales.delete');

    Route::get('/servicios', [App\Http\Controllers\ServiciosController::class, 'index'])->name('servicios');
    Route::post('servicios-store', [App\Http\Controllers\ServiciosController::class, 'store'])->name('servicios.store');
    Route::get('servicios-create', [App\Http\Controllers\ServiciosController::class, 'create'])->name('servicios.create');
    Route::get('servicios-edit/{id}', [App\Http\Controllers\ServiciosController::class, 'edit'])->name('servicios.edit');
    Route::get('servicios-show/{id}', [App\Http\Controllers\ServiciosController::class, 'show'])->name('servicios.show');
    Route::put('servicios-update/{id}', [App\Http\Controllers\ServiciosController::class, 'update'])->name('servicios.update');
    Route::post('servicios-delete', [App\Http\Controllers\ServiciosController::class, 'delete'])->name('servicios.delete');

    Route::get('/celos', [App\Http\Controllers\CelosController::class, 'index'])->name('celos');
    Route::post('celos-store', [App\Http\Controllers\CelosController::class, 'store'])->name('celos.store');
    Route::get('celos-create', [App\Http\Controllers\CelosController::class, 'create'])->name('celos.create');
    Route::get('celos-edit/{id}', [App\Http\Controllers\CelosController::class, 'edit'])->name('celos.edit');
    Route::get('celos-show/{id}', [App\Http\Controllers\CelosController::class, 'show'])->name('celos.show');
    Route::put('celos-update/{id}', [App\Http\Controllers\CelosController::class, 'update'])->name('celos.update');
    Route::post('celos-delete', [App\Http\Controllers\CelosController::class, 'delete'])->name('celos.delete');
});

Auth::routes();

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
