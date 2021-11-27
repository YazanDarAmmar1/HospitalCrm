<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContractController extends Controller
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
        //
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
        $this->validate($request, [

            'contract' => 'mimes:pdf,jpeg,png,jpg,xlsx,doc,docx,ppt',

        ], [
            'contract.mimes' => 'Attachment format should be pdf, jpeg, png, jpg, xlsx, doc, docx, ppt',
        ]);

        if ($request->hasFile('contract')) {
            $image = $request->contract;
            $file_name = $image->getClientOriginalName();


            $contract = new Contract();
            $contract->contract_file = $file_name;
            $contract->hospital_id = $request->id_inp;
            $contract->save();

            // move pic
            $imageName = $request->contract->getClientOriginalName();
            $request->contract->move(public_path('Contract/' . $request->id_inp), $imageName);

            session()->flash('Add', 'تم اضافة المرفق بنجاح');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function show(Contract $contract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function edit(Contract $contract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contract $contract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id= $request->id_inp;

        Contract::where('hospital_id',$id)->delete();
        Storage::deleteDirectory('Attachments/'.$id);
        session()->flash('delete', 'Data has been deleted successfully');
        return back();
    }

//
}
