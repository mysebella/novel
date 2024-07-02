<?php

namespace App\Http\Controllers;

class ReadController extends Controller
{
    public function index(string $slug)
    {
        return view('ui.read.novel', ["slug" => $slug]);
    }

    public function news()
    {
        return view('ui.read.news');
    }
}
