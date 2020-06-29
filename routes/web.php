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

Route::get('/', function () {
    return view('welcome');

});

Route::get('/todolist', 'indexController@index');
Route::post('/todolist/add', 'indexController@add');
Route::get('/todolist/delete/{id}', 'indexController@delete');
Route::get('/todolist/complete/{id}', 'indexController@complete');
