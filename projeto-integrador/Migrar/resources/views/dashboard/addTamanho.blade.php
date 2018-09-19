@extends('layouts.dashNav')

@section('content')
<?php $page = '/admin/tamanho'; ?>
<div class="container-fluid">
  <div class="row">
    @include('dashboard.sideNav')
    <div class="col-md-9 ml-sm-auto col-lg-10 px-4 py-5">
      @if(isset($tudocerto) && $tudocerto)
      <div class="alert alert-success" role="alert">
        Tamanho adicionado com sucesso
      </div>
      @endif
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tamanhos</h1>
      </div>
      <div class="col-md-12 d-flex justify-content-end mb-3">
        @include('dashboard.mainNav')
      </div>
      <hr>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h4>Adicionar Tamanho</h4>
      </div>
      <form action="/admin/tamanho/adicionar" method="POST">
        {{ csrf_field() }}
        <div class="form">
          <div class="form-group col-md-12">
            <div class="">
              <label for="name">Nome</label>
              <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" value="{{ old('name') }}" name="name">
              @if ($errors->has('name'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
              </span>
              @endif
            </div>
            <div class="mt-2">
              <label for="id_categoria">Categoria</label>
              <select class="form-control {{ $errors->has('id_categoria') ? ' is-invalid' : '' }}" name="id_categoria"  id="exampleFormControlSelect1">
                <option value="">Selecione</option>
                @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                @endforeach
              </select>
              @if ($errors->has('id_categoria'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('id_categoria') }}</strong>
              </span>
              @endif
            </div>

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
              <th>Categoria</th>
              <th>Deletar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($tamanhos as $tamanho)
            <tr style="height:50px;">
              <td>{{ $tamanho->id }}</td>
              <td>{{ $tamanho->name }}</td>
              <td>{{ $tamanho->categoria->name }}</td>
              <td><a href="/admin/tamanho/delete/{{$tamanho->id}}" class="badge badge-danger"><i class="far fa-trash-alt" style="font-size:20px;"></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="mt-1 d-flex justify-content-center">
          {{ $tamanhos->links() }}
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
