<?php

namespace App\Http\Controllers;

use App\Card;
use App\Package_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class reportController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }

    public function index()
    {
        $package = Package_type::all();
        return view('report.cardReport', compact('package'));
    }

    public function reportCard(Request $request)
    {

        $package = Package_type::all();
        $start = $request->start;
        $end = $request->end;
        $status = $request->status;
        $card = Card::all();
        if ($request->package) {
            $card = $card->where('package_type', $request->package);
        }
        if ($request->start && $request->end) {
            $start = $request->start;
            $end = $request->end;
            $card = $card->whereBetween('date', [$start, $end]);
        }
        if ($request->status) {
            $card = $card->where('status', $request->status);
        }
        if ($request->agent) {
            $card = $card->where('agent_id', $request->agent);
        }
        return view('report.cardReport', compact('card', 'package', 'start', 'end', 'status'));
    }

    public function agentcustomer()
    {
        $user_id = Auth::user()->id;
        $user_rate = Auth::user()->rate;
        $card = Card::where('agent_id',$user_id)->get();
        $total = Card::where('agent_id',$user_id)->where('status','paid')->sum('price');
        $total = ($total * $user_rate)/100 ;

        return view('report.agent',compact('card','total'));
    }
}
