<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function games(): View
    {
        return view('pages.games');
    }

    public function library(Request $request): View
    {
        $query = Book::query();
        $categories = Category::all();

        // Поиск по категории
        if ($request->has('category') && $request->category != '') {
            $query->where('categories', $request->category);
        }

        // Поиск по заголовку
        if ($request->has('search') && $request->search != '') {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // Поиск по ID
        if ($request->has('id') && $request->id != '') {
            $query->where('id', $request->id);
        }

        $books = $query->paginate(21);

        return view('pages.library', [
            'categories' => $categories,
            'books' => $books,
            'search' => $request->search,
            'category' => $request->category
        ]);
    }

    public function library_show($book_slug): View
    {
        $book = Book::where('slug', $book_slug)->first();
        return view('pages.book', ['book' => $book]);
    }

    public function forum(): View
    {
        return view('pages.forum');
    }

    public function quiz_farm(): View
    {
        return view('pages.quiz_game.farm');
    }
}
