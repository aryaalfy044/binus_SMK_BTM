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
Route::post('/login', 'App\Http\Controllers\AuthController@login')->name('login');
Route::post('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('template');
    });
    // Rute yang memerlukan otentikasi di sini
    //home
    Route::get('home', 'App\Http\Controllers\HomeController@index')->name('home');

    //user
    Route::get('list-users', 'App\Http\Controllers\UsersController@listUser')->name('list-users');
    Route::get('add-user', 'App\Http\Controllers\UsersController@addUser')->name('add-user');
    Route::post('store-user', 'App\Http\Controllers\UsersController@storeUser')->name('store-user');
    Route::get('edit-user', 'App\Http\Controllers\UsersController@editUser')->name('edit-user');

    //role
    Route::get('list-roles', 'App\Http\Controllers\RolesController@listRole')->name('list-roles');
    Route::get('edit-role', 'App\Http\Controllers\RolesController@editRole')->name('edit-roles');
    Route::get('add-role', 'App\Http\Controllers\RolesController@addRole')->name('add-roles');

    //leave request
    Route::get('leave-request', 'App\Http\Controllers\LeaveRequestController@leaveRequest')->name('leave-request');
    Route::get('leave-report', 'App\Http\Controllers\LeaveRequestController@leaveReport')->name('leave-report');
    Route::get('leave-approval', 'App\Http\Controllers\LeaveRequestController@leaveApproval')->name('leave-approval');

    //attendace
    Route::get('attendance', 'App\Http\Controllers\AttendanceController@attendance')->name('attendance');
    Route::get('attendance-report', 'App\Http\Controllers\AttendanceController@attendanceReport')->name('attendance-report');

    //tasklist
    Route::get('task-list-report', 'App\Http\Controllers\TaskListController@getTaskListReport')->name('task-list-report');
    Route::get('manage-task-list', 'App\Http\Controllers\TaskListController@getManageTaskListAll')->name('manage-task-list');
    Route::get('add-task-list', 'App\Http\Controllers\TaskListController@addTaskList')->name('add-task-list');
    Route::get('edit-task-list/{id}', 'App\Http\Controllers\TaskListController@editTaskList')->name('edit-task-list');

});
