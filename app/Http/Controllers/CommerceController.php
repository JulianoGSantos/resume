<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommerceController extends Controller
{
    public function indexcommerce(){
        return view('site.portifolio.commerce.home');
    }
}
