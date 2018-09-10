<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Promo;
use App\User;
use App\Newsletter;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.admin');
    }

    //Funções da pagina cliente
    public function paginaClientes(){
      $usuarios = User::paginate(10);

      return view('dashboard.admClientes')->with('usuarios', $usuarios);
    }

    public function paginaNews(){
      $news = Newsletter::paginate(10);

      return view('dashboard.admNewsletter')->with('news', $news);
    }

    public function paginaCadastoUrs(){

      return view('dashboard.addCliente');
    }

    public function bannerUpdate(Request $request){
      $this->validate($request, ['foto' => 'required']);

      $arquivo1 = $request->file('foto');

      $caminhoDafoto = public_path()."/imgbanner/";

      $nomeDoarquivo = $arquivo->getClientOriginalName();

      //mover
      $arquivo->move($caminhoDafoto, $nomeDoarquivo);

      $arquivo2 = $request->file('foto');

      $caminhoDafoto = public_path()."/imgbanner/";

      $nomeDoarquivo = $arquivo->getClientOriginalName();

      //mover
      $arquivo->move($caminhoDafoto, $nomeDoarquivo);

      $arquivo3 = $request->file('foto');

      $caminhoDafoto = public_path()."/imgbanner/";

      $nomeDoarquivo = $arquivo->getClientOriginalName();

      //mover
      $arquivo->move($caminhoDafoto, $nomeDoarquivo);

      $arquivo4 = $request->file('foto');

      $caminhoDafoto = public_path()."/imgbanner/";

      $nomeDoarquivo = $arquivo->getClientOriginalName();

      //mover
      $arquivo->move($caminhoDafoto, $nomeDoarquivo);

      $arquivo5 = $request->file('foto');

      $caminhoDafoto = public_path()."/imgbanner/";

      $nomeDoarquivo = $arquivo->getClientOriginalName();

      //mover
      $arquivo->move($caminhoDafoto, $nomeDoarquivo);


      $atualizar = Produto::find($request);

      $atualizar->foto = "/imgbanner/".$nomeDoarquivo;
    }


}
