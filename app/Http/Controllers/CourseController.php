<?php

namespace App\Http\Controllers;
use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    function ccreate(){
        return view('backend.pages.course.course-create');
    }
    function clist(){
        $courses= Course::all();
        return view('backend.pages.course.course-list', compact('courses'));
    }
    function cstore(request $request){
        $request->validate([
            'name' => 'required'
        ]);

        Course::Create([
        'name'=> $request->name
        ]);

        return redirect()->to(url('course-create'));
    }
    function trash($id){
        $data = Course::where('id' , $id)->first();
        if($data)
            $data->delete();
        return redirect()->to(url('course-list'));
    }
    function edit($id){
        $data = Course::where('id' , $id)->first();
        return view('backend.pages.course.course-edit', compact('data'));
    }
    function update(Request $request,$id){
        $data = Course::where('id' , $id)->first();
        $update=$data->update([
            'name'=> $request->name
        ]);
        if($update)
            return redirect()->to(url('course-list'));
    }
}
