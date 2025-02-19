<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ContactanosController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

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

// Route::get('contactanos', function () {
//     Mail::to('rubencg3005@gmail.com')->send(new ContactanosMailable());
//     return 'El mensaje se ha enviado correctamente.';
//     })->name('contactanos');


Route::get('contactanos', [ContactanosController::class, 'index'])
->name('contactanos.index');


Route::post('contactanos', [ContactanosController::class,'store'])
->name('contactanos.store');
