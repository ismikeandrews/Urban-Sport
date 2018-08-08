<?php
  include_once 'head.php';
  include_once 'header.php';
?>

<section class="text-center" id="margin">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-6">
        <img src="imagens/logo.png" width="100" alt="logo">
        <h2 class="h3 mb-3 font-weight-normal mt-4">Entrar</h2>
        <form class="form-signin">
          <label for="username">Username</label>
          <input type="username" class="form-control" required autofocus>
          <label for="inputPassword">Senha</label>
          <input type="password" id="inputPassword" class="form-control" required>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me">
              Lembrar-me
            </label>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
        <a href="#">Cadastro</a>
    </div>
  </div>
</section>

<?php
  include_once 'footer.php';
?>
