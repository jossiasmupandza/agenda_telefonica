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

Route::group(['prefix' => 'teste'],function () {
    Route::get('/', function () {
        return view('teste');
    });

    Route::get('/teste2', function () {
        return view('teste2');
    });

    Route::get('/teste1', function () {
        return view('teste1');
    });

});

Route::group(['prefix' => 'pessoa'], function () {
    Route::get('/', 'PessoaController@index');
});

/*
Route::get('/teste', function () {
    return view('teste');
});*/