<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\File_doctor;
use App\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function home_slider()
    {
        $slider = DB::table('attachments')->where('hospital_id',null)->get();

        return view('category.home_slider',compact('slider'));
    }
    public function slider_store(Request $request)
    {
        {
            $this->validate($request, [

                'slider' => 'mimes:jpeg,png,jpg',

            ], [
                'list.mimes' => 'Attachment format should be jpeg, png, jpg',
            ]);

            if ($request->hasFile('slider')) {
                $image = $request->slider;
                $file_name = $image->getClientOriginalName();


                $list = new Attachment();
                $list->url_slider = $file_name;
                $list->hospital_id = null;
                $list->url_logo = null;
                $list->save();

                // move
                $imageName = $request->slider->getClientOriginalName();
                $request->slider->move(public_path('slider/'), $imageName);

                session()->flash('Add', 'تم اضافة المرفق بنجاح');
                return back();
            }
        }
    }

    public function destroy(Request $request)
    {
        $id= $request->id_inp;
        $name = $request->name_inp;
        Attachment::where('id',$id)->delete();
        Storage::delete('slider/'.$name);
        session()->flash('delete', 'Data has been deleted successfully');
        return back();
    }
}
