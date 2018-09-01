<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Esporte;
use App\Categoria;
use App\Marca;

class Paginas extends Controller
{
    public function index(){
      $produtos = Produto::take(16)->inRandomOrder()->get();

      return view('index')->with('produtos', $produtos);
    }

    public function produto($id){
      $produto = Produto::find($id);

      return view('PaginaProduto')->with('produto', $produto);
    }

    //Funções da pagina de marcas
    public function marca(){
      $marcas = Marca::all();
      $produtos = Produto::all();

      return view('PaginaMarca')->with('marcas', $marcas)->with('produtos', $produtos);
    }

    public function orderMarca($id){
    	$produtos = Produto::where('id_marca', $id)->get();
      $marcas = Marca::all();

    	return view('PaginaMarca')->with('marcas', $marcas)->with('produtos', $produtos);
    }

    //Funções da pagina de categorias
    public function categoria(){
      $categorias = Categoria::all();
      $produtos = Produto::all();

      return view('PaginaCategoria')->with('categorias', $categorias)->with('produtos', $produtos);
    }

    public function orderCategoria($id){
    	$produtos = Produto::where('id_categoria', $id)->get();
      $categorias = Categoria::all();

    	return view('PaginaCategoria')->with('categorias', $categorias)->with('produtos', $produtos);
    }


    //Funções da pagina de esportes
    public function esporte(){
      $esportes = Esporte::all();
      $produtos = Produto::all();

      return view('PaginaEsporte')->with('esportes', $esportes)->with('produtos', $produtos);
    }

    public function orderEsporte($id){
    	$produtos = Produto::where('id_esporte', $id)->get();
      $esportes = Esporte::all();

    	return view('PaginaEsporte')->with('esportes', $esportes)->with('produtos', $produtos);
    }

}
