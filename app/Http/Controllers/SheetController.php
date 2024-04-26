<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SheetController extends Controller
{
    public function start(){
        return view('site.portifolio.system.start');
    }
    
    public function indexclient(){
        return view('site.projects.indexclient');
    }
}
