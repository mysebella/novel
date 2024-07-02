<?php

namespace App\Http\Controllers;

class DetailController extends Controller
{
    public function index(string $slug)
    {
        return view('ui.detail', ["slug" => $slug]);
    }
}
