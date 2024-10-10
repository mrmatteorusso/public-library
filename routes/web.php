<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {

//     $books = Book::all();

//     return view('books.index', ['books' => $books] );
// });

Route::get('/', [BookController::class, 'index'] );
Route::get('/books/create', [BookController::class, 'create'] );
Route::get('/books/show/{id}', [BookController::class, 'show'] );

