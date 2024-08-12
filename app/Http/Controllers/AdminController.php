<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        return view('admin.login');
    }

    public function signIn(Request $request)
    {
        // // Assuming there's a method to validate admin credentials
        // if (!auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }

        // $user = auth()->user();
        // $token = $user->createToken('adminToken')->plainTextToken;

        // return response()->json(['token' => $token]);
    }

    public function gallery(){
        return view('admin.gallery');
    }
}
