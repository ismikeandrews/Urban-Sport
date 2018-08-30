@extends('layouts.app')

@section('content')
<section>
  <div class="container">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="/img/background.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/img/banner.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/img/banner2.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
    </div>
  </div>
</section>

<section class="mt-0">
  <div class="container">
    <h3>Seleção de produtos</h3>
    <h5>Os melhores produtos selecionados para você</h5>
    <hr class="my-4">
    <div class="row d-flex justify-content-around">
      @foreach($produtos as $produto)
      <div class="card" style="width: 17rem;">
        <a href="/pagina/produto/{{ $produto->id }}"><img class="card-img-top" src="{{ $produto->foto }}" alt="Card image cap"></a>
        <div class="card-body">
          <h5 class="card-title">R$ {{ $produto->valor }}</h5>
          <p class="card-text">{{ $produto->description }}</p>
          <a href="#" class="btn btn-primary">Adicionar ao carrinho</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@include('carrosel')
@endsection
