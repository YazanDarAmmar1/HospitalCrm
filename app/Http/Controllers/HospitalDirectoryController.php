<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Hospital;
use Illuminate\Http\Request;

class HospitalDirectoryController extends Controller
{
    public function index()
    {
        $hospital = Hospital::paginate(2);

        return view('hospital_directory',compact('hospital'));
    }
}
