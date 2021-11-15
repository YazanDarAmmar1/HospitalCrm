<?php

namespace App\Http\Controllers;

use App\Card;
use App\Card_type;
use App\Notifications\CardEmail;
use App\Package_type;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use App\Notifications\AgendamentoPendente;
use Illuminate\Support\Facades\Mail;
use Storage;
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


    public function printToPDF1($id, $id2)
    {
        $desin = $id2;
        $card_father = Card::where('father_id', $id)->get();
        $card = Card::where('id', $id)->first();
        $pdf = PDF::loadView('cards.single_card', compact('card', 'desin', 'card_father'));
        $pdf->setPaper(array(30, -30, 450, 240));
        $pdf->save(public_path('card/').$card->cpr_no.'.pdf');
        return $pdf->download($id.'.pdf');

    }

    public function printToPDF($id,$id2){
        $desin = $id2;
        $card_father = Card::where('father_id', $id)->get();
        $card = Card::where('id', $id)->first();

        $data["email"] =$card->email;
        $data["title"] = "From SAMA CARDS";
        $data["body"] = "To add more members, please click below";
        $data["name"] = $card->name;
        $pdf = PDF::loadView('cards.single_card', compact('card', 'desin', 'card_father'));
        $pdf->setPaper(array(30, -30, 450, 240));
        if ($card->status == 'paid') {
            Mail::send('cards.email_desing', $data, function ($message) use ($data, $pdf) {
                $message->to($data["email"], $data["email"])
                    ->subject($data["title"])
                    ->attachData($pdf->output(), "Your Card.pdf");
            });
        }else{

        }

        return $pdf->download($id.'.pdf');
    }

    public function printToPDF_invoices($id){
        $invoice = Card::where('id', $id)->first();
        $invoice1 = Card::where('father_id', $id)->get();


        $data["email"] =$invoice->email;
        $data["title"] = "From SAMA CARDS";
        $data["body"] = "To Add More Members, Please Click Below";
        $data["name"] = $invoice->name;
        $pdf = PDF::loadView('cards.invoice_pdf', compact('invoice','invoice1'));
        $pdf->setPaper("A3", "portrait");


        if ($invoice->status == 'paid') {
            Mail::send('cards.email_desing2', $data, function ($message) use ($data, $pdf) {
                $message->to($data["email"], $data["email"])
                    ->subject($data["title"])
                   ->attachData($pdf->output(), "Your invoice.pdf");
            });
        }else{
       }
        return back();
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
        if (!($request->customer_img == null)) {
            $image = $request->file('customer_img');
            $file_name = $image->getClientOriginalName();

            $new->img = $file_name;
            // move pic
            $imageName = $request->customer_img->getClientOriginalName();
            $request->customer_img->move(public_path('customer_img/' . $request->cpr), $imageName);
        }


        $date_s = Carbon::createFromFormat('Y-m-d', $request->date);
        if ($request->period == '3Months') {
            $date = 3;
            $date_new = $date_s->addMonth($date)->toDateString();
            $new->expiry = $date_new;

        } elseif ($request->period == '4Months') {
            $date = 4;
            $date_new = $date_s->addMonth($date)->toDateString();
            $new->expiry = $date_new;
        } elseif ($request->period == '5Months') {
            $date = 5;
            $date_new = $date_s->addMonth($date)->toDateString();
            $new->expiry = $date_new;
        } elseif ($request->period == '1Year') {
            $date = 1;
            $date_new = $date_s->addYear($date)->toDateString();
            $new->expiry = $date_new;
        } elseif ($request->period == '2Years') {
            $date = 2;
            $date_new = $date_s->addYear($date)->toDateString();
            $new->expiry = $date_new;
        } elseif ($request->period == '5Years') {
            $date = 5;
            $date_new = $date_s->addYear($date)->toDateString();
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
        return view('cards.invoice', compact('invoice', 'invoice1'));
    }

}
