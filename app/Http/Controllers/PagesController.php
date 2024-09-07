<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function library(): View
    {
        return view('pages.library');
    }

    public function forum(): View
    {
        return view('pages.forum');
    }
}
