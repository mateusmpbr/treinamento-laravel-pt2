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
    Route::get('departments/{id}/edit', 'DepartmentController@edit')->name('departments.edit');
    Route::post('departments', 'DepartmentController@store')->name('departments.store');
    Route::put('departments/{id}', 'DepartmentController@update')->name('departments.update');
    Route::delete('departments/{id}', 'DepartmentController@destroy')->name('departments.destroy');

    Route::get('members', 'MemberController@index')->name('members.index');
    Route::get('members/create', 'MemberController@create')->name('members.create');
    Route::get('members/{id}/edit', 'MemberController@edit')->name('members.edit');
    Route::post('members', 'MemberController@store')->name('members.store');
    Route::put('members/{id}', 'MemberController@update')->name('members.update');
    Route::delete('members/{id}', 'MemberController@destroy')->name('members.destroy');
    Route::post('members/filter', 'MemberController@filter')->name('members.filter');

    Route::get('tools', 'ToolController@index')->name('tools.index');
    Route::get('tools/create', 'ToolController@create')->name('tools.create');
    Route::get('tools/{id}/edit', 'ToolController@edit')->name('tools.edit');
    Route::post('tools', 'ToolController@store')->name('tools.store');
    Route::put('tools/{id}', 'ToolController@update')->name('tools.update');
    Route::delete('tools/{id}', 'ToolController@destroy')->name('tools.destroy');
});

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
