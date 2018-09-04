<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
  public function __construct(){
    $this->middleware('guest:admin');
  }

  public function showLoginForm(){
    return view('auth.admin-login');
  }

  public function login(Request $request){
    //validar o formulario
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required|min:6'
    ]);
    //tentar fazer o login
    if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
      //se conseguir redirecionar para o local requerido
      return redirect()->intended(route('admin.dashboard'));
    }
    //se não conseguir redirecionar para a pagina login
    return redirect()->back()->withInput($request->only('email', 'remember'));
  }
}
