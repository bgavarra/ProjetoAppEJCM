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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/welcome','UsuarioController@goHome')->name('rotaHome');

Route::get('/login','UsuarioController@goLogin')->name('rotaLogin');

Route::get('/cadastro','UsuarioController@goCadastro')->name('rotaCadastro');

Route::get('/teste','UsuarioController@goTest')->name('rotaTest');

Route::get('/home', 'HomeController@index')->name('home');
