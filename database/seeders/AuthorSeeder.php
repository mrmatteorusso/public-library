<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Create 1 author with 3 books
         $author1 = Author::factory()->create();
         Book::factory()->count(3)->create(['author_id' => $author1->id]);

         // Create 1 author with 2 books
         $author2 = Author::factory()->create();
         Book::factory()->count(2)->create(['author_id' => $author2->id]);

         // Create 1 author with 2 books
         $author3 = Author::factory()->create();
         Book::factory()->count(2)->create(['author_id' => $author3->id]);

         // Create 3 different authors, each with 1 book
         for ($i = 0; $i < 3; $i++) {
             $author = Author::factory()->create();
             Book::factory()->count(1)->create(['author_id' => $author->id]);
         }
    }
}
