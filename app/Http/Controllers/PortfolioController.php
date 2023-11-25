<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //home view
    public function index(){
        return view('home');
    }
    //about view
    public function about(){
        return view('about');
    }
    // projects view
    public function projects(){
        return view('projects');
    }
    // contact view
    public function contact(){
        return view('contact');
    }
    
}
