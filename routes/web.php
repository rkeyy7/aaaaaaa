<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
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

Route::get('/', HomeController::class);


Route::get('jerseys', [CursoController::class, 'index'])->name('jerseys.index');
Route::get('jerseys/create', [CursoController::class, 'create'])->name('jerseys.create');

Route::post('jerseys', [CursoController::class, 'store'])->name('jerseys.store');;

Route::get('jerseys/{jersey}', [CursoController::class, 'show'])->name('jerseys.show');

Route::get('jerseys/{jersey}/edit',[CursoController::class, 'edit'])->name('jerseys.edit');

Route::put('jerseys/{jersey}',[CursoController::class, 'update'])->name('jerseys.update');
