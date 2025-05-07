<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function generic()
    {
        return view('pages.generic');
    }

    public function elements()
    {
        return view('pages.elements');
    }
}
