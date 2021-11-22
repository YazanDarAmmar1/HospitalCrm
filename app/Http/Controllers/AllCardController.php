<?php

namespace App\Http\Controllers;

use App\Card;
use App\Card_type;
use App\Imports\CustomerImport;
use App\Imports\HospitalImport;
use App\Package_type;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class AllCardController extends Controller
{
    public function index()
    {
        $package = Package_type::all();
        $card_type = Card_type::all();
        $user = User::all();
        $card = Card::all();
        return view('cards.all', compact('card', 'package', 'card_type', 'user'));
    }

    public function index_draft()
    {
        $package = Package_type::all();
        $card_type = Card_type::all();
        $user = User::all();
        $card = Card::where('status','draft')->get();
        return view('cards.all_draft', compact('card','package','card_type','user'));
    }

    public function update(Request $request)
    {
        $id = $request->id_inp;

       DB::table('cards')->where('father_id',$id)->orWhere('cpr_no',$id)->update([
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

    public function importCustomer(Request $request)
    {
        $request->validate([
            'import' => 'required|mimes:xlsx'
        ], [
            'import.required' => 'Please Add File Import',
            'import.mimes' => 'Attachment format should be just xlsx',
        ]);
        $file = $request->file('import');
        Excel::import(new CustomerImport(), $file);
        session()->flash('add', 'Data has been added successfully');
        return back();


    }
}
