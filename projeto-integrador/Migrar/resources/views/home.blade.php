@extends('layouts.app')

@section('content')
<?php $page = '/home'; ?>
<div class="container">
  <div class="row d-flex justify-content-around">

    <div class="col-md-3 col-sm-12 shadow">
      <div class="py-4 text-center">
        <div class="row">
          <div class="py-4 col-12">
            <img src="{{ asset('img/profile.png') }}" class="rounded-circle" width="100" alt="logo">
          </div>
          <div class="col-12">
            <h5>{{ Auth::user()->first_name." ".Auth::user()->last_name }}</h5>
          </div>
          <div class="col-12">
            <a href="/user/update/{{Auth::user()->id}}">Atualizar Informações</a>
          </div>
          <div class="col-12">
            <a href="#">Pagamentos</a>
          </div>
        </div>
      </div>
      <h4>Notificações</h4>
      <hr>
      <div class="mb-1 col-sm-12 col-md-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
      <div class="mb-1 col-sm-12 col-md-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
      <h4>Mensagens</h4>
      <hr>
      <div class="mb-1 col-sm-12 col-md-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
      <div class="mb-1 col-sm-12 col-md-12">
        <div class="card">
          <div class="card-body col-md-12">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-8 shadow">
      <h4 class="mt-1">Status do envio</h4>
      <hr>
      <div class="mt-1 col-md-12 card">
        <div class="card-body">
          <h5 class="card-title">Nome do produto</h5>
          <div class="progress progress-striped">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
          </div>
        </div>
      </div>
      <div class="mt-1 col-md-12 card">
        <div class="card-body">
          <h5 class="card-title">Nome do produto</h5>
          <div class="progress progress-striped">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
          </div>
        </div>
      </div>
      <div class="mt-1 col-md-12 card">
        <div class="card-body">
          <h5 class="card-title">Nome do produto</h5>
          <div class="progress progress-striped">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
          </div>
        </div>
      </div>
      <div class="mt-1 col-md-12 card">
        <div class="card-body">
          <h5 class="card-title">Nome do produto</h5>
          <div class="progress progress-striped">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
          </div>
        </div>
      </div>
      <h4 class="mt-1">Concluidos</h4>
      <hr>
      <div class="mt-1 mb-1 col-md-12 card">
        <div class="card-body">
          <h5 class="card-title">Nome do produto</h5>
          <div class="progress progress-striped">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
          </div>
        </div>
        <div class="card-footer bg-transparent">
          <h5 class="card-text pt-3">Seu produto foi entregue ?</h5>
          <a href="#" class="btn btn-success mr-1">Sim</a>
          <a href="#" class="btn btn-danger">Não</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
