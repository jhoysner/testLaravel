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

Auth::routes();

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
