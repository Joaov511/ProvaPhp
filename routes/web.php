<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\versiculoController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
});

Route::get('/versiculos', [versiculoController::class, 'index'])->name('versiculos.index');
Route::get('/versiculo/criar', [versiculoController::class, 'create'])->name('versiculos.create')->middleware('auth');
Route::post('/versiculos', [versiculoController::class, 'store'])->name('versiculos.store');
Route::delete('/versiculos/{id}', [versiculoController::class, 'destroy'])->name('versiculos.destroy')->middleware('auth');
Route::get('/versiculos/{id}/edit', [versiculoController::class, 'edit'])->name('versiculos.edit')->middleware('auth');
Route::put('/versiculos/{id}', [versiculoController::class, 'update'])->name('versiculos.update');



Auth::routes();