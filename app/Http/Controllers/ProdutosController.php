<?php

namespace App\Http\Controllers;

use App\Produto;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();

        return view('produtos', ['produtos' => $produtos]);
    }
}
