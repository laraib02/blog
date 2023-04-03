<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function screate(){
    return view('backend.pages.student-create');
}
function slist(){
    return view('backend.pages.student-list');
}
}
