<footer class="mt-0 text-white">
  <div class="container">
    <div class="row d-flex justify-content-between">
      <div class="col-md-3">
        <ul style="list-style-type:none">
          <li><a href="/pagina/sobre" class="text-white">SOBRE NÓS</a></li>
          <li><a href="#" class="text-white">CONTATO</a></li>
          <li><a href="#" class="text-white">AJUDA</a></li>
          <li><a href="faq.php" class="text-white">FAQ</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul style="list-style-type:none">
          <li><a href="#" class="text-white">POLÍTICA DE PRIVACIADE</a></li>
          <li><a href="#" class="text-white">TERMOS</a></li>
          <li><a href="https://github.com/mikeandrews98/digital-house" target="_blank" class="text-white">Git hub</a></li>
          <li><a href="/admin/login" target="_blank" class="text-white">Admin Dashboard</a></li>
        </ul>
      </div>
      <div class="col-md-6 novidades">
        <h4>CADASTRE-SE, FIQUE POR DENTRO DAS NOVIDADES E GANHE <span class="cor">10% DE DESCONTO</span></h4>
        <small>Cadastre-se para obter dicas úteis sobre publicidade on-line, juntamente com informações atualizadas sobre nossos webinários, eventos e atualizações.</small>

        <form class="mt-2" method="get" action="/pagina/newsletter">
          <div class="form-group">
            <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group">
            <button type="submit" class="form-control btn btn-primary btn-lg btn-block">Inscreva-se já</button>
          </div>
        </form>
        @if(isset($tudocerto) && $tudocerto)
        <div class="alert alert-success" role="alert">
          Cadastrado realizado com sucesso confira sua caixa de email para receber seu cupom de desconto
        </div>
        @endif
      </div>
    </div>
    <div class="col-md-4">
      <a href="#"><img src="{{ asset('img/facebook.jpg') }}" alt="facebook" width="35" class="rounded"></a>
      <a href="#"><img src="{{ asset('img/instagram.png') }}" alt="instagram" width="35" class="rounded"></a>
      <a href="#"><img src="{{ asset('img/twitter.png') }}" alt="twitter" width="35" class="rounded"></a>
      <a href="#"><img src="{{ asset('img/whatsapp.png') }}" alt="whatsapp" width="35" class="rounded"></a>
      <a href="#"><img src="{{ asset('img/youtube.png') }}" alt="youtube" width="35" class="rounded"></a>
    </div>

    <div class="row d-flex justify-content-center mt-3">
      <div class="col-md-3 text-center">
        <img src="{{ asset('img/logo.png') }}" width="100">
      </div>
    </div>
    <hr>
    <div class="row d-flex justify-content-center">
      <div class="col-md-4 text-center">
        <small>Copyright ® 2018 |<a href="https://github.com/mikeandrews98/digital-house" target="_blank" class="text-white"> The Code Strikers</a></small>
      </div>
    </div>
  </div>
</footer>
