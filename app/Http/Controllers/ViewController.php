<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\coba;


class ViewController extends Controller
{
    public function index()
    {
    
        $coba = coba::pluck('id')->toArray();

       return response()->json($coba) ;

       // return view('api', compact('coba'));
        
    }
}
