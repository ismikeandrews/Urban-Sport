@extends('layouts.app')
@section('content')

<?php $page = "/pagina/sobre"; ?>
<div class="container">
  <h3 class="mt-1">The Code Strikers</h3>
  <h5>Somos o grupo The Code Strikers do curso de Full Stack da Digital House no ano de 2018, que tem como objetivo fazer um projeto integrador de E-Comerce</h5>

  <div class="row d-flex justify-content-start">
    <div class="col-md-4">
      <div class="card border-dark mt-1">
        <div class="card-header">Sprint 01<br>04/06 a 18/06</div>
        <div class="card-body text-dark">
          <h5 class="card-title">Home, FAQ, Login e cadastro</h5>
          <p class="card-text">Linguagem usada: HTML+CSS<br>
            P.O: Michael<br>
            Scrum Master: Liu<br>
            Dev: Marcelo</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-dark mt-1">
        <div class="card-header">Sprint 02<br>18/06 a 09/07</div>
        <div class="card-body text-dark">
          <h5 class="card-title">1 - Login e o cadastro funcionem; 2 - Incluir a página de produtos com categorias e marcas; 3 - Incluir Barra de busca</h5>
          <p class="card-text">Linguagem usada: PHP & HTML+CSS<br>
            P.O: Marcelo<br>
            Scrum Master: Michael<br>
            Dev: Liu<p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-dark mt-1">
        <div class="card-header">Sprint 03<br>09/07 a 23/07</div>
        <div class="card-body text-dark">
          <h5 class="card-title">1 - Entregar uma imagem do DER; 2 - Fazer o login e o cadastro funcione com PDO e MYSQL.</h5>
          <p class="card-text">Linguagem usada: SQL<br>
            P.O: Liu<br>
            Scrum Master: Marcelo<br>
            Dev: Michael<p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-dark mt-1">
        <div class="card-header">Sprint 04<br>23/07 a 06/08</div>
        <div class="card-body text-dark">
          <h5 class="card-title"> Código de Login e cadastro organizado com classes</h5>
          <p class="card-text">Linguagem usada: Laravel<br>
            P.O: Michael<br>
            Scrum Master: Liu<br>
            Dev: Marcelo<p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-dark mt-1">
        <div class="card-header">Sprint 05<br>06/08 a 20/08</div>
        <div class="card-body text-dark">
          <h5 class="card-title">Migrar para Laravel: Login e cadastro e páginas do respectivo sistema.</h5>
          <p class="card-text">Linguagem usada: Laravel<br>
            P.O: Marcelo<br>
            Scrum Master: Michael<br>
            Dev: Liu<p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-dark mt-1">
        <div class="card-header">Sprint 06<br>20/08 a 03/09</div>
        <div class="card-body text-dark">
          <h5 class="card-title">1 - Aplicar AJAX no formulário de login e cadastro; 2 - Inserir validação no login e no cadastro</h5>
          <p class="card-text">Linguagem usada: Javascript<br>
            P.O: Liu<br>
            Scrum Master: Marcelo<br>
            Dev: Michael<p>
        </div>
      </div>
    </div>        
  </div>

</div>


@endsection
