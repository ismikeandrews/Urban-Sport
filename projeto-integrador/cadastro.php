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
    <form class="needs-validation" action="cadastro.php" method="POST" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nome</label>
            <input type="text" class="form-control" name="nome" value="">
            <div class="invalid-feedback"></div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Sobrenome</label>
            <input type="text" class="form-control" name="sobrenome" value="">
            <div class="invalid-feedback"></div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="username">Usuário</label>
            <input type="text" class="form-control" name="usuario" value="">
            <div class="invalid-feedback"></div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf" value="">
            <div class="invalid-feedback"></div>
          </div>
        </div>
        <div class="mb-3">
          <label for="email">Email</label>
            <input type="email" class="form-control" name="email">
            <div class="invalid-feedback"></div>
        </div>
        <div class="mb-3">
          <label for="inputPassword">Senha</label>
            <input type="password" class="form-control" name="senha">
            <div class="invalid-feedback"></div>
        </div>

        <div class="d-block my-3 ">
          <label for="">Genero</label>
          <div class="custom-control custom-radio">
            <input type="radio" name="genero" id="masculino"  value="Masculino" checked>
            <label for="masc">Masculino</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" name="genero" id="feminino" value="Feminino" checked>
            <label for="fem">Feminino</label>
          </div>
        </div>






        <!-- <h4 class="mb-3 mt-3">Endereço</h4>
        <hr>
        <div class="mb-3">
          <label for="address">Endereço</label>
          <input type="text" class="form-control" id="address" placeholder="Main St 1234">
          <div class="invalid-feedback">Digite um endereço valido por favor</div>
        </div>
        <div class="row mb-1">
          <div class="col-md-5 mb-3">
            <label for="country">País</label>
            <select class="custom-select d-block w-100" id="country">
              <option value>
                Escolha...
              </option>
              <option>
                Brasil
              </option>
              <option>
                Canadá
              </option>
            </select>
            <div class="invalid-feedback">Por favor selecione um País</div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Estado</label>
            <select class="custom-select d-block w-100" id="state">
              <option value>
                Escolha...
              </option>
              <option>
                São Paulo
              </option>
              <option>
                Rio De Janeiro
              </option>
            </select>
            <div class="invalid-feedback">Por favor selecione um Estado</div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">CEP</label>
            <input type="text" class="form-control" id="zip" placeholder="XXXXX-XXX">
            <div class="invalid-feedback">Zip code required</div>
          </div>
        </div>
        <h4 class="mb-3">Pagamento</h4>
        <hr>
        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input type="radio" name="paymentMethod" id="credit" class="custom-control-input" checked>
            <label for="credit" class="custom-control-label">Cartão de Credito</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" name="paymentMethod" id="debit" class="custom-control-input" checked>
            <label for="debit" class="custom-control-label">Cartão de Debito</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" name="paymentMethod" id="paypal" class="custom-control-input" checked>
            <label for="paypal" class="custom-control-label">Paypal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Nome no Cartão</label>
            <input type="text" class="form-control" id="cc-name" placeholder>
            <small>Digite seu nome conforme escrito no cartão</small>
            <div class="invalid-feedback">Nome do cartão é necessario</div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Numero do Cartão de Credito</label>
            <input type="text" class="form-control" id="cc-number" placeholder>
            <div class="invalid-feedback">Numero do cartão é necessario</div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Validade</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="MM/YY">
            <div class="invalid-feedback">Validade do cartão é necessario</div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder>
            <div class="invalid-feedback">Codigo de segurança é necessario</div>
          </div>
        </div>
        <hr> -->
        <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
        </div>
      </form>
  </div>
</section>

<?php
 include_once 'footer.php'
?>
