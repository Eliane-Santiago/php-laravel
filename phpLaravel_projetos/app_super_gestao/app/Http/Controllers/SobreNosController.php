<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    //FUNÇÃO PRINCIPAL
    function sobrenos(){
        return view('site.sobre-nos', ['titulo' => 'Sobre Nós']);
    }
}
