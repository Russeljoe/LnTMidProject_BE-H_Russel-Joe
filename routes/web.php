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

Route::get('/', 'App\Http\Controllers\AppController@index');

Route::get('/library', 'App\Http\Controllers\BooksController@index');
Route::get('/library/manage', 'App\Http\Controllers\BooksController@manage');
Route::get('/library/add', 'App\Http\Controllers\BooksController@add');
Route::post('/library/add', 'App\Http\Controllers\BooksController@submit');
Route::get('/library/{id}', 'App\Http\Controllers\BooksController@edit');
Route::put('/library/{id}', 'App\Http\Controllers\BooksController@update');
Route::delete('/library/{id}', 'App\Http\Controllers\BooksController@delete');