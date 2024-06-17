<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class authcontroller extends Controller
{
    
    public function showLoginForm()
    {
        return view('logindaftar');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            Session::put('user',$user->token_id);
            Session::put('name',$user->name);
            Session::put('email',$user->email);

            return view('dashbord');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->with('login', true);
    }

    public function register(Request $request)
    {
   

       $tkn =str::random(20);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'token_id' => $tkn,
        ]);

        $tableName = 'inputs'; 
        DB::table($tableName)->insert([
            'suhu' => '0',
            'api'=> '0',
            'air' => '0',
            'getar' =>'0',
            'kemiringan'=> '0',
            'kelembaban' => '0',
            'token'=>$tkn,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $table = 'perintahs'; 
        DB::table($table)->insert([
            'alram' => '0',
            'led'=> '0',
            'token'=>$tkn,
            'created_at' => now(),
            'updated_at' => now()
        ]);


        return redirect()->route('form')->with('success', 'Registration successful. Please login.')->with('login', true);
    }

    public function logout()
    {
        Auth::logout();
        
        Session::flush();

        return  redirect('');
    }

}
