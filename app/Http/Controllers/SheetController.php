<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SheetController extends Controller
{
    public function start(){
        return view('site.portifolio.system.start');
    }
    
    public function indexclient(){
        return view('site.portifolio.system.indexclient');
    }

    public function searchclient(){
        return view('site.portifolio.system.searchclient');
    }
}
