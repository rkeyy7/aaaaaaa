<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Mail\contactanosMailable;
use Illuminate\Pagination\Cursor;

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

Route::get('/', HomeController::class)->name('home');

Route::resource('jerseys', CursoController::class);

Route::view('nosotros', 'nosotros')->name('nosotros');
Route::get('contactanos',function(){

    Mail::to('rubencg3005@gmail.com')
        ->send(new contactanosMailable);;
return "mensaje enviado con éxito";
})->name('contactanos');
