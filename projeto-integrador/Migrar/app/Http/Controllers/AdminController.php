<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
