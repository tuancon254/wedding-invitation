<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeddingController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('index');
    }

    public function multipage()
    {
        return view('index_multipage');
    }

}
