<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CupomDesconto;
use App\Produto;
use App\PedidoProduto;
use App\Pedido;
use App\Carrinho;
use Session;

class ProdutosController extends Controller
{

  public function carrinho(Request $request, $id){
    $produto = Produto::find($id);
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Carrinho($oldCart);
    $cart->add($produto, $produto->id);

    $request->session()->put('cart', $cart);
    return redirect('/');
  }

  public function showCarrinho(){
    if (!Session::has('cart')) {
      return view('Carrinho');
    }
    $oldCart = Session::get('cart');
    $cart = new Carrinho($oldCart);

    return view('Carrinho')->with('produtos', $cart->itens)->with('precoTotal', $cart->precoTotal);

  }

  public function showCheckout(){
    if (!Session::has('cart')) {
      return view('Carrinho');
    }
    $oldCart = Session::get('cart');
    $cart = new Carrinho($oldCart);
    $total = $cart->precoTotal;

    return view('checkout')->with('total', $total)->with('produtos', $cart->itens);
  }

  public function postCheckout(Request $request){
    $this->validate($request, [
      'name' => 'required',
      'valor' => 'required|numeric|max:9999.99',
      'foto' => 'required',
      'id_marca' => 'required|numeric',
      'id_categoria' => 'required|numeric',
      'id_tamanho' => 'required|numeric',
      'id_esporte' => 'required|numeric',
      'description' => 'required'
    ]);

    if (!Session::has('cart')) {
      return view('Carrinho');
    }
    $oldCart = Session::get('cart');
    $cart = new Carrinho($oldCart);


  }

}
