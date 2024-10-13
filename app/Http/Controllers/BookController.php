<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Tag;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {

        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    public function create()
    {
        return view('books.create');
    }
    public function show($id)
    {
        $book = Book::find($id); // Fetch the book instance by ID

        if (!$book) {
            abort(404); // Handle the case where the book is not found
        }

        return view('books.show', ['book' => $book]); // Pass the book instance to the view
    }

    public function store(Request $request)
    {
        $is_available = $request->has('is_available') ? 1 : 0;

        $author = Author::firstOrCreate(['name' => $request->author]);
        $book = Book::create([
            'title' => $request->title,
            'cover' => $request->cover,
            'author_id' => $author->id,
            'pages' => $request->pages,
            'is_available' => $is_available,
            'location' => $request->location,
            'blurb' => $request->blurb,
        ]);

        // Process the tags (assuming $request->tags is a comma-separated string)
        $tags = explode(',', $request->tags);  // Adjust depending on your input format
        $tagIds = [];

        foreach ($tags as $tagName) {
            // Create or find each tag and collect its ID
            $tag = Tag::firstOrCreate(['tag' => trim($tagName)]);
            $tagIds[] = $tag->id;
        }

        // Attach the tags to the book
        $book->tags()->attach($tagIds);

        return redirect('/books');
    }

    public function edit(Book $book)
    {
        return view('books.edit', ['book' => $book]);
    }

    public function update(Book $book, Request $request, Author $author)
    {
        // $author = Author::firstOrCreate(['name' => $request->author]);


        $author->update([
            'name' => $request->author,
        ]);


        $is_available = $request->has('is_available') ? 1 : 0;


        $book->update(
            [
                'title' => request('title'),
                'cover' => request('cover'),
                'pages' => request('pages'),
                'is_available' => $is_available,
                'location' => request('location'),
                'blurb' => request('blurb'),
                'author_id' => $author->id,
            ]
        );

        // Process the tags (assuming $request->tags is a comma-separated string)
        $tags = explode(',', $request->tags); //array of strings
        $tagIds = [];

        foreach ($tags as $tagName) {
            // Create or find each tag and collect its ID
            $tag = Tag::firstOrCreate(['tag' => trim($tagName)]);
            $tagIds[] = $tag->id;  // Store the tag ID
        }

        // Attach the tags to the book (sync replaces existing tags)
        $book->tags()->sync($tagIds);




        return redirect("/books/show/{$book->id}");
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/books');
    }
}
