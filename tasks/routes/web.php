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
Route::post('/tasks','TasksController@store');
Route::get('/tasks','TasksController@index');
// Route::post('/tasks1','TasksController@update','$t->id');
// Route::get('/tasks1','TasksController@edit');
Route::get('/tasks/{id}','TasksController@edit');
Route::post('/updatetasks','TasksController@update');

Route::get('/finish/{id}','TasksController@finish');
Route::get('/delete/{id}','TasksController@destroy');
