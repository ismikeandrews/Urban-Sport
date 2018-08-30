<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class Paginas extends Controller
{
    public function index(){
      $produtos = Produto::all();

      return view('index')->with('produtos', $produtos);
    }

    public function produto($id){
      $produto = Produto::find($id);

      return view('PaginaProduto')->with('produto', $produto);
    }

}
