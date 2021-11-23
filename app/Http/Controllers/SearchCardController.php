<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class SearchCardController extends Controller
{
    public function index()
    {
        return view('search_card');
    }

    public function search(Request $request)
    {
        $request->validate([
            'cpr' => 'required',

        ]);
        $cpr = $request->cpr;
        $card = Card::where('cpr_no', $cpr)->where('status','done')->orWhere('status','paid')->first();
        return view('search_card',compact('card'));
    }
}
