<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\input;

class ApiController extends Controller
{
    public function getData($parameter)
    {
        // Logika untuk mendapatkan data berdasarkan parameter
        $data = "Data dari parameter: " . $parameter;

        return response()->json(['data' => $data]);
    }
}
