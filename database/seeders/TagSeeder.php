<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a fixed set of tags (10 unique tags)
        $tags = Tag::factory()->count(10)->create();

        // Assign tags to each book
        $books = Book::all();

        foreach ($books as $book) {
            // Get random tags for the book (between 1 and 3 tags)
            $randomTags = $tags->random(rand(1, 3));

            // Attach tags to the book
            $book->tags()->attach($randomTags->pluck('id')->toArray());
        }
    }
}
