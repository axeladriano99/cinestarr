<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListarUsuariis;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Peliculas;
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
    return view('index');
});




Route::get('/datos-cine', [App\Http\Controllers\ListarUsuariis::class, 'index']);



Route::get('/proximo', [App\Http\Controllers\ListarUsuariis::class, 'Estrenos']);

Route::resource('cine',App\Http\Controllers\ListarUsuariis::class);

Route::resource('pelicula',App\Http\Controllers\Peliculas::class);