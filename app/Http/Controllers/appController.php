<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appController extends Controller
{
    
    public function painel(){
        return view('calendario');
    }
}
