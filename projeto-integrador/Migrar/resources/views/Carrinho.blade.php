@extends('layouts.app')
@section('content')
<?php $page = '/pagina/carrinho'; ?>

<section class="mt-0">
    <div class="container">
      <h3>Carrinho</h3>
      <h5>Os produtos que você escolheu</h5>
      <hr class="my-4">
      @if (Session::has('cart'))
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Quantidade</th>
            <th scope="col">Produto</th>

            <th scope="col">Valor unitário</th>
          </tr>
        </thead>
        <tbody>
          @foreach($produtos as $produto)
          <tr>
            <td>{{ $produto['quantidade'] }}</td>
            <td>{{ $produto['item']['name'] }}</td>
            <td>R$ {{ $produto['valor'] }}</td>
          </tr>
          @endforeach
            <td><strong style="font-size:20px;">Total:</strong> </td>
            <td></td>
            <td><span class="text-success">R$ {{ $precoTotal }}</span></td>
        </tbody>

      </table>
      <div class="row ">
        <div class="col-md-12 d-flex justify-content-end">
          <a href="/pagina/checkout" class="btn btn-success">Checkout</a>
        </div>
      </div>
      @else
      <div class="container">
        <h5 class="alert alert-danger text-center mt-0" role="alert">
          Nenhum produto adicionado 🛒
        </h6>
      </div>
      @endif
    </div>
</section>

@endsection
