<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/todos', 'TodoController@index');
Route::get('/todos/create', 'TodoController@create');
Route::post('/todos', 'TodoController@store');
Route::get('/todos/{todo}', 'TodoController@show');
Route::get('/todos/{todo}/edit', 'TodoController@edit');
Route::put('/todos/{todo}', 'TodoController@update');
Route::delete('/todos/{todo}', 'TodoController@destroy');
