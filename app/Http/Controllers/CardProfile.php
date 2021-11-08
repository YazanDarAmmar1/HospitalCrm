<?php

namespace App\Http\Controllers;

use App\Card;
use App\Card_type;
use App\Package_type;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardProfile extends Controller
{
    public function index($id)
    {
        $father = DB::table('cards')->where('id', $id)->pluck('father_id')->first();
        $father_name = Card::where('id', $father)->first();

        $card = Card::where('id', $id)->first();
        $card_father = Card::where('father_id', $id)->get();
        $user = User::all();
        $card_type = Card_type::all();
        $package = Package_type::all();
        return view('cards.profile', compact('card', 'user', 'card_type', 'package', 'father_name', 'card_father'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'cpr' => 'required|max:13',
            'agent' => 'required',
        ], [
            'name.required' => 'Please Add Customer Name',
            'name.unique' => 'Customer Already Exist',
            'cpr.required' => 'Please Add CPR NO. To Customer',
            'cpr.unique' => 'Customer CPR Already Exist',
            'cpr.max' => 'CPR Number Max Value is 13',
            'agent.required' => 'Please Add Agent',
        ]);

        $new = Card::find($request->id);
        $new->name = $request->name;
        $new->cpr_no = $request->cpr;
        $new->email = $request->email;
        $new->date = $request->date;
        $new->agent_id = $request->agent;
        $new->gender = $request->gender;
        $new->mobile = $request->mobile;
        $new->phone = $request->phone;
        $new->house = $request->house;
        $new->road = $request->road;
        $new->block = $request->block;
        $new->place = $request->place;
        $new->country = $request->country;
        $new->card_type_id = $request->card_type;
        $new->payment_method = $request->payment_method;
        $new->contact_method = $request->contact_method;
        $new->package_type = $request->package;
        $new->period = $request->period;
        $new->status = $request->status;
        $new->comment = $request->comment;
        $new->price = $request->prices;
        $new->delivery = $request->delivery;
        $new->total = $request->total;
        $new->balance = $request->balance;
        $date_s = Carbon::createFromFormat('Y-m-d', $request->date);
        if ($request->period == '3Months') {
            $date = 3;
            $date_new = $date_s->addMonth($date);
            $new->expiry = $date_new;

        } elseif ($request->period == '4Months') {
            $date = 4;
            $date_new = $date_s->addMonth($date);
            $new->expiry = $date_new;
        } elseif ($request->period == '5Months') {
            $date = 5;
            $date_new = $date_s->addMonth($date);
            $new->expiry = $date_new;
        } elseif ($request->period == '1Year') {
            $date = 1;
            $date_new = $date_s->addYear($date);
            $new->expiry = $date_new;
        } elseif ($request->period == '2Years') {
            $date = 2;
            $date_new = $date_s->addYear($date);
            $new->expiry = $date_new;
        } elseif ($request->period == '5Years') {
            $date = 5;
            $date_new = $date_s->addYear($date);
            $new->expiry = $date_new;
        } else {
            session()->flash('error', 'Data has been Error');
        }
        $new->update();
        session()->flash('add', 'Data has been updated successfully');
        return redirect('/profile/' . $new->id);
    }

    public function invoice_index($id)
    {
        $invoice = Card::where('id', $id)->first();
        return view('cards.invoice', compact('invoice'));
    }

    public function all_invoice_index($id)
    {
        $invoice = Card::where('id', $id)->first();
        $invoice1 = Card::where('father_id', $id)->get();
        return view('cards.invoice', compact('invoice','invoice1'));
    }
}
