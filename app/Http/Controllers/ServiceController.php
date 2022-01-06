<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
            'service' => 'required',
            'service_ar' => 'required'
        ],[
            'service.required' => 'Please Insert English Name Service',
            'service_ar.required' => 'Please Insert Arabic Name Service',

        ]);
        Service::create([
            'name' => $request->service,
            'name_ar' => $request->service_ar,
            'hospital_id' => $request->id_id,
            'discount' => $request->discount,
            'price' => $request->price,
        ]);
        session()->flash('add', 'Data has been added successfully');
        return back();
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $id = $request->id_id;
        $service = Service::find($id);
        $service->update([
           'name' => $request->service,
            'name_ar'=> $request->service_ar,
            'discount' => $request->discount,
            'price' => $request->price,
        ]);
        session()->flash('edit', 'Data has been editing successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id_inp;
        Service::destroy($id);
        session()->flash('delete', 'Data has been deleted successfully');
        return back();
    }
}
