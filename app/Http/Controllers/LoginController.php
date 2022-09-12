<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function process(LoginRequest $request){
        $request->validated();
        if(!auth()->attempt($request->only('email', 'password'))){
            return back()->with('message',"Invalid Login Credentials");
        }
        return redirect()->route('dashboard');
    }
}
