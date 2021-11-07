<?php

namespace App\Http\Controllers;

use App\Card;
use App\Card_type;
use App\Package_type;
use App\User;
use Illuminate\Http\Request;

class AllCardController extends Controller
{
    public function index()
    {
        $package = Package_type::all();
        $card_type = Card_type::all();
        $user = User::all();
        $card = Card::all();
        return view('cards.all', compact('card','package','card_type','user'));
    }

    public function update(Request $request)
    {
        $id = $request->id_inp;
        $card = Card::find($id);
        $card->update([
           'status' => $request->status,
        ]);
        session()->flash('add', 'Data has been updated successfully');
        return back();

    }

    public function destroy(Request $request)
    {
        $id = $request->id_inp;
        Card::destroy($id);
        session()->flash('add', 'Data has been deleted successfully');
        return back();
    }
}
