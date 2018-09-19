@extends('layouts.app')

@section('content')
<?php $page = '/'; ?>
<section>
  @include('banner')
</section>

<section class="mt-0">
  <div class="container">
    <h3>Lancamentos</h3>
    <h5>As novidades mais recentes</h5>
    <hr class="my-4">
    <div class="row d-flex justify-content-around">
      @foreach($lancamentos as $lancamento)
      <div class="card mt-1 shadow" style="width: 17rem;">
        <a href="/pagina/produto/{{ $lancamento->id }}"><img class="card-img-top border"src="{{ $lancamento->foto }}" alt="Card image cap"></a>
        <div class="card-body">
          <h6 style="height:40px;">{{ $lancamento->name }}</h6>
          <h5 class="card-title text-primary">R$ {{ $lancamento->valor }}</h5>
          <div style="height:100px; overflow: scroll;">
            <p class="card-text">{{ $lancamento->description }}</p>
          </div>
          <a href="/add/carrinho/{{ $lancamento->id }}" class="btn btn-primary mt-1">Adicionar ao carrinho</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@include('carrosel')
<section class="mt-0">
  <div class="container">
    <h3>Seleção de produtos</h3>
    <h5>Os melhores produtos selecionados para você</h5>
    <hr class="my-4">
    <div class="row d-flex justify-content-around">
      @foreach($produtos as $produto)
      <div class="card mt-1 shadow" style="width: 17rem;">
        <a href="/pagina/produto/{{ $produto->id }}"><img class="card-img-top border"src="{{ $produto->foto }}" alt="Card image cap"></a>
        <div class="card-body">
          <h6 style="height:40px;">{{ $produto->name }}</h6>
          <h5 class="card-title text-primary">R$ {{ $produto->valor }}</h5>
          <div style="height:100px; overflow: scroll;">
            <p class="card-text">{{ $produto->description }}</p>
          </div>
          <a href="/add/carrinho/{{ $produto->id }}" class="btn btn-primary mt-1">Adicionar ao carrinho</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
