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

Route::get('showInsertForm',[
    'as' => 'insert', 'uses' => 'CarController@showInsertForm'
]);

Route::get('showUpdateForm/{id}',[
    'as' => 'udpate', 'uses' => 'CarController@showUpdateForm'
]);

Route::post('insert',[
    'as' => 'insert', 'uses' => 'CarController@insert'
]);

Route::post('update/{id}',[
    'as' => 'update', 'uses' => 'CarController@update'
]);

Route::get('delete/{id}',[
    'as' => 'delete', 'uses' => 'CarController@delete'
]);

Route::get('showAll',[
    'as' => 'showAll', 'uses' => 'CarController@showAll'
]);