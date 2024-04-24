<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index(){
        return view('site.index');
    }
    public function portifolio(){
        return view('site.portifolio');
    }
    public function sobre(){
        return view('site.about');
    }
    public function contato(){
        return view('site.contact');
    }
    public function meucaminho(){
        return view('site.myway');
    }
}
