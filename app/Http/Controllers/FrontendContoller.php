<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendContoller extends Controller
{
    //
    public function flyeast(){
        return view("frontend.flyeast.index");
        
    }
    public function scholarship(){
    return view('frontend.scholorship.index');
    }
        // public function layout(){
        // return view("frontend.layout.header");
        // }
        
    

        public function blogs(){
        return view("frontend.blogs.index");
        
    }
        public function success_story(){
        return view("frontend.layout.success-rate");
        
    }
 }