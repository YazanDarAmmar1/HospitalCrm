<?php

namespace App\Http\Controllers;

use App\Card_type;
use App\Package_type;
use Illuminate\Http\Request;

class PackageTypeController extends Controller
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
        return view('category.package_type', compact('package', 'card'));
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
            'card' => 'required',
            'prices' => 'required',


        ], [
            'name.required' => 'Please Add Package Name',
            'card.required' => 'Please Add Card Name',
            'prices.required' => 'Please Add Prices Number',
        ]);
        Package_type::create([
            'name' => $request->name,
            'card_id' => $request->card,
            'package_prices' => $request->prices,
            'status' => $request->status,


        ]);
        session()->flash('add', 'Data has been added successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Package_type $package_type
     * @return \Illuminate\Http\Response
     */
    public function show(Package_type $package_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Package_type $package_type
     * @return \Illuminate\Http\Response
     */
    public function edit(Package_type $package_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Package_type $package_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package_type $package_type)
    {
        $request->validate([
            'name' => 'required',
            'card' => 'required',
            'prices' => 'required',



        ], [
            'name.required' => 'Please Add Package Name',
            'card.required' => 'Please Add Card Name',
            'prices.required' => 'Please Add Prices Number',
        ]);
        $package_type = Package_type::find($request->id);
        $package_type->update([
            'name' => $request->name,
            'card_id' => $request->card,
            'package_prices' => $request->prices,
            'status' => $request->status,
        ]);
        session()->flash('edit', 'Data has been updated successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Package_type $package_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Package_type::destroy($request->id_inp);
        session()->flash('delete', 'Data has been deleted successfully');
        return back();
    }
}
