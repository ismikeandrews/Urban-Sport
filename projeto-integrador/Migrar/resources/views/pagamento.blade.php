<h4 class="mb-3 mt-3">Endereço</h4>
<hr>
<div class="mb-3">
  <label for="address">Endereço</label>
  <input type="text" class="form-control" id="address" placeholder="Main St 1234">
  <div class="invalid-feedback">Digite um endereço valido por favor</div>
</div>
<div class="row mb-1">
  <div class="col-md-5 mb-3">
    <label for="country">País</label>
    <select class="custom-select d-block w-100" id="country">
      <option value>
        Escolha...
      </option>
      <option>
        Brasil
      </option>
      <option>
        Canadá
      </option>
    </select>
    <div class="invalid-feedback">Por favor selecione um País</div>
  </div>
  <div class="col-md-4 mb-3">
    <label for="state">Estado</label>
    <select class="custom-select d-block w-100" id="state">
      <option value>
        Escolha...
      </option>
      <option>
        São Paulo
      </option>
      <option>
        Rio De Janeiro
      </option>
    </select>
    <div class="invalid-feedback">Por favor selecione um Estado</div>
  </div>
  <div class="col-md-3 mb-3">
    <label for="zip">CEP</label>
    <input type="text" class="form-control" id="zip" placeholder="XXXXX-XXX">
    <div class="invalid-feedback">Zip code required</div>
  </div>
</div>
<h4 class="mb-3">Pagamento</h4>
<hr>
<div class="d-block my-3">
  <div class="custom-control custom-radio">
    <input type="radio" name="paymentMethod" id="credit" class="custom-control-input" checked>
    <label for="credit" class="custom-control-label">Cartão de Credito</label>
  </div>
  <div class="custom-control custom-radio">
    <input type="radio" name="paymentMethod" id="debit" class="custom-control-input" checked>
    <label for="debit" class="custom-control-label">Cartão de Debito</label>
  </div>
  <div class="custom-control custom-radio">
    <input type="radio" name="paymentMethod" id="paypal" class="custom-control-input" checked>
    <label for="paypal" class="custom-control-label">Paypal</label>
  </div>
</div>
<div class="row">
  <div class="col-md-6 mb-3">
    <label for="cc-name">Nome no Cartão</label>
    <input type="text" class="form-control" id="cc-name" placeholder>
    <small>Digite seu nome conforme escrito no cartão</small>
    <div class="invalid-feedback">Nome do cartão é necessario</div>
  </div>
  <div class="col-md-6 mb-3">
    <label for="cc-number">Numero do Cartão de Credito</label>
    <input type="text" class="form-control" id="cc-number" placeholder>
    <div class="invalid-feedback">Numero do cartão é necessario</div>
  </div>
</div>
<div class="row">
  <div class="col-md-3 mb-3">
    <label for="cc-expiration">Validade</label>
    <input type="text" class="form-control" id="cc-expiration" placeholder="MM/YY">
    <div class="invalid-feedback">Validade do cartão é necessario</div>
  </div>
  <div class="col-md-3 mb-3">
    <label for="cc-cvv">CVV</label>
    <input type="text" class="form-control" id="cc-cvv" placeholder>
    <div class="invalid-feedback">Codigo de segurança é necessario</div>
  </div>
</div>
<hr>
