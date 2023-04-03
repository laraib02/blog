<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    function home(){
        return view ('frontend.pages.home');
    }
function services(){
    return view ('frontend.pages.services');
}
function cases(){
    return view ('frontend.pages.caeses');
}
    function about(){
        return view ('frontend.pages.about');
    }
    function pricing(){
        return view ('frontend.pages.pricing');
    }
    function team(){
        return view ('frontend.pages.team');
    }
    function faq(){
        return view ('frontend.pages.faq');
    }
    function error(){
        return view ('frontend.pages.404');
    }
    function blog(){
        return view ('frontend.pages.blog');
    }
    function singleblog(){
        return view ('frontend.pages.singleblog');
    }
    function contact(){
        return view ('frontend.pages.contact');
    }

}
