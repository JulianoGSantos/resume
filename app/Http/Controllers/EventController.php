<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function searchevent(){
        return view('site.portifolio.system.searchevent');
    }
}
