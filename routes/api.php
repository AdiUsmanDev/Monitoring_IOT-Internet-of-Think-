<?php
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\SensorDataController;
use App\Http\Controllers\ambildata;
use App\coba;
use App\input;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/*Route::get('/data/{param1}/{param2}', [ViewController::class, 'getData']);*/

Route::get('/data/{prams}', function($prams) {
    // Data sumber
    $coba = new coba;
    $coba->id = $prams;

    // Simpan data ke database
    $coba->save();

    // Mengirim data ke view
    return view('api', compact('coba','prams'));
});


Route::get('query', function(){
     $coba = coba::all();

     return response()->json($coba);
});

Route::get('inputdata/{pramsshu}/{pramsapi}/{pramsair}/{pramsgetar}/{pramsmiring}/{kelembapan}/{token}', 'SensorDataController@store');

Route::get('ambildata/{idtoken}', 'ambildata@index');

Route::get('/getdata','getdata@index');
