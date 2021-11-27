<?php

namespace App\Http\Controllers;

use App\Card_type;
use Illuminate\Http\Request;

class CardTypeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cardType = Card_type::all();
        return view('category.card_type',compact('cardType'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',

        ],[
            'name.required' => 'Please Add Card Name',
        ]);
        Card_type::create([
            'name' => $request->name,
            'description' => $request->description,

        ]);
        session()->flash('add', 'Data has been added successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Card_type  $card_type
     * @return \Illuminate\Http\Response
     */
    public function show(Card_type $card_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Card_type  $card_type
     * @return \Illuminate\Http\Response
     */
    public function edit(Card_type $card_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Card_type  $card_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card_type $card_type)
    {
        $request->validate([
            'name' => 'required',

        ],[
            'name.required' => 'Please Add Card Name',
        ]);
        $id = $request->id;
        $card_type = Card_type::find($id);
        $card_type->update([
            'name' => $request->name,
            'description' => $request->description,

        ]);
        session()->flash('edit', 'Data has been updated successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Card_type  $card_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        Card_type::destroy($request->id_inp);
        session()->flash('delete', 'Data has been deleted successfully');
        return back();

    }
}
