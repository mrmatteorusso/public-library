<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {

//     $books = Book::all();

//     return view('books.index', ['books' => $books] );
// });

Route::get('/books', [BookController::class, 'index'] );
Route::get('/books/show/{id}', [BookController::class, 'show'] );


Route::get('/books/create', [BookController::class, 'create'] );
Route::post('/books', [BookController::class, 'store'] );

Route::delete('/books/{book}', [BookController::class, 'destroy'] );
// Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');


