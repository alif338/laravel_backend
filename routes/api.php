<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Model\Book;

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

Route::get('books', function () {
    return Book::all();
});

Route::get('books/{id}', function($id) {
    return Book::find($id);
});

Route::post('books', function (Request $request) {
    $book = Book::create($request->all());
    return response()->json($book, 201);
});

Route::put('books/{id}', function(Request $request, Book $book) {
    $book->update($request->all());

    return response()->json($book, 200);
});

Route::delete('books/{id}', function ($id) {
    Book::find($id)->delete();

    return response()->json(null, 204);
});
