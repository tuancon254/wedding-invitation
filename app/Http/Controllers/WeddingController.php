<?php

namespace App\Http\Controllers;

use App\Models\CustomerResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class WeddingController extends Controller
{
    public function __construct() {}

    public function index()
    {
        return view('index_multipage');
    }

    public function multipage()
    {
        return view('index_multipage');
    }


    public function rsvp()
    {
        return view('rsvp');
    }

    public function storeRsvp(Request $request)
    {
        $customerResponse = new CustomerResponse();
        $customerResponse->fill($request->only(['will_come', 'name', 'email', 'number_of_guest', 'guestOf', 'message']));
        $customerResponse->save();

        return response()->json([
            'message' => 'success'
        ]);
    }

    public function gallery()
    {
        return view('gallery');
    }
}
