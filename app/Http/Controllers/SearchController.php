<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('ui.search.title');
    }

    public function genre()
    {
        return view('ui.search.genre');
    }
}
