@extends('layouts.app')
@section('content')
<?php $page = '/pagina/carrinho'; ?>

<section class="mt-1">
    <div class="container">
        <h3>Carrinho</h3>
        <h5>Os produtos que você escolheu</h5>
        <hr class="my-4">


        <table class="table">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Qtd</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Valor unitário</th>
                    <th scope="col">Valor total</th>
                  </tr>
                </thead>
                <tbody>

                  @if (isset($pedido) && $pedido)

                  <tr>

                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>


                  </tr>

                  @endif
                  
                </tbody>
              </table>

    </div>
    
    
</section>

@endsection