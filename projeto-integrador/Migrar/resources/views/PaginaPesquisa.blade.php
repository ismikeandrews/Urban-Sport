@extends('layouts.app')
@section('content')
<?php $page = 'pesquisa'; ?>
<section class="mt-1">
  <div class="container">
    <h3>Pesquisa</h3>
    <h5>Resultado da sua pesquisa</h5>
    <hr class="my-4">
    <div class="row d-flex justify-content-start">

      @if(count ($produtos) > 0)
      @foreach($produtos as $produto)
      <div class="card shadow mx-2 mt-1" style="width: 17rem;">
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
      @else
      <div class="container">
        <h5 class="alert alert-danger text-center mt-0" role="alert">
          Nenhum resultado encontrado 😵
        </h6>
      </div>
      @endif
      <div class="mt-1 d-flex justify-content-center">
        {{ $produtos->links() }}
      </div>
    </div>
  </div>
</section>
@endsection
