<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to Laravel';
        return view('index')->with('title', $title);
    }
    public function about(){
        $title = 'Welcome to About';
        return view('about')->with('title', $title);
    }
}
