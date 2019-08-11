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

Route::group(['prefix' => 'books', 'middleware' => 'ololo'], function(){
    Route::get('/', 'BookController@index')->name('books');
    Route::get('create', 'BookController@create')->name('books.create');
    Route::get('edit/{book}', 'BookController@edit')->name('books.edit');
    Route::post('add', 'BookController@add')->name('books.add');
    Route::post('save/{id}', 'BookController@save')->name('books.save');
    Route::get('delete/{id}', 'BookController@delete')->name('books.delete');

});