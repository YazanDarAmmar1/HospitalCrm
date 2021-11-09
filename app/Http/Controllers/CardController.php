<?php

namespace App\Http\Controllers;

use App\Card;
use App\Card_type;
use App\Package_type;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
        $user =Auth::user()->id;
        $request->validate([
            'name' => 'required',
            'cpr' => 'required|unique:cards,cpr_no|max:13',

        ], [
            'name.required' => 'Please Add Customer Name',
            'name.unique' => 'Customer Already Exist',
            'cpr.required' => 'Please Add CPR NO. To Customer',
            'cpr.unique' => 'Customer CPR Already Exist',
            'cpr.max' => 'CPR Number Max Value is 13',
        ]);

        $card = new Card();
        $card->name = $request->name;
        $card->cpr_no = $request->cpr;
        $card->email = $request->email;
        $card->date = $request->date;
        $card->agent_id = $user;
        $card->gender = $request->gender;
        $card->mobile = $request->mobile;
        $card->phone = $request->phone;
        $card->house = $request->house;
        $card->road = $request->road;
        $card->block = $request->block;
        $card->place = $request->place;
        $card->country = $request->country;
        $card->card_type_id = $request->card_type;
        $card->payment_method = $request->payment_method;
        $card->contact_method = $request->contact_method;
        $card->package_type = $request->package;
        $card->period = $request->period;
        $card->status = $request->status;
        $card->comment = $request->comment;
        $card->father_id = $request->id_inp;
        $date_s =  Carbon::createFromFormat('Y-m-d', $request->date);
        if ($request->period == '3Months') {
            $date = 3;
            $date_new = $date_s->addMonth($date);
            $card->expiry = $date_new;

        } elseif ($request->period == '4Months') {
            $date = 4;
            $date_new = $date_s->addMonth($date)->toDateString();
            $card->expiry = $date_new;
        } elseif ($request->period == '5Months') {
            $date = 5;
            $date_new = $date_s->addMonth($date)->toDateString();
            $card->expiry = $date_new;
        }elseif ($request->period == '1Year'){
            $date = 1;
            $date_new = $date_s->addYear($date)->toDateString();
            $card->expiry = $date_new;
        }elseif ($request->period == '2Years'){
            $date = 2;
            $date_new = $date_s->addYear($date)->toDateString();
            $card->expiry = $date_new;
        }elseif ($request->period == '5Years'){
            $date = 5;
            $date_new = $date_s->addYear($date)->toDateString();
            $card->expiry = $date_new;
        }else{
            session()->flash('error', 'Data has been Error');
        }
        $card->save();
        session()->flash('add', 'Data has been added successfully');
        return redirect('/profile/'.$card->id);
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
