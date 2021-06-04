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

Route::get('/', function () {
    return view('welcome');
});

// route untuk Admin page
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('book_list', 'BookController@index')->name('main');
Route::get('book_list/create', 'BookController@create')->name('create');
Route::post('book_list', 'BookController@store')->name('store');
Route::get('book_list/{book_id}/edit', 'BookController@edit')->name('edit');
Route::put('book_list/{book_id}', 'BookController@update')->name('update');
Route::get('book_list/{book_id}', 'BookController@show')->name('show');
Route::delete('book_list/{book_id}','BookController@destroy')->name('destroy');
Route::get('search_book_list', 'BookController@search')->name('search');
Route::get('filter_book_list', 'BookController@filter')->name('filter');

// Route untuk API
Route::get('bookshelf', 'BooksApiController@index');
Route::get('bookshelf/{book_id}', 'BooksApiController@show');
Route::get('bookshelf_search','BooksApiController@search');
Route::get('bookshelf_filter', 'BooksApiController@filter');