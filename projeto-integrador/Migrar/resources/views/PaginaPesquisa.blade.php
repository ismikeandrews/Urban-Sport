@extends('layouts.app')
@section('content')
<?php $page = 'ola'; ?>
<section class="mt-1">
  <div class="container">
    <h3>Pesquisa</h3>
    <h5>Resultado da sua pesquisa</h5>
    <hr class="my-4">
    <div class="row d-flex justify-content-start">

      @if(count ($produtos) > 0)
      @foreach($produtos as $produto)
      <div class="card mt-1 shadow mx-2" style="width: 17rem;">
        <a href="/pagina/produto/{{ $produto->id }}"><img class="card-img-top border"src="{{ $produto->foto }}" alt="Card image cap"></a>
        <div class="card-body">
          <h5 class="card-title">R$ {{ $produto->valor }}</h5>
          <div style="height:100px; overflow: scroll;">
            <p class="card-text">{{ $produto->description }}</p>
          </div>
          <a href="#" class="btn btn-primary mt-1">Adicionar ao carrinho</a>
        </div>
      </div>
      @endforeach
      @else
      <div class="container">
        <h5 class="alert alert-danger" role="alert">
          Nenhum resultato encontrado
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
