@extends('layouts.dashNav')

@section('content')
<?php $page = '/produto/edit/{id}'; ?>
<div class="container-fluid">
  <div class="row">
    @include('dashboard.sideNav')
    <div class="col-md-9 ml-sm-auto col-lg-10 px-4 py-5">
      @if(isset($tudocerto) && $tudocerto)
      <div class="alert alert-success" role="alert">
        Produto atualizado com sucesso
      </div>
      @endif
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Editar Produto</h1>
      </div>
      <div class="col-md-12 d-flex justify-content-end mb-3">
        @include('dashboard.mainNav')
      </div>
      <hr>
      <form action="/admin/produto/edit/{{ $produto->id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Nome</label>
            <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" value="{{ $produto->name }}" name="name">
            @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group col-md-6">
            <label for="valor">Valor</label>
            <input type="text" class="form-control {{ $errors->has('valor') ? ' is-invalid' : '' }}" id="valor" name="valor" value="{{ $produto->valor }}" placeholder="99.99 ex">
            @if ($errors->has('valor'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('valor') }}</strong>
            </span>
            @endif
          </div>
        </div>

        <div class="form-group">
          <label for="foto">Valor</label>
          <input type="text" class="form-control {{ $errors->has('foto') ? ' is-invalid' : '' }}" id="foto" name="foto" value="{{ $produto->foto }}" placeholder="/img/nome.jpg">
          @if ($errors->has('foto'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('foto') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group">
          <label for="id_marca">Marca</label>
          <select class="form-control {{ $errors->has('id_marca') ? ' is-invalid' : '' }}" name="id_marca" value="{{ old('$marcas->name') }}" id="exampleFormControlSelect1">
            <option value="{{ $produto->marca->id }}">{{ $produto->marca->name }}</option>
            @foreach($marcas as $marca)
            <option value="{{ $marca->id }}">{{ $marca->name }}</option>
            @endforeach
          </select>
          @if ($errors->has('id_marca'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('id_marca') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group">
          <label for="id_categoria">Categoria</label>
          <select class="form-control {{ $errors->has('id_categoria') ? ' is-invalid' : '' }}" name="id_categoria" value="{{ old('$categoria->name') }}" id="exampleFormControlSelect1">
            <option value="{{ $produto->categoria->id }}">{{ $produto->categoria->name }}</option>
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
        <div class="form-group">
          <label for="id_esporte">Esporte</label>
          <select class="form-control {{ $errors->has('id_esporte') ? ' is-invalid' : '' }}" name="id_esporte" value="{{ old('$esporte->name') }}" id="exampleFormControlSelect1">
            <option value="{{ $produto->esporte->id }}">{{ $produto->esporte->name }}</option>
            @foreach($esportes as $esporte)
            <option value="{{ $esporte->id }}">{{ $esporte->name }}</option>
            @endforeach
          </select>
          @if ($errors->has('id_esporte'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('id_esporte') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group">
          <label for="id_tamanho">Tamanho</label>
          <select class="form-control {{ $errors->has('id_tamanho') ? ' is-invalid' : '' }}" name="id_tamanho" value="{{ old('$tamanho->name') }}" id="exampleFormControlSelect1">
            <option value="{{ $produto->tamanho->id }}">{{ $produto->tamanho->name }}</option>
            @foreach($tamanhos as $tamanho)
            <option value="{{ $tamanho->id }}">{{ $tamanho->name }}</option>
            @endforeach
          </select>
          @if ($errors->has('id_tamanho'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('id_tamanho') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group">
          <label for="description">Descrição</label>
          <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" name="description" value="{{ old('description') }}" rows="3">{{ $produto->description }}</textarea>
          @if ($errors->has('description'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('description') }}</strong>
          </span>
          @endif
        </div>
        <div class="d-flex justify-content-end mt-2">
          <input type="submit" value="Enviar" name="submit" class="btn btn-success shadow"/>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
