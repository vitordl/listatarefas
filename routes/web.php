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

Route::get('/', 'Controlador@home')->name('home');

Route::get('newtask', 'Controlador@newtask')->name('newtask');

Route::post('salvar', 'Controlador@salvar')->name('salvar');

Route::get('edit/{id}', 'Controlador@edit')->name('edit');

Route::post('update/{id}', 'Controlador@update')->name('update');


Route::get('deletar/{id}', 'Controlador@deletar')->name('deletar');
Route::get('deletarInvisivel/{id}', 'Controlador@deletarInvisivel')->name('deletarInvisivel');

//botoes done, undone
Route::get('done/{id}', 'Controlador@done')->name('done');

Route::get('undone/{id}', 'Controlador@undone')->name('undone');

Route::get('hide/{id}', 'Controlador@hide')->name('hide');

Route::get('view_hide/{id}', 'Controlador@view_hide')->name('view_hide');

//listas somente os invisiveis
Route::get('invisible', 'Controlador@invisible')->name('invisible');

//about
Route::get('about', 'Controlador@about')->name('about');



//pagina de teste pra tentar 'replicar' um layout
Route::get('/pagina', function(){
    return view('pagina');
});

Route::get('/teste_login', function(){
    return view('teste_login');
});

Route::post('teste_validacao_login', 'Controlador@teste_validacao_login')->name('teste_validacao_login');


// eu nao tava nem usando isso 
// Route::get('logadoteste', function(){
//     return view('logadoteste');
// });


//uma route para praticar um pouco as session
Route::get('teste_session', 'Controlador@teste_session');


