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

Route::get('show/{id}',[
    'as' => 'show', 'uses' => 'CarController@show'
]);

Route::get('insert',[
    'as' => 'insert', 'uses' => 'CarController@insert'
]);

Route::get('update',[
    'as' => 'update', 'uses' => 'CarController@update'
]);

Route::get('delete/{id}',[
    'as' => 'delete', 'uses' => 'CarController@delete'
]);

Route::get('showAll',[
    'as' => 'showAll', 'uses' => 'CarController@showAll'
]);