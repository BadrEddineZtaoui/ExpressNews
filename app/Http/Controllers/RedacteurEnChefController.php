<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedacteurEnChefController extends Controller
{
    public function index()
    {
        return view('RedacteurEnChef/index');
    }

    public function articles()
    {
        return view('RedacteurEnChef/articles');
    }

    public function reds()
    {
        return view('RedacteurEnChef/reds');
    }

    public function comments()
    {
        return view('RedacteurEnChef/comments');
    }

    public function sousCat()
    {
        return view('RedacteurEnChef/sousCat');
    }

     public function listRedacteurs()
    {
        return view('RedacteurEnChef/listRedacteurs');
    }
}
