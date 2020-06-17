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

Route::group(['middleware' => ['auth']], function(){
    Route::get('departments', 'DepartmentController@index')->name('departments.index');
    Route::get('departments/create', 'DepartmentController@create')->name('departments.create');
    // Route::get('departments/{department}/edit', 'DepartmentController@edit')->name('departments.edit');
    Route::get('departments/edit', 'DepartmentController@edit')->name('departments.edit');
    
    Route::get('members', 'MemberController@index')->name('members.index');
    Route::get('members/create', 'MemberController@create')->name('members.create');
    // Route::get('members/{department}/edit', 'MemberController@edit')->name('members.edit');
    Route::get('members/edit', 'MemberController@edit')->name('members.edit');
    
    Route::get('tools', 'ToolController@index')->name('tools.index');
    Route::get('tools/create', 'ToolController@create')->name('tools.create');
    // Route::get('tools/{department}/edit', 'ToolController@edit')->name('tools.edit');
    Route::get('tools/edit', 'ToolController@edit')->name('tools.edit');
});

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
