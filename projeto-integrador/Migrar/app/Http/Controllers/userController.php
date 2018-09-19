<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class userController extends Controller
{
  public function showform(){

    return view('userUpdate');
  }

  public function updateUser(Request $request, $id){
    $this->validate($request, [
      'first_name' => 'required|string|max:50',
      'last_name' => 'required|string|max:50',
      'genero' => 'required|string|min:8|max:9',
      'cpf' => 'required|numeric',
      'username' => 'required|string|max:50',
      'email' => 'required|string|email|max:50',
      'password' => 'required|string|min:8|confirmed',
    ]);

    $user = User::find($id);

    $request['password'] = Hash::make($request['password']);

    $user->first_name = $request->input('first_name');
    $user->last_name = $request->input('last_name');
    $user->genero = $request->input('genero');
    $user->cpf = $request->input('cpf');
    $user->username = $request->input('username');
    $user->email = $request->input('email');
    $user->password = $request->input('password');


    $sucesso = $user->save();

    return view('home')->with('tudocerto', $sucesso);
  }
}
