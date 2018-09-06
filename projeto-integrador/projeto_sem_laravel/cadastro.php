<?php
include_once 'head.php';
include_once 'header.php';

require "classes/Cadastro.php";

if ($_POST) {
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $usuario = $_POST['usuario'];
  $cpf = $_POST['cpf'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $genero = $_POST['genero'];

  $cadastro = new Cadastro ($nome, $sobrenome, $usuario, $cpf, $email, $senha, $genero);

  $cadastrado = $cadastro->cadastrar();

}


?>

<section id="singup">
  <div class="py-5 text-center">
    <h2>Cadastre-se</h2>
  </div>
  <div class="row d-flex justify-content-center">
    <div class="col-md-8 order-md 1">
      <h4 class="mb-3">Dados</h4>
      <hr>
      <form action="{{ route('register') }}" aria-label="{{ __('Register') }}" method="POST">
        @csrf

        <div class="row">

          <div class="col-md-6 mb-3">
            <label for="first_name">Nome</label>
            <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>
            @if ($errors->has('first_name'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('first_name') }}</strong>
            </span>
            @endif
          </div>


          <div class="col-md-6 mb-3">
            <label for="last_name">Sobrenome</label>
            <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>
            @if ($errors->has('last_name'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('last_name') }}</strong>
            </span>
            @endif
          </div>

          <div class="col-md-6 mb-3">
            <label for="username">Username</label>
            <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
            @if ($errors->has('username'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('username') }}</strong>
            </span>
            @endif
          </div>

          <div class="col-md-6 mb-3">
            <label for="cpf">CPF</label>
            <input id="cpf" type="text" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}" required autofocus>
            @if ($errors->has('cpf'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('cpf') }}</strong>
            </span>
            @endif
          </div>

        </div>

        <div class="col-md-6 mb-3">
          <label for="email">{{ __('E-Mail Address') }}</label>
          <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
          @if ($errors->has('email'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
          @endif
        </div>


        <div class="mb-3">
          <label for="password">{{ __('Password') }}</label>
          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

          @if ($errors->has('password'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
          @endif
        </div>

        <div class="mb-3">
          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
        <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
      </div>
    </form>
  </div>
</section>

<?php
include_once 'footer.php'
?>
