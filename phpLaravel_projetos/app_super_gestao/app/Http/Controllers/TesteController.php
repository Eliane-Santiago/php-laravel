<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    //Função Principal
	public function teste(int $p1, int $p2){

	    //return view('site.teste', ['p1'=>$p1, 'p2'=>$p2]); //Array Associativo - Passando parametro da Controller para a View via Array Associativo
		//return view('site.teste', Compact('p1', 'p2')); //Método Compact() - Passando parametro da Controller para a View via Método Compact()
        return view('site.teste')->with('x', $p1)->with('y', $p2); //Método Width() - Passando parametro da Controller para a View via Método Width()
	
	}
}