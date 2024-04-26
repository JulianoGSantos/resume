<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function indexquestion(){
        return view('site.projects.indexquestion');
    }

    public function storequestion(){
        return view('site.projects.storequestion');
    }
}
