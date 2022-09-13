<?php

namespace App\Http\Controllers;

use App\Http\Requests\TradeRequest;
use App\Models\Card;
use Illuminate\Http\Request;

class TradeController extends Controller
{
    public function index(){
        return view('Dashboard.start-trade');
    }

    public function process(TradeRequest $request){
        $request->validated();
        $dest = '/public/giftcards';
        $path = $request->gift_file->store($dest);
        Card::create([
            'category' => $request->category,
            'sub_category' => $request->sub_category,
            'trade_amount' => $request->trade_amount,
            'comment' => $request->comment,
            'gift_file' => str_replace('public/giftcards/','storage/giftcards/',$path),
            'rate' => "200",
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('dashboard')->with('message', 'GIft Card Sent Successfully');
    }
}
