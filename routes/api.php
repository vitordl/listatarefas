<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('movies', 'MoviesController@index');
Route::get('movies/{id}', 'MoviesController@getMovie');
Route::get('movies_genero/{genre}', 'MoviesController@getMovieByGenre');
Route::post('movies/store', 'MoviesController@store');
Route::put('movies/update', 'MoviesController@update');
Route::delete('movies/delete', 'MoviesController@delete');



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
