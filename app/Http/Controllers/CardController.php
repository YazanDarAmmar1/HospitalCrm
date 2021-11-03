<?php

namespace App\Http\Controllers;

use App\Card;
use App\Card_type;
use App\Package_type;
use App\User;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package = Package_type::all();
        $card = Card_type::all();
        $user = User::all();
        return view('cards.add', compact('package', 'card', 'user'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'cpr' => 'required|unique:cards,cpr_no|max:13',
            'agent' => 'required',
        ], [
            'name.required' => 'Please Add Customer Name',
            'name.unique' => 'Customer Already Exist',
            'cpr.required' => 'Please Add CPR NO. To Customer',
            'cpr.unique' => 'Customer CPR Already Exist',
            'cpr.max' => 'CPR Number Max Value is 13',
            'agent.required' => 'Please Add Agent',
        ]);
        Card::create([
            'name' => $request->name,
            'cpr_no' => $request->cpr,
            'email' => $request->email,
            'date' => $request->date,
            'agent_id' => $request->agent,
            'gender' => $request->gender,
            'mobile' => $request->mobile,
            'phone' => $request->phone,
            'house' => $request->house,
            'road' => $request->road,
            'block' => $request->block,
            'place' => $request->place,
            'country' => $request->country,
            'card_type_id' => $request->card_type,
            'payment_method' => $request->payment_method,
            'contact_method' => $request->contact_method,
            'package_type' => $request->package,
            'period' => $request->period,
            'status' => $request->status,
            'comment' => $request->comment,
        ]);
        session()->flash('add', 'Data has been added successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Card $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Card $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Card $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Card $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        //
    }
}
