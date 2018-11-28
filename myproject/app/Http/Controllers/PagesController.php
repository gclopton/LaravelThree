<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $tasks = [
            'array item #1',
            'array item #2',
            'array item #3',
            'array item #4',
        ];

        return view('welcome')->with([
            'tasks' => $tasks,
            'input' => 'output',
            'script' => '<script>alert("Hi!")</script>'
        ]);
    }

    public function contact(){
        return view('contact');
    }

    public function about(){
        return view ('about');
    }
    
}

