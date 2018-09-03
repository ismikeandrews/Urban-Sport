<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Esporte;
use App\Categoria;
use App\Marca;
use App\Newsletter;

class PaginasController extends Controller
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
      $produtos = Produto::paginate(6);

      return view('PaginaMarca')->with('marcas', $marcas)->with('produtos', $produtos);
    }

    public function orderMarca($id){
    	$produtos = Produto::where('id_marca', $id)->paginate(6);
      $marcas = Marca::all();

    	return view('PaginaMarca')->with('marcas', $marcas)->with('produtos', $produtos);
    }

    //Funções da pagina de categorias
    public function categoria(){
      $categorias = Categoria::all();
      $produtos = Produto::paginate(6);

      return view('PaginaCategoria')->with('categorias', $categorias)->with('produtos', $produtos);
    }

    public function orderCategoria($id){
    	$produtos = Produto::where('id_categoria', $id)->paginate(6);
      $categorias = Categoria::all();

    	return view('PaginaCategoria')->with('categorias', $categorias)->with('produtos', $produtos);
    }


    //Funções da pagina de esportes
    public function esporte(){
      $esportes = Esporte::all();
      $produtos = Produto::paginate(6);

      return view('PaginaEsporte')->with('esportes', $esportes)->with('produtos', $produtos);
    }

    public function orderEsporte($id){
    	$produtos = Produto::where('id_esporte', $id)->paginate(6);
      $esportes = Esporte::all();

    	return view('PaginaEsporte')->with('esportes', $esportes)->with('produtos', $produtos);
    }
    //Newsletter footer
    public function newsletter(Request $request){
      $this->validate($request, ['email' => 'required|string|email|max:50|unique:newsletter']);
      $news = Newsletter::create(['email' => $request->input('email')]);

      $sucesso = $news->save();
      $produtos = Produto::take(16)->inRandomOrder()->get();

      return view('index')->with('tudocerto', $sucesso)->with('produtos', $produtos);

    }
}
