<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index (){
        return view('frontend.home');
    }

    public function portfolio (){
        return view('frontend.portfolio');
    }
    public function resume (){
        return view('frontend.resume');
    }
    public function about (){
        return view('frontend.about');
    }
    public function contact (){
        return view('frontend.contact');
    }
    public function contactForm(Request $request){
        //return $request;
        return view('frontend.contact', ['data' => $request]);
    }
}
