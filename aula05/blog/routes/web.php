<?php

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
// segundo parâmetro foi enviado para a view
// Lemrbar que a ROTA NÃO DEVE ENVIAR NADA PARA A VIEW, mas sin para o Controller
Route::get('/', function () {
    return view('welcome', ['name' => 'Will']);
});

Route::get('/hello', function () {
    return view('hello', ['name' => 'Will']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/users', 'UsersController@index');

// Se eu disser que a rota é um resource do user, já são criadas todas as rotas dos métodos
// No plural, tem q ser um array
// Route::resources(['user' => 'UsersController']);
Route::resource('user', 'UsersController');
Route::get('/user/{user}/posts', 'UsersController@posts');

Route::resource('post', 'PostController');
