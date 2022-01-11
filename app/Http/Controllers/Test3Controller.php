<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test3Controller extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}