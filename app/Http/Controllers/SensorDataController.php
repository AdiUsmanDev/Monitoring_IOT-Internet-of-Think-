<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\input;
use Illuminate\Support\Facades\Validator;

class SensorDataController extends Controller
{
    public function store($pramsshu, $pramsapi, $pramsair, $pramsgetar, $pramsmiring,$kelembapan,$token)
    {
        // Validasi manual
        $data = [
            'suhu' => $pramsshu,
            'api' => $pramsapi,
            'air' => $pramsair,
            'getar' => $pramsgetar,
            'kemiringan' => $pramsmiring,
            'kelembapan' => $kelembapan,
            'token' => $token
        ];

        $validator = Validator::make($data, [
            'suhu' => 'required|numeric',
            'kelembapan' => 'required|numeric',
            'api' => 'required|integer',
            'air' => 'required|integer',
            'getar' => 'required|integer',
            'kemiringan' => 'required|integer',
            'token' => 'required|string'
    
            
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }


        $Input = input::where('token',$token)->first();

        if (!$Input) {
            return response()->json(['error' => 'Data not found'], 404);
        }

        $Input->suhu = $data['suhu'];
        $Input->api = $data['api'];
        $Input->air = $data['air'];
        $Input->getar = $data['getar'];
        $Input->kemiringan = $data['kemiringan'];
        $Input->kelembaban = $data['kelembapan'];
        
        
        $Input->save();

        return response()->json(['message' => 'Data update successfully'], 201);

    }
}
