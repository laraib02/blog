<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backendcontroller extends Controller
{
    function index(){
        return view('backend.pages.index');
    }
}
