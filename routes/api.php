<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// route books
Route::get('books', 'BooksController@index');
Route::post('books', 'BooksController@create');
Route::put('/books/{id}', 'BooksController@update');
Route::delete('/books/{id}', 'BooksController@delete');

// route author
Route::get('authors', 'AuthorController@index');
Route::post('authors', 'AuthorController@create');
Route::put('/authors/{id}', 'AuthorController@update');
Route::delete('/authors/{id}', 'AuthorController@delete');