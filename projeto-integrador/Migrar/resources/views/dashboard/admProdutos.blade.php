@extends('layouts.dashNav')

@section('content')
<?php $page = '/admin/produtos'; ?>
<div class="container-fluid">
  <div class="row">
    @include('dashboard.sideNav')
    <main role="main" class="col-md-12 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos Cadastrados</h1>
      </div>
      <div class="col-md-12 d-flex justify-content-end mb-3">
        @include('dashboard.mainNav')
      </div>
      <hr>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead class="thead-dark">
            <tr>
              <th>#</th>
              <th>Nome</th>
              <th>Foto</th>
              <th>Valor</th>
              <th>Descrição</th>
              <th>Marca</th>
              <th>Categoria</th>
              <th>Esporte</th>
              <th>Editar</th>
              <th>Deletar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($produtos as $produto)
            <tr style="height:50px;">
              <td>{{ $produto->id }}</td>
              <td class="table-info">{{ $produto->name }}</td>
              <td>{{ $produto->foto }}</td>
              <td class="table-success">{{ $produto->valor }}</td>
              <td>{{ $produto->description }}</td>
              <td class="table-warning">{{ $produto->marca->name }}</td>
              <td>{{ $produto->categoria->name }}</td>
              <td>{{ $produto->esporte->name }}</td>
              <td><a href="/admin/produto/edit/{{ $produto->id }}" class="badge badge-secondary"><i class="fas fa-pencil-alt" style="font-size:20px;"></i></a></td>
              <td><a href="/admin/produto/delete/{{$produto->id}}" class="badge badge-danger"><i class="far fa-trash-alt" style="font-size:20px;"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="mt-1 d-flex justify-content-center">
          {{ $produtos->links() }}
        </div>
      </div>
    </main>
  </div>
</div>
@endsection
