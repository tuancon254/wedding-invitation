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

    public function rsvp(Request $request)
    {
        dd($request->all());
        return response()->json([
            'message' => 'success'
        ]);
    }
}
