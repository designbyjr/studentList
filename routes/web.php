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
//"A618803651"
Route::get('/{id}/{name?}', "ClassesController@read")->name("classes");
Route::get('/', "HomeController@index")->name("home");

