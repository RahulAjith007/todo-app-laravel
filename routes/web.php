<?php

use Illuminate\Http\Request;
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

Route::get('/todos', 'TodoController@index')->name('todo_all');
Route::get('/todos/create', 'TodoController@create');
Route::post('/todos/create', 'TodoController@store')->name('todo_create');
Route::patch('/todos/{todo}/update', 'TodoController@update')->name('todo_update');
Route::get('/todos/{todo}/edit', 'TodoController@edit')->name('todo_edit');;
Route::put('/todos/{todo}/complete', 'TodoController@complete')->name('todo_completed');
Route::delete('/todos/{todo}/incomplete', 'TodoController@incomplete')->name('todo_incompleted');




Route::get('/test', 'UserController@index');

Route::post('/upload', 'UserController@uploadAvatar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
