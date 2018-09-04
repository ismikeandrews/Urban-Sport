@extends('layouts.app')

@section('content')
<?php $page = 'nada'; ?>
<section id="singup">
  <div class="container">
    <div class="py-5 text-center">
      <img src="{{ asset('img/logo.png') }}" width="100" alt="logo">
      <h2 class="mt-1">Cadastre-se</h2>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-8 order-md 1">
        <h4 class="mb-3">Dados</h4>
        <hr>
        <form action="{{ route('register') }}" aria-label="{{ __('Register') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="row">

            <div class="col-md-6 mb-3">
              <label for="first_name">Nome</label>
              <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}">
              @if ($errors->has('first_name'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('first_name') }}</strong>
              </span>
              @endif
            </div>


            <div class="col-md-6 mb-3">
              <label for="last_name">Sobrenome</label>
              <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}">
              @if ($errors->has('last_name'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('last_name') }}</strong>
              </span>
              @endif
            </div>

            <div class="col-md-6 mb-3">
              <label for="username">Username</label>
              <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}">
              @if ($errors->has('username'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('username') }}</strong>
              </span>
              @endif
            </div>

            <div class="col-md-6 mb-3">
              <label for="cpf">CPF</label>
              <input id="cpf" type="text" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}">
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
              <option value="">Selecione</option>
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
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
          </div>


          <div class="mb-3">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

            @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
          </div>

          <div class="mb-3">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection
