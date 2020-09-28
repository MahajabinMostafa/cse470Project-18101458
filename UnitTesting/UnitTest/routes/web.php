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

Route::get('http://localhost/MangaStore/MVC/Controller/', function () {
    return view('welcome');
});

Route::post('http://localhost/MangaStore/MVC/Controller/', function () {
    return view('welcome');
});

Route::post('/admin' , 'Admin@index');

Route::post('/books' , 'Books@bookName');

