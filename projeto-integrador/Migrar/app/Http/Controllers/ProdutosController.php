<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CupomDesconto;
use App\Produto;
use App\PedidoProduto;
use App\Pedido;

class ProdutosController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }

  public function carrinho () {
    return view('Carrinho');
  }

  public function pedido (Request $request, $id) {
    $pedido = PedidoProduto::find($id);
    return view('Carrinho')->with('pedido', $pedido);

  }


}
