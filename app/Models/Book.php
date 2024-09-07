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
        'author',
        'description',
        'cover_image',
        'user_id',
        'is_available',
        'genre_id',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('status')->withTimestamps();
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
