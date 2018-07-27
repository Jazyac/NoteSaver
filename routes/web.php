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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'NoteController@index');
Route::get('/notes/openStrip', ['as' => 'notes.openStrip', 'uses' => 'NoteController@openStrip']);
Route::post('/notes/stripURL', ['as' => 'notes.stripURL', 'uses' => 'NoteController@stripURL']);


Route::resource('/notes', 'NoteController');
Route::get('/admin', 'AdminController@index');
Route::post('/admin/switch', ['as' => 'admin.switch', 'uses' => 'AdminController@switch']);
Route::get('/notes/{note}/email', ['as' => 'notes.email', 'uses' => 'NoteController@email']);
Route::get('/notes/{note}/download', ['as' => 'notes.download', 'uses' => 'NoteController@download']);

