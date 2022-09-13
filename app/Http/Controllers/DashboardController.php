<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Wallet;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $transactions = Card::where('user_id',auth()->user()->id)->take(3)->get();
        $wallet = Wallet::where('user_id', auth()->user()->id)->first();
        return view('Dashboard.index', ['wallet' => $wallet,'transactions' => $transactions]);
    }

    public function wallet(){
        $wallet = Wallet::where('user_id', auth()->user()->id)->first();
        return view('Dashboard.wallet', ['wallet' => $wallet]);
    }

    public function transaction(){
        $success = Card::where('status','Success')->where('user_id',auth()->user()->id)->count();
        $failed = Card::where('status','Failed')->where('user_id',auth()->user()->id)->count();
        $pending = Card::where('status','Pending')->where('user_id',auth()->user()->id)->count();
        $transactions = Card::where('user_id',auth()->user()->id)->get();
        return view('Dashboard.transaction',[
            'success' => $success,
            'failed' => $failed,
            'pending' => $pending,
            'transactions' => $transactions
        ]);
    }
}
