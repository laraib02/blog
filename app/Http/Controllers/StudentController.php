<?php

namespace App\Http\Controllers;

use App\Course;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    function screate()
    {
        $courses=Course::all();
        return view('backend.pages.student.student-create',compact('courses'));
    }

    function slist()
    {
        $students = Student::all();
        return view('backend.pages.student.student-list', compact('students'));
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
            'phone' => 'required',
            'course_id' =>'required'
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
            'phone_num' => $request->phone,
            'course_id' => $request->course_id
        ]);

        return redirect()->to(url('students-create'));
    }

    function trash($id)
    {
        $data = Student::where('id', $id)->first();
        if ($data)
            $data->delete();
        return redirect()->to(url('students-list'));
    }
    function edit($id){
        $data = Student::where('id', $id)->first();
        $courses=Course::all();
        return view('backend.pages.student.student-edit',compact('data', 'courses'));
    }
    function update(Request $request,$id){
        $data = Student::where('id', $id)->first();
        $upd=$data->update([
            'name' => $request->name,
            'fname' => $request->fname,
            'intermediate_grade' => $request->grade,
            'session' => $request->class_session,
            'department' => $request->department,
            'phone_num' => $request->phone,
            'course_id' => $request->course_id
        ]);
        if($upd){
            return redirect()->to(url('students-list'));
        }
    }
}

