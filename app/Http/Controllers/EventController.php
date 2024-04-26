<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function indexevent(){
        return view('site.projects.indexevent');
    }
}
