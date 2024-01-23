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
    return view('template');
});

//home
Route::get('home', 'App\Http\Controllers\HomeController@index');

//user
Route::get('list-users', 'App\Http\Controllers\UsersController@listUser')->name('list-users');
Route::get('add-user', 'App\Http\Controllers\UsersController@addUser')->name('add-user');
Route::post('store-user', 'App\Http\Controllers\UsersController@storeUser')->name('store-user');

//role
Route::get('list-roles', 'App\Http\Controllers\RolesController@listRole')->name('list-roles');

//login
Route::get('login', 'App\Http\Controllers\LoginController@displayLogin')->name('login');