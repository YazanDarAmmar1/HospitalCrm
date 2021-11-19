<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Hospital;
use Illuminate\Http\Request;

class HospitalDirectoryController extends Controller
{
    public function index(Request $request)
    {

        $hospital2 = Hospital::paginate(2);
        return view('hospital_directory', compact('hospital2'));

    }

    public function hospital_search(Request $request)
    {

            $hospital = $request->search;
            $hospital_search = Hospital::Where('name','=', $hospital)->orWhere('name_ar',$hospital)->orWhere('name_ar',$hospital)->orWhere('name_ar',$hospital)->orWhere('name_ar',$hospital)->orWhere('place',$hospital)->orWhere('place_ar',$hospital)->orWhere('contact1',$hospital)->orWhere('contact2',$hospital)->orWhere('email',$hospital)->orWhere('address',$hospital)->orWhere('address_ar',$hospital)->orWhere('website',$hospital)->orWhere('category_id',$hospital)->get();
        return view('hospital_directory', compact('hospital_search','hospital'));


    }
    function action(Request $request)
    {
        $data = $request->all();

        $query = $data['query'];

        $filter_data = Hospital::select('name')
            ->where('name', 'LIKE', '%'.$query.'%')
            ->get();

        return response()->json($filter_data);
    }

    public function hospital_profile(){
        return view('hospital_profile');
    }
}

