<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadController extends Controller
{
    public function index()
    {
        return view('ui.read.novel');
    }

    public function blog()
    {
        return view('ui.read.blog');
    }
}
