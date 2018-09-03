<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Esporte;
use App\Categoria;
use App\Marca;
use App\Tamanho;

class AdmProdutoController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:admin');
  }

  public function paginaProdutos(){
    $produtos = Produto::paginate(10);

    return view('dashboard.admProdutos')->with('produtos', $produtos);
  }

  public function produtoForm(){
    $categorias = Categoria::all();
    $marcas = Marca::all();
    $esportes = Esporte::all();
    $tamanhos = Tamanho::all();

    return view('dashboard.addProduto')
    ->with('categorias', $categorias)
    ->with('marcas', $marcas)
    ->with('tamanhos', $tamanhos)
    ->with('esportes', $esportes);
  }

  public function produtoAdd(Request $request){
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

    $produto = Produto::create([
      'name' => $request->input('name'),
      'valor' => $request->input('valor'),
      'foto' => $request->input('foto'),
      'id_marca' => $request->input('id_marca'),
      'id_categoria' => $request->input('id_categoria'),
      'id_tamanho' => $request->input('id_tamanho'),
      'id_esporte' => $request->input('id_esporte'),
      'description' => $request->input('description')
    ]);

    $sucesso = $produto->save();
    $categorias = Categoria::all();
    $marcas = Marca::all();
    $esportes = Esporte::all();
    $tamanhos = Tamanho::all();

    return view('dashboard.addProduto')
      ->with('tudocerto', $sucesso)
      ->with('categorias', $categorias)
      ->with('marcas', $marcas)
      ->with('tamanhos', $tamanhos)
      ->with('esportes', $esportes);
  }
  public function produtoDelete($id){
    $apagar = Produto::find($id);

    $apagar->delete();

    return redirect('/admin/produtos');
  }

  public function produtoEditForm($id){
    $produto = Produto::find($id);
    $categorias = Categoria::all();
    $marcas = Marca::all();
    $esportes = Esporte::all();
    $tamanhos = Tamanho::all();

    return view('dashboard.updateProduto')
    ->with('produto', $produto)
    ->with('categorias', $categorias)
    ->with('marcas', $marcas)
    ->with('tamanhos', $tamanhos)
    ->with('esportes', $esportes);
  }

  public function produtoEdit(Request $request, $id){
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

    $categorias = Categoria::all();
    $marcas = Marca::all();
    $esportes = Esporte::all();
    $tamanhos = Tamanho::all();
    $produto = Produto::find($id);

    $produto->name = $request->input('name');
    $produto->valor = $request->input('valor');
    $produto->foto = $request->input('foto');
    $produto->id_marca = $request->input('id_marca');
    $produto->id_categoria = $request->input('id_categoria');
    $produto->id_tamanho = $request->input('id_tamanho');
    $produto->id_esporte = $request->input('id_esporte');
    $produto->description = $request->input('description');

    $sucesso = $produto->save();

    return view('dashboard.updateProduto')
    ->with('filme', $produto)
    ->with('tudocerto', $sucesso)
    ->with('categorias', $categorias)
    ->with('marcas', $marcas)
    ->with('tamanhos', $tamanhos)
    ->with('esportes', $esportes);
  }

  //Marcas
  public function marcaFormList(){
    $marcas = Marca::paginate(10);

    return view('dashboard.addMarca')->with('marcas', $marcas);
  }

  public function marcaAdd(Request $request){
    $this->validate($request, [
      'name' => 'required'
    ]);
    $marca = Marca::create([
      'name' => $request->input('name')
    ]);
    $sucesso = $marca->save();
    $marcas = Marca::paginate(10);

    return view('dashboard.addMarca')->with('tudocerto', $sucesso)->with('marcas', $marcas);
  }

  public function marcaDelete($id){
    $apagar = Marca::find($id);

    $apagar->delete();

    return redirect('/admin/marca');
  }
  //Categoria
  public function categoriaFormList(){
    $categorias = Categoria::paginate(10);

    return view('dashboard.addCategoria')->with('categorias', $categorias);
  }

  public function categoriaAdd(Request $request){
    $this->validate($request, [
      'name' => 'required'
    ]);
    $categoria = Categoria::create([
      'name' => $request->input('name')
    ]);
    $sucesso = $categoria->save();
    $categorias = Categoria::paginate(10);

    return view('dashboard.addCategoria')->with('tudocerto', $sucesso)->with('categorias', $categorias);
  }

  public function categoriaDelete($id){
    $apagar = Categoria::find($id);

    $apagar->delete();

    return redirect('/admin/categoria');
  }

  //Esporte
  public function esporteFormList(){
    $esportes = Esporte::paginate(10);

    return view('dashboard.addEsporte')->with('esportes', $esportes);
  }

  public function esporteAdd(Request $request){
    $this->validate($request, [
      'name' => 'required'
    ]);
    $esporte = Esporte::create([
      'name' => $request->input('name')
    ]);
    $sucesso = $esporte->save();
    $esportes = Esporte::paginate(10);

    return view('dashboard.addEsporte')->with('tudocerto', $sucesso)->with('esportes', $esportes);
  }

  public function esporteDelete($id){
    $apagar = Esporte::find($id);

    $apagar->delete();

    return redirect('/admin/esporte');
  }

  //Tamanho
  public function tamanhoFormList(){
    $tamanhos = Tamanho::paginate(10);
    $categorias = Categoria::all();


    return view('dashboard.addTamanho')->with('tamanhos', $tamanhos)->with('categorias', $categorias);
  }

  public function tamanhoAdd(Request $request){
    $this->validate($request, [
      'name' => 'required',
      'id_categoria' => 'required|numeric'
    ]);
    $tamanho = Tamanho::create([
      'name' => $request->input('name'),
      'id_categoria' => $request->input('id_categoria'),
    ]);

    $sucesso = $tamanho->save();
    $tamanhos = Tamanho::paginate(10);
    $categorias = Categoria::all();

    return view('dashboard.addTamanho')->with('tudocerto', $sucesso)->with('tamanhos', $tamanhos)->with('categorias', $categorias);
  }

  public function tamanhoDelete($id){
    $apagar = Tamanho::find($id);

    $apagar->delete();

    return redirect('/admin/tamanho');
  }
}
