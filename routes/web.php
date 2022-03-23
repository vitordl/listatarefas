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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('home', 'Controlador@home')->name('home');

Route::get('newtask', 'Controlador@newtask')->name('newtask');

Route::post('salvar', 'Controlador@salvar')->name('salvar');

Route::get('edit/{id}', 'Controlador@edit')->name('edit');

Route::post('update/{id}', 'Controlador@update')->name('update');