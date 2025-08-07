<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Galery extends Controller
{
    public function index()
    {
        return view('galery');
    }
}
