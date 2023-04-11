<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    function screate()
    {
        return view('backend.pages.student-create');
    }

    function slist()
    {
        return view('backend.pages.student-list');
    }

    function store(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'name' => 'required',
            'fname' => 'required',
            'grade' => 'required',
            'class_session' => 'required',
            'department' => 'required',
            'phone' => 'required'
        ]);
// direct with table
//        DB::table('students')->insert([
//            'name' => $request->name,
//            'fname' => $request->fname,
//            'intermediate_grade' => $request->grade,
//            'session' => $request->class_session,
//            'department' => $request->department,
//            'phone_num' => $request->phone
//        ]);

// with model
        Student::create([
            'name' => $request->name,
            'fname' => $request->fname,
            'intermediate_grade' => $request->grade,
            'session' => $request->class_session,
            'department' => $request->department,
            'phone_num' => $request->phone
        ]);




            return redirect()->to(url('students-create'));


    }


}
