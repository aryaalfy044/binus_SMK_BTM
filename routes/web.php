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



//auth
Route::get('/login', 'App\Http\Controllers\AuthController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::post('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => 'web'], function () {

    Route::get('/', function () {
        return view('template');
    });
    // Rute yang memerlukan otentikasi di sini
    //home
    Route::get('home', 'App\Http\Controllers\HomeController@index');

    //user
    Route::get('list-users', 'App\Http\Controllers\UsersController@listUser')->name('list-users');
    Route::get('add-user', 'App\Http\Controllers\UsersController@addUser')->name('add-user');
    Route::post('store-user', 'App\Http\Controllers\UsersController@storeUser')->name('store-user');

    //role
    Route::get('list-roles', 'App\Http\Controllers\RolesController@listRole')->name('list-roles');

    //tasklist
    Route::get('manage-task-list', 'App\Http\Controllers\TaskListController@getManageTaskListAll')->name('manage-task-list');
    Route::get('add-task-list', 'App\Http\Controllers\TaskListController@addTaskList')->name('add-task-list');
    Route::get('edit-task-list', 'App\Http\Controllers\TaskListController@editTaskList')->name('edit-task-list');

});
