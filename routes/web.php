<?php

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

Route::get('/', function () 
{
    return view('welcome');
});

Route::group(['prefix' => '/tasks', 'as' => 'tasks.'], function()
{
    Route::get('/', 'TaskController@index')->name('index');
    Route::get('/create', 'TaskController@create')->name('create');
    Route::post('/store', 'TaskController@store')->name('store');
    Route::get('/locale', 'TaskController@locale')->name('locale');
    Route::delete('/destroy/{id}', 'TaskController@destroy')->name('destroy');
}
);
