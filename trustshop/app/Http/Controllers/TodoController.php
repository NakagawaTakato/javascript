<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function tab()
    {
        return view('tab');
    }

    public function accordion()
    {
        return view('accordion');
    }

    public function table()
    {
        return view('table');
    }
}
