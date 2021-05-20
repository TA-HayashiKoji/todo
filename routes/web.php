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

Route::GROUP(['middleware' => 'auth'], function () {
    Route::GET('/', 'HomeController@index')->name('home');

    Route::GET('/folders/create', 'FolderController@showCreateForm')->name('folders.create');
    Route::POST('/folders/create', 'FolderController@create');

    Route::GROUP(['middleware' => 'can:view,folder'], function () {
        Route::GET('/folders/{folder}/tasks', 'TaskController@index')->name('tasks.index');

        Route::GET('/folders/{folder}/tasks/create', 'TaskController@showCreateForm')->name('tasks.create');
        Route::POST('/folders/{folder}/tasks/create', 'TaskController@create');

        Route::GET('/folders/{folder}/tasks/{task}/edit', 'TaskController@showEditForm')->name('tasks.edit');
        Route::POST('/folders/{folder}/tasks/{task}/edit', 'TaskController@edit');
    });
});

Auth::routes();
