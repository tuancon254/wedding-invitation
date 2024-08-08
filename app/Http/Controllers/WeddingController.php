<?php

namespace App\Http\Controllers;

use App\Models\CustomerResponse;
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
        $customerResponse = new CustomerResponse();
        $customerResponse->fill($request->only(['will_come', 'name', 'email', 'number_of_guest', 'guestOf', 'message']));
        $customerResponse->save();

        return response()->json([
            'message' => 'success'
        ]);
    }
}
