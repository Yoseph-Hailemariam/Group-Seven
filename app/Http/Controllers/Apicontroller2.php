<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\classDiagram2;
use App\Http\Controllers\Apicontroller2;
class Apicontroller2 extends Controller
{
    //
    public function AddStudent(Request $request)
    {
        $profile= new classDiagram2();
        $profile->StuProfileID = $request->input('StuProfileID');
        $profile->Email = $request->input('Email');
        $profile->EmailStatus = $request->input('EmailStatus');
        $profile->save();
        return response()->json($profile);
    }

}
