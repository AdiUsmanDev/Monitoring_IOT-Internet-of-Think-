<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\perintah;

class getdata extends Controller
{

   public function index(){
    $perintah = perintah::all();
    return response()->json($perintah);

   }

}
