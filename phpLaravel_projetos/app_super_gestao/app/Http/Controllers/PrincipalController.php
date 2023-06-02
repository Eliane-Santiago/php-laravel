<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //FUNÇÃO PRINCIPAL
    function principal(){
        return view('site.principal', ['titulo' => 'Home']);
    }
}
