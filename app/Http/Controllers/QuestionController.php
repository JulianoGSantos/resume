<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function indexquestion(){
        return view('site.portifolio.question.home');
    }

    public function storequestion(){
        return view('site.portifolio.question.store');
    }
}
