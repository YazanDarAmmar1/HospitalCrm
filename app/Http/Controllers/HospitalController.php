<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Category;
use App\Contract;
use App\File_doctor;
use App\Hospital;
use App\Imports\HospitalImport;
use App\Imports\ServiceImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $hospitals = Hospital::where('provider_type',$id)->get();
        $category = Category::all();
        $category1 = Category::all();
        return view('hospital.hospital', compact('hospitals','category','category1'));
    }


    public function index_profile($id)
    {
        $hospital_id = $id;
        $hospital = Hospital::where('id', $id)->first();
        $attachment = Attachment::where('hospital_id', $hospital_id)->first();
        $contract = Contract::where('hospital_id', $hospital_id)->first();
        $list = File_doctor::where('id_hospital', $hospital_id)->first();
        $services = Service::where('hospital_id', $id)->get()->all();
        return view('hospital.profile', compact('hospital', 'attachment', 'contract', 'list', 'services'));
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
            'provider_name' => 'required',
            'logo' => 'mimes:jpeg,png,jpg'
        ], [
            'provider_name.required' => 'Enter Name Please',
            'logo.mimes' => 'Attachment format to be jpeg, png, jpg'
        ]);
        Hospital::create([
            'name' => $request->provider_name,
            'name_ar' => $request->provider_name_ar,
            'contract_date' => $request->contract_date,
            'expiry_date' => $request->expiry_date,
            'cr_no' => $request->cr_no,
            'place' => $request->place,
            'place_ar' => $request->place_ar,
            'contact1' => $request->contact,
            'contact2' => $request->contact2,
            'email' => $request->email,
            'address' => $request->address,
            'address_ar' => $request->address_ar,
            'website' => $request->website,
            'category_id' => $request->category,
            'description' => $request->description,
            'description_ar' => $request->description_ar,
            'comment' => $request->comment,
            'provider_type' => $request->provider_name2,
            'card_type' => $request->card_type,
            'status' => 0,
            'on_off' => 0,

        ]);

        session()->flash('add', 'Data has been added successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Hospital $hospital
     * @return \Illuminate\Http\Response
     */
    public function show(Hospital $hospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Hospital $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospital $hospital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Hospital $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'provider_name' => 'required',
            'provider_name_ar' => 'required',
        ], [
            'provider_name.required' => 'Enter Name Please',
            'provider_name_ar.required' => 'Enter Arabic Name Please',
        ]);
        $id = $request->id;
        $edit_hospital = Hospital::find($id);
        $edit_hospital->update([
            'name' => $request->provider_name,
            'name_ar' => $request->provider_name_ar,
            'contract_date' => $request->contract_date,
            'expiry_date' => $request->expiry_date,
            'cr_no' => $request->cr_no,
            'place' => $request->place,
            'place_ar' => $request->place_ar,
            'contact1' => $request->contact,
            'contact2' => $request->contact2,
            'email' => $request->email,
            'address' => $request->address,
            'address_ar' => $request->address_ar,
            'website' => $request->website,
            'category_id' => $request->category,
            'description' => $request->description,
            'description_ar' => $request->description_ar,
            'provider_type' => $request->provider_name2,
            'card_type' => $request->card_type,
            'comment' => $request->comment,

        ]);
        session()->flash('edit', 'Data has been editing successfully');
        return back();

    }


    public function edit_status(Request $request)
    {
        $id = $request->id_inp;
        $hospital_status = Hospital::find($id);
        $hospital_status->update([
            'status' => $request->status,
        ]);
        session()->flash('edit', 'Data has been editing successfully');
        return back();
    }

    public function edit_status_online(Request $request)
    {
        $id = $request->id_inp;
        $hospital_status = Hospital::find($id);
        $hospital_status->update([
            'on_off' => $request->on_off,
        ]);
        session()->flash('edit', 'Data has been editing successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Hospital $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id_inp;
        Hospital::destroy($id);
        session()->flash('delete', 'Data has been deleted successfully');
        return back();
    }

    public function hospital_delete_checked(Request $request)
    {
        $idp = $request->check;
        Hospital::whereIn('id', $idp)->delete();
        return response()->json(['success' => 'Data has been deleted successfully']);
    }

    public function importHospital(Request $request)
    {
        $request->validate([
            'import' => 'required|mimes:xlsx'
        ], [
            'import.required' => 'Please Add File Import',
            'import.mimes' => 'Attachment format should be just xlsx',
        ]);
        $file = $request->file('import');
        Excel::import(new HospitalImport(), $file);
        session()->flash('add', 'Data has been added successfully');
        return back();


    }


    public function importServices(Request $request)
    {
        $request->validate([
            'import' => 'required|mimes:xlsx'
        ], [
            'import.required' => 'Please Add File Import',
            'import.mimes' => 'Attachment format should be just xlsx',
        ]);
        $file = $request->file('import');
        Excel::import(new ServiceImport(), $file);
        session()->flash('add', 'Data has been added successfully');
        return back();


    }

}
