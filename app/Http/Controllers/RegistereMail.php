<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistereMail extends Controller
{
    public function __invoke($id){
     
        
        return redirect()->route('login')->with('message','Account created Successfully');
    }
}
