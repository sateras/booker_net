<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category_books(Request $request)
    {
        $query = Book::query();

        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }

        if ($request->has('search') && $request->search != '') {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $books = $query->paginate(30);

        return view('library.index', [
            'books' => $books,
            'search' => $request->search,
            'category' => $request->category
        ]);
    }
}
