<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;
    // protected $fillable = ['title', 'author', 'pages', 'blurb', 'tags', 'status', 'location', 'logo'];
    protected $guarded = [];
    public function author () {
        return $this->belongsTo(Author::class, 'author_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
