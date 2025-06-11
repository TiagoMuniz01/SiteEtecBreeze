<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPrincipal extends Controller
{
    Public function home(){
        return view('site.Home');
    }

    Public function contato(){
        return view('site.Contato');
    }
}