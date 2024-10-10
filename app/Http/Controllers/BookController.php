<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

    class BookController extends Controller
    {
        public function index() {

            $books = Book::all();
            return view('books.index', ['books' => $books]);
        }

        public function create() {
return view('books.create');
        }
        public function show($id) {
            $book = Book::find($id); // Fetch the book instance by ID

            if (!$book) {
                abort(404); // Handle the case where the book is not found
            }

            return view('books.show', ['book' => $book]); // Pass the book instance to the view
        }


        // public function show($id) {
        //     $book = Book::find($id); // Retrieve the book instance
        //     if (!$book) {
        //         abort(404); // Handle the case where the book is not found
        //     }
        //     return view('books.show', ['book' => $book]); // Pass the book to the view
        // }
    }
