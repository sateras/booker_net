<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookStatusController extends Controller
{
    public function addToFavorite(Book $book)
    {
        Auth::user()->books()->syncWithoutDetaching([$book->id => ['status' => 'favorite']]);

        return redirect()->back()->with('success', 'Book added to Favorites!');
    }

    public function addToRead(Book $book)
    {
        Auth::user()->books()->syncWithoutDetaching([$book->id => ['status' => 'read']]);

        return redirect()->back()->with('success', 'Book marked as Read!');
    }

    public function addToReading(Book $book)
    {
        Auth::user()->books()->syncWithoutDetaching([$book->id => ['status' => 'reading']]);

        return redirect()->back()->with('success', 'Book added to Reading list!');
    }

    public function addToPostponed(Book $book)
    {
        Auth::user()->books()->syncWithoutDetaching([$book->id => ['status' => 'postponed']]);

        return redirect()->back()->with('success', 'Book added to Postponed list!');
    }
}
