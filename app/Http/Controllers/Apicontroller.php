<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classDiagram;
use App\Http\Controllers\Apicontroller;

class Apicontroller extends Controller
{
    //
    public function AddStudent(Request $request)
    {
        $students= new classDiagram();
       
        $students->StudFname = $request->input('StudFname');
        $students->StudMname = $request->input('StudMname');
        $students->StudLname = $request->input('StudLname');
        $students->Email = $request->input('Email');
        $students->CGPA = $request->input('CGPA');
        $students->EduStartYear = $request->input('EduStartYear');
        $students->EduFinishYear = $request->input('EduFinishYear');
        $students->StuProfObj = $request->input('StuProfObj');
        $students->save();
        return response()->json($students);
    }
    public function UpdateStudent(Request $request)
    {
        $students = classDiagram:: find($request->id);
        $students->StudFname = $request->input('StudFname');
        $students->StudMname = $request->input('StudMname');
        $students->StudLname = $request->input('StudLname');
        $students->Email = $request->input('Email');
        $students->CGPA = $request->input('CGPA');
        $students->EduStartYear = $request->input('EduStartYear');
        $students->EduFinishYear = $request->input('EduFinishYear');
        $students->StuProfObj = $request->input('StuProfObj');
        $students->save();
        return "post update successfully";
    }
    public function delete($id){
        classDiagram::where('id',$id)->delete();
         return "deleted";
    }
    public function getByID($id)
    {
        $students = classDiagram::where('id',$id)->first();
        return $students;
    }

}
