<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class AllCardController extends Controller
{
    public function index()
    {
        $card = Card::all();
        return view('cards.all',compact('card'));
    }
}
