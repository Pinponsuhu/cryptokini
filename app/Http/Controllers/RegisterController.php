<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function process(RegisterRequest $request){
        $request->validated();

        $user = User::create([
            'email' => $request->email,
            'fullname' => $request->fullname,
            'password' => Hash::make($request->password)
        ]);

        Wallet::create([
            'balance' => 0,
            'user_id' => $user->id
        ]);

        \Illuminate\Support\Facades\Mail::send(new \App\Mail\RegisteredMail($request->email, $request->fullname));        
        return redirect()->route('login')->with('message','Account created Successfully');
       
    }
}
