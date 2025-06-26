<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return "This is the Home Page";
    }

    public function about()
    {
        return "<h1>THIS IS MY ABOUT PAGE</h1>";
    }

    public function services()
    {
        return "<h1>THIS IS MY SERVICES PAGE</h1>";
    }

    public function array()
    {
        $booklist=['maths' , 'english' , 'urdu'];
        return $booklist;
    }

    public function booklist()
    {
        $book=['maths' , 'english' , 'urdu'];
        return view('booklist' , compact('book'));
    }

    public function fruitlist()
    {
        $fruits=['MANGO' , 'BANANA' , 'PEACH' , 'APPLE'];
        return view('fruitlist' , compact ('fruits'));
    }

    public function hobbies()
    {
        $hobby=['CRICKET' , 'CHESS' , 'FOOTBALL'];
        return view('hobbies' , compact('hobby'));
    }
}
