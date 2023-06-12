<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Mostra o controller e o Metodo que vem depois do @
// Metodo do Video
// Route::get('/', 'BookController@index');

// Esse Metodo Alternativo Funciona Perfeitamente Usando o 'use'
Route::get('/', [BookController::class, 'index']);