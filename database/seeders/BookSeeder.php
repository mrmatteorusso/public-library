<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 10 tags
        $tags = Tag::factory(10)->create();

        // Attach 1 to 3 random tags to each book
        Book::all()->each(function ($book) use ($tags) {
            $book->tags()->attach(
                $tags->random(rand(1, 3))->pluck('id')->toArray() // Random 1 to 3 tags for each book
            );
        });
    }
}
