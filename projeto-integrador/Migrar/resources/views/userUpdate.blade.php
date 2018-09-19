@extends('layouts.app')

@section('content')
<?php $page = '/user/update/{id}'; ?>
<section id="singup">
  <div class="container">
    <div class="py-5 text-center">
      <img src="{{ asset('img/logo.png') }}" width="100" alt="logo">
      <h2 class="mt-1">Atualizar dados</h2>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-8 order-md 1">
        <h4 class="mb-3">Dados</h4>
        <hr>
        <form action="/user/update/{{Auth::user()->id}}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="row">

            <div class="col-md-6 mb-3">
              <label for="first_name">Nome</label>
              <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ Auth::user()->first_name }}">
              @if ($errors->has('first_name'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('first_name') }}</strong>
              </span>
              @endif
            </div>


            <div class="col-md-6 mb-3">
              <label for="last_name">Sobrenome</label>
              <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ Auth::user()->last_name }}">
              @if ($errors->has('last_name'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('last_name') }}</strong>
              </span>
              @endif
            </div>

            <div class="col-md-6 mb-3">
              <label for="username">Username</label>
              <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ Auth::user()->username }}">
              @if ($errors->has('username'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('username') }}</strong>
              </span>
              @endif
            </div>

            <div class="col-md-6 mb-3">
              <label for="cpf">CPF</label>
              <input id="cpf" type="text" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ Auth::user()->cpf }}">
              @if ($errors->has('cpf'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('cpf') }}</strong>
              </span>
              @endif
            </div>

          </div>

          <div class="form-group mb-3">
            <label for="genero">Genero</label>
            <select class="form-control {{ $errors->has('genero') ? ' is-invalid' : '' }}" name="genero" value="{{ old('genero') }}" id="exampleFormControlSelect1">
              <option value="{{Auth::user()->genero}}">{{ Auth::user()->genero }}</option>
              <option value="Masculino">Masculino</option>
              <option value="Feminino">Feminino</option>
            </select>
            @if ($errors->has('genero'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('genero') }}</strong>
            </span>
            @endif
          </div>

          <div class="mb-3">
            <label for="email">E-mail</label>
            <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::user()->email }}">
            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
          </div>


          <div class="mb-3">
            <label for="password">Senha</label>
            <div class="input-group">
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} border-right-0 pwd" name="password">
              <span class="input-group-btn">
                <button class="btn btn-light border-secondary reveal" type="button"><i class="fas fa-eye" style="font-size:16px;"></i></button>
              </span>
            </div>
            @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
          </div>

          <div class="mb-3">
            <label for="password-confirm">Confirme sua senha</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
          </div>
          <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection
