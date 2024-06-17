<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Input;
use Illuminate\Support\Facades\Session;

class ambildata extends Controller
{
    public function index($token){


        if (!$token) {
            return response()->json(['error' => 'Token ID not found in session'], 404);
        }

    $data = Input::where('token', $token)->get(); 
    return response()->json($data);

    }
}
