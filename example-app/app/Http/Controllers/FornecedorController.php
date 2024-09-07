<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1', 
                'status' => 'Ativo',
                'cnpj' => '00.000.000/0000.00',
                'telefone' => '0000-0000',
                'ddd' => '11',
            ], 
            1 => [
                'nome'=> 'Ryan', 
                'status'=> 'Inativo',
                'cnpj' => '0.0',
                'telefone' => '0000-0000',
                'ddd' => '62',
            ],
            2 => [
                'nome'=> 'Rogerio', 
                'status'=> 'Inativo',
                'cnpj' => '0.0',
                'telefone' => '0000-0000',
                'ddd' => '85',
            ]
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
