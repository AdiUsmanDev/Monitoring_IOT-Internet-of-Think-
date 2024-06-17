<?php

use App\Http\Controllers\ViewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'authcontroller@showLoginForm')->name('form');
Route::post('login', 'authcontroller@login')->name('login');
Route::post('register', 'authcontroller@register')->name('register');
Route::get('logout', 'authcontroller@logout')->name('logout');
//Route::post('back', 'back@someMethod')->name('back');

Route::get('profile',function(){
    return view('profile');
});

Route::get('dashboard', function () {
    $user = Auth::user();
    return view('dashbord', ['user' => $user]);
})->middleware('auth')->name('dashboard');


Route::get('notifikasi', function (){
    return view('notifikasi');
});

Route::get('/viewapi','ViewController@index');



