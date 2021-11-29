<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Hospital;
use App\Service;
use Illuminate\Http\Request;

class HospitalDirectoryController extends Controller
{
    public function index(Request $request)
    {

        $hospital2 = Hospital::where('on_off', 1)->paginate(4);
        return view('hospital_directory', compact('hospital2'));

    }

    public function hospital_search(Request $request)
    {

        $hospital = $request->search;
        $hospital_search = Hospital::where('name', 'LIKE', '%' . $hospital . '%')->orWhere('name_ar', 'LIKE', '%' . $hospital . '%' )->orWhere('name_ar', 'LIKE','%' . $hospital . '%')->orWhere('name_ar', 'LIKE', '%' . $hospital . '%')->orWhere('name_ar', 'LIKE', '%' . $hospital . '%')->orWhere('place', 'LIKE', '%' . $hospital . '%')->orWhere('place_ar', 'LIKE', '%' . $hospital . '%')->orWhere('contact1', 'LIKE', '%' . $hospital . '%')->orWhere('contact2', 'LIKE', '%' . $hospital . '%')->orWhere('email', 'LIKE', '%' . $hospital . '%')->orWhere('address', 'LIKE', '%' . $hospital . '%')->orWhere('address_ar', 'LIKE', '%' . $hospital . '%')->orWhere('website', 'LIKE', '%' . $hospital . '%')->orWhere('category_id', 'LIKE', '%' . $hospital . '%')->get();
        return view('hospital_directory', compact('hospital_search', 'hospital'));


    }

    function action(Request $request)
    {
        $data = $request->all();

        $query = $data['query'];

        $filter_data = Hospital::select('name')
            ->where('name', 'LIKE', '%' . $query . '%')
            ->get();

        return response()->json($filter_data);
    }

    public function hospital_profile($id)
    {
        $hospital_id = $id;
        $hospital = Hospital::where('id', $hospital_id)->first();
        $service = Service::where('hospital_id', $hospital_id)->get();
        $hospital2 = Hospital::paginate(3);

        return view('hospital_profile', compact('hospital', 'service', 'hospital2'));
    }

    public function hospital_category($id)
    {
        $hospital = Hospital::where('category_id',$id)->paginate(3);
        return view('hospital_category',compact('hospital'));
    }
}

