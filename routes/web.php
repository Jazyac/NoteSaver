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
Route::resource('/notes', 'NoteController');
Route::get('/admin', 'AdminController@index');
Route::post('/admin/switch', ['as' => 'admin.switch', 'uses' => 'AdminController@switch']);
Route::get('/notes/{note}/email', ['as' => 'notes.email', 'uses' => 'NoteController@email']);
Route::get('mail/send', 'MailController@send');