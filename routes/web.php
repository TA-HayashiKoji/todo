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

Route::GET('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');
Route::GET('/folders/create', 'FolderController@showCreateForm')->name('folders.create');
Route::POST('/folders/create', 'FolderController@create');
Route::GET('/folders/{id}/tasks/create', 'TaskController@showCreateForm')->name('tasks.create');
Route::POST('/folders/{id}/tasks/create', 'TaskController@create');
Route::GET('/folders/{id}/tasks/{task_id}/edit', 'TaskController@showEditForm')->name('tasks.edit');
Route::POST('/folders/{id}/tasks/{task_id}/edit', 'TaskController@edit');

?>