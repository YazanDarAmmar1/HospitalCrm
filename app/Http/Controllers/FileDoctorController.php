<?php

namespace App\Http\Controllers;

use App\Contract;
use App\File_doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileDoctorController extends Controller
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
        {
            $this->validate($request, [

                'list' => 'mimes:pdf,jpeg,png,jpg,xlsx,doc,docx,ppt',

            ], [
                'list.mimes' => 'Attachment format should be pdf, jpeg, png, jpg, xlsx, doc, docx, ppt',
            ]);

            if ($request->hasFile('list')) {
                $image = $request->list;
                $file_name = $image->getClientOriginalName();


                $list = new File_doctor();
                $list->file = $file_name;
                $list->id_hospital = $request->id_inp;
                $list->save();

                // move
                $imageName = $request->list->getClientOriginalName();
                $request->list->move(public_path('doctorsList/' . $request->id_inp), $imageName);

                session()->flash('Add', 'تم اضافة المرفق بنجاح');
                return back();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\File_doctor  $file_doctor
     * @return \Illuminate\Http\Response
     */
    public function show(File_doctor $file_doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\File_doctor  $file_doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(File_doctor $file_doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\File_doctor  $file_doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File_doctor $file_doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\File_doctor  $file_doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id= $request->id_inp;

        File_doctor::where('id',$id)->delete();
        Storage::delete('doctorsList/'.$id);
        session()->flash('delete', 'Data has been deleted successfully');
        return back();
    }

    public function open_file($id,$file_name)
    {
      $files = Storage::get($id.'/'.$file_name);
       return response()->download($files);
    }
}
