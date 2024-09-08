<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'authors',
        // 'description',
        // 'cover_image',
        // 'user_id',
        // 'is_available',
        // 'genre_id',
        'isbn13',
        'isbn10',
        'subtitle',
        'categories',
        'thumbnail',
        'published_year',
        'average_rating',
        'num_pages',
        'ratings_count',
        'age_limit'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('status')->withTimestamps();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function discussions()
    {
        return $this->hasMany(Discussion::class);
    }
}
