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

Route::get('/', [App\Http\Controllers\ReproductoresController::class, 'index'])->name('home');
Route::post('reproductores-store', [App\Http\Controllers\ReproductoresController::class, 'store'])->name('reproductores.store');
Route::get('reproductores-create', [App\Http\Controllers\ReproductoresController::class, 'create'])->name('reproductores.create');
Route::get('reproductores-edit/{id}', [App\Http\Controllers\ReproductoresController::class, 'edit'])->name('reproductores.edit');
Route::get('reproductores-show/{id}', [App\Http\Controllers\ReproductoresController::class, 'show'])->name('reproductores.show');
Route::put('reproductores-update/{id}', [App\Http\Controllers\ReproductoresController::class, 'update'])->name('reproductores.update');
Route::post('reproductores-delete', [App\Http\Controllers\ReproductoresController::class, 'delete'])->name('reproductores.delete');
