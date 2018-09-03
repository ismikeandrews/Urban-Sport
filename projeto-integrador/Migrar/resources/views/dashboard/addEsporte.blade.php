@extends('layouts.dashNav')

@section('content')
<?php $page = '/admin/esporte'; ?>
<div class="container-fluid">
  <div class="row">
    @include('dashboard.sideNav')
    <div class="col-md-9 ml-sm-auto col-lg-10 px-4 py-5">
      @if(isset($tudocerto) && $tudocerto)
      <div class="alert alert-success" role="alert">
        Esporte adicionado com sucesso
      </div>
      @endif
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Esportes</h1>
      </div>
      <div class="col-md-12 d-flex justify-content-end mb-3">
        @include('dashboard.mainNav')
      </div>
      <hr>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h4>Adicionar Esporte</h4>
      </div>
      <form action="/admin/esporte/adicionar" method="POST">
        {{ csrf_field() }}
        <div class="form">
          <div class="form-group col-md-12">
            <label for="name">Nome</label>
            <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" value="{{ old('name') }}" name="name">
            @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
            <div class="d-flex justify-content-end mt-2">
              <input type="submit" value="Enviar" name="submit" class="btn btn-success shadow"/>
            </div>
          </div>
        </div>
      </form>

      <div class="table-responsive mt-5">
        <table class="table table-striped table-sm">
          <thead class="thead-dark">
            <tr>
              <th>#</th>
              <th>Nome</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($esportes as $esporte)
            <tr style="height:50px;">
              <td>{{ $esporte->id }}</td>
              <td>{{ $esporte->name }}</td>
              <td><a href="/admin/esporte/delete/{{$esporte->id}}" class="badge badge-danger">Remover</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="mt-1 d-flex justify-content-center">
          {{ $esportes->links() }}
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
