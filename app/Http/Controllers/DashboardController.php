<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $wallet = Wallet::where('user_id', auth()->user()->id)->first();
        return view('Dashboard.index', ['wallet' => $wallet]);
    }

    public function wallet(){
        $wallet = Wallet::where('user_id', auth()->user()->id)->first();
        return view('Dashboard.wallet', ['wallet' => $wallet]);
        
    }
}
