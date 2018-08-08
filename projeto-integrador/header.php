<?php

require "classes/Login.php";

if ($_POST) {
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
  $lembrarUsuario = $_POST['lembrar_usuario'];

  $login = new Login($usuario, $senha);

  $login->logar();

  header("Location: index.php");
}

session_start();
if (isset($_SESSION["nome"])){
  $nomeSession = $_SESSION["nome"];
}
if (isset($lembrarUsuario)) {
  setcookie("nome_usuario", $usuario);
}
?>

<header>
  <div class="area-preta">
    <div class="container">
      <div class="d-flex justify-content-end">

        <?php if (isset($nomeSession)) {
          echo "<span class='badge badge-success mr-1'>Bem vindo $nomeSession</span> " ;
        }

        if (isset($_COOKIE["nome_usuario"])){
            $_COOKIE["nome_usuario"];
        };

        if (!isset($nomeSession)){
          echo '<a class="dropdown-toggle badge text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Entrar
          </a>
          <div class="dropdown-menu">
            <form class="px-4 py-3" method="post" action="header.php">
              <div class="form-group">
                <label for="exampleDropdownFormEmail1">Usuário</label>
                <input type="text" name="usuario" class="form-control" value="'.$_COOKIE["nome_usuario"].'" placeholder="Nome de usuário">
              </div>
              <div class="form-group">
                <label for="exampleDropdownFormPassword1">Senha</label>
                <input type="password" name="senha" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" required>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="dropdownCheck" name="lembrar_usuario" value="lembrar_usuario">
                <label class="form-check-label" for="dropdownCheck">
                  Lembrar-me
                </label>
              </div>
              <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Esqueceu sua senha ?</a>
          </div>
          <a href="cadastro.php" class="badge text-white">Cadastro</a>';
        }

        if (isset($nomeSession)){
          echo '<a href="index.php?sair=1" class="badge text-white">Sair</a>';
        }
        ?>
      </div>
    </div>
  </div>

  <div class="container navbar navbar-expand-lg d-flex bd-highlight" id="image">
    <a class="navbar-brand" href="index.php">
      <img src="imagens/logo.png" width="100" alt="logo">
    </a>
    <div class="mr-auto ml-auto">
      <form class="form-inline my-2 my-lg-0">
        <div class="input-group search-bar">
          <input class="form-control border-right-0 border-secondary" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-light border-secondary my-2 my-sm-0" type="submit"><i class="fa fa-search" style="font-size:18px"></i></button>
          </div>
        </div>
      </form>
    </div>
    <div class="btn-group">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-shopping-cart" style="font-size:18px;color:white"></i>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
  </div>
  <hr>
</header>
