<?php

use Illuminate\Support\Facades\Route;

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
    return view('1home');
})->name('home'); // Definimos el nombre de la ruta como 'home'

Route::get('/reglamentos', function () {
    return view('2reglamentos');
})->name('reglamentos');

Route::get('/redes', function () {
    return view('3redes');
})->name('redes');

Route::get('/tutoriales', function () {
    return view('4tutoriales');
})->name('tutoriales');
