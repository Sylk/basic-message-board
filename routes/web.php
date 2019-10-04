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

Route::get('message-board', 'MessageBoardController@index')->name('message-board');
//Route::get('lock-picking', 'MessageBoardController@index')->name('lock-picking');
//Route::get('dev-blog', 'MessageBoardController@index');
