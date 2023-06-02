<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    //FUNÇÃO PRINCIPAL
    function index(){

        $fornecedores = [
            0 => [  
                'nome'=>'Fornecedor 1', 
                'status'=>'N',
                'cnpj'=> '17.421.289/0001-15',
                'ddd' => '85', //Fortaleza(CE)
                'telefone' => '99956-5894'
            ],
            1 => [  
                'nome'=>'Fornecedor 2', 
                'status'=>'S',
                'cnpj'=> null,
                'ddd' => '11', //São Paulo(SP)
                'telefone' => '98956-5800'
            ],
            2 => [  
                'nome'=>'Fornecedor 3', 
                'status'=>'S',
                'ddd' => '32', //Juiz de Fora(MG)
                'telefone' => '98899-5803'
            ],
            3 => [  
                'nome'=>'Fornecedor 4', 
                'status'=>'S',
                'ddd' => null, 
                'telefone' => null
            ]
        ];

        //TESTANDO O @FORELSE
       //$fornecedores = [];

        return view('app.fornecedor.index', compact('fornecedores'));

    }
}
