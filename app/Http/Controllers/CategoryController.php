<?php

namespace App\Http\Controllers;

use App\Category;
use App\Imports\CategoryImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CategoryController extends Controller
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
        $category = Category::all();
        return view('category.category', compact('category'));
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
            'name_ar' => 'required',

        ], [
            'name.required' => 'Please Add English Name Of Provider',
            'name_ar.required' => 'Please Add Arabic Name Of Provider',
        ]);
        Category::create([
            'category' => $request->name,
            'category_ar' => $request->name_ar,
            'description' => $request->description,

        ]);
        session()->flash('add', 'Data has been added successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'name_ar' => 'required',

        ], [
            'name.required' => 'Please Add English Name Of Provider',
            'name_ar.required' => 'Please Add Arabic Name Of Provider',
        ]);
        $id = $request->id;
        $find = Category::find($id);
        $find->update([
            'category' => $request->name,
            'category_ar' => $request->name_ar,
            'description' => $request->description,

        ]);
        session()->flash('edit', 'Data has been updated successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id_inp;
        Category::destroy($id);
        session()->flash('delete', 'Data has been deleted successfully');
        return back();

    }

    public function importCategory(Request $request)
    {
        $request->validate([
            'import' => 'required|mimes:xlsx'
        ], [
            'import.required' => 'Please Add File Import',
            'import.mimes' => 'Attachment format should be just xlsx',
        ]);
        $file = $request->file('import');
        Excel::import(new CategoryImport(), $file);
        session()->flash('add', 'Data has been added successfully');
        return back();


    }

}
