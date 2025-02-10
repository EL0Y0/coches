<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CochesController;

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
    return view('welcome');
});

Route::get('/coches', [CochesController::class, 'index'])->name('listacoches');
Route::get('/coches/{id}', [CochesController::class, 'show'])->name('mostrarcoche');
Route::get('/crearcoche', [CochesController::class, 'create'])->name('crearcoche');
Route::post('/coches', [CochesController::class, 'store'])->name('guardarcoche');
Route::get('/editarcoche/{id}', [CochesController::class, 'edit'])->name('editarcoche');
Route::put('/editarcoche/{id}', [CochesController::class, 'update'])->name('actualizarcoche');
Route::delete('/eliminarcoche/{id}', [CochesController::class, 'destroy'])->name('eliminarcoche');
