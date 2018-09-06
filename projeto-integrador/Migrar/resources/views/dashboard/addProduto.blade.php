@extends('layouts.dashNav')

@section('content')
<?php $page = '/admin/produtos/adicionar'; ?>
<div class="container-fluid">
  <div class="row">
    @include('dashboard.sideNav')
    <div class="col-md-9 ml-sm-auto col-lg-10 px-4 py-5">
      @if(isset($tudocerto) && $tudocerto)
      <div class="alert alert-success" role="alert">
        Produto adicionado com sucesso
      </div>
      @endif
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Adicionar Produto</h1>
      </div>
      <div class="col-md-12 d-flex justify-content-end mb-3">
        @include('dashboard.mainNav')
      </div>
      <hr>
      <form action="/admin/produtos/adicionar" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Nome</label>
            <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" value="{{ old('name') }}" name="name">
            @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group col-md-6">
            <label for="valor">Valor</label>
            <input type="text" class="form-control {{ $errors->has('valor') ? ' is-invalid' : '' }}" id="valor" name="valor" value="{{ old('valor') }}" placeholder="99.99 ex">
            @if ($errors->has('valor'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('valor') }}</strong>
            </span>
            @endif
          </div>
        </div>
        <div class="form-group">
          <label for="foto">Foto</label>
          <div class="mt-0">
            <input type="file" name="foto">
          </div>
        </div>
        <div class="form-group">
          <label for="id_marca">Marca</label>
          <select class="form-control {{ $errors->has('id_marca') ? ' is-invalid' : '' }}" name="id_marca" value="{{ old('$marcas->name') }}" id="exampleFormControlSelect1">
            <option value="">Selecione</option>
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
        <div class="form-group">
          <label for="id_esporte">Esporte</label>
          <select class="form-control {{ $errors->has('id_esporte') ? ' is-invalid' : '' }}" name="id_esporte" value="{{ old('$esporte->name') }}" id="exampleFormControlSelect1">
            <option value="">Selecione</option>
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
            <option value="">Selecione</option>
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
          <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" name="description" value="{{ old('description') }}" rows="3"></textarea>
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
