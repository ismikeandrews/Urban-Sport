@extends('layouts.app')

@section('content')
<?php $page = '/pagina/checkout'; ?>
<div class="container mt-0">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="{{ asset('img/logo.png') }}" width="100">
    <h2>Checkout</h2>

  </div>

  <div class="row">
    <div class="col-md-4 col-xl-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Meu carrinho</span>
        <span class="badge badge-success badge-pill">{{ Session::has('cart') ? Session::get('cart')->quantidade : '' }}</span>
      </h4>
      <ul class="list-group mb-3">
        @foreach($produtos as $produto)
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">{{ $produto['item']['name'] }}</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">R$ {{ $produto['valor'] }}</span>
        </li>
        @endforeach


        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>Codigo Exemplo</small>
          </div>
          <span class="text-success">-$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (R$)</span>
          <strong>R$ {{ $total }}</strong>
        </li>
      </ul>

      <form class="card p-2">
        @csrf
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Enviar</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 col-xl-8 order-md-1">
      <h4 class="mb-3">Endereço de cobrança</h4>
      <hr>

      <form class="needs-validation" novalidate="" action="/pagina/checkout" method="post">
        @csrf
        <div class="mb-3">
          <label for="address">Endereço</label>
          <input type="text" class="form-control" id="address" placeholder="Rua principal 1234" required="">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Complemento <span class="text-muted">(Opcional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="Apartamento ou suite">
        </div>

        <div class="row">
          <div class="col-md-6 col-xl-6 mb-3">
            <label for="state">Estado</label>
            <select class="custom-select d-block w-100" id="state" required="">
              <option value="">Choose...</option>
              <option>São Paulo</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-6 col-xl-6 mb-3">
            <label for="zip">CEP</label>
            <input type="text" class="form-control" id="zip" placeholder="" required="">
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Enviar para o mesmo endereço de cobrança</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Salvar essas informarções para a proxima vez</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Pagamento</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
            <label class="custom-control-label" for="credit">Cartão de credito</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="debit">Cartão de debito</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-xl-6 mb-3">
            <label for="cc-name">Nome no cartão</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required="">
            <small class="text-muted">Nome completo assim como no cartão</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 col-xl-6 mb-3">
            <label for="cc-number">Numero do cartão de credito</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required="">
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-xl-3 mb-3">
            <label for="cc-expiration">Validade</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 col-xl-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continuar com o checkout</button>
      </form>
    </div>
  </div>
</div>
@endsection
