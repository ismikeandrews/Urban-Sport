<nav class="navbar-expand-md navbar-dark bg-dark navbar-laravel">
  <div class="container">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav mr-auto">

    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto d-flex justify-content-end">
      <!-- Authentication Links -->
      @guest
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ __('Login') }}<span class="caret"></span> </a>
        <div class="dropdown-menu dropdown-menu-right login" aria-labelledby="navbarDropdown">
          <form class="px-4 py-3" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf
            <div class="form-group">
              <label for="email" class="text-md-right">E-Mail</label>
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group">
              <label for="password" class="col-form-label text-md-right">Senha</label>
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
              @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label" for="remember">
                Lembrar-me
              </label>
            </div>
            <button type="submit" class="col-md-12 col-xl-12  btn btn-primary">Entrar</button>

          </form>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('password.request') }}">Esqueceu sua senha ?</a>
        </div>
      </li>
      <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('register') }}">Cadastro</a>
      </li>
      @else
      <li class="nav-item pr-2">
        <img src="{{ asset('img/profile.png') }}" class="rounded-circle" width="37" alt="logo">
      </li>
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->first_name." ".Auth::user()->last_name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/home">
            Ir ao painel
          </a>
          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
          @csrf
        </form>
      </div>
    </li>
    @endguest
  </ul>
</div>
</nav>
<header>
<nav class="navbar navbar-expand-lg d-flex bd-highlight">
  <div class="container pad">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <a class="navbar-brand" href="/">
        <img src="{{ asset('img/logo.png') }}" width="100" alt="logo">
      </a>
      <div class="mr-auto ml-auto">

        <form class="form-inline my-2 my-lg-0" action="/pagina/procurar" method="GET">
          <div class="input-group search-bar">
            <input class="form-control border-right-0 border-secondary" name="search" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-light border-secondary my-2 my-sm-0" type="submit"><i class="fa fa-search" style="font-size:18px"></i></button>
            </div>
          </div>
        </form>

      </div>
      <div class="btn-group">
        <a href="/pagina/carrinho" class="btn bg-dark border-primary px-3">
          <i class="fa fa-shopping-cart" style="font-size:18px;color:white"></i>
        </a>
        <button type="button" class="btn bg-dark border-primary text-white dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
        </button>
        <div class="dropdown-menu dropdown-menu-right order-md-2 mb-4 px-3 carrinho">

          <h4 class="d-flex justify-content-between align-items-center mb-3 mt-10">
            <span class="text-body">Meu carrinho</span>
            <span class="badge badge-success badge-pill">{{ Session::has('cart') ? Session::get('cart')->quantidade : '' }}</span>
          </h4>

          <ul class="list-group mb-3">

            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Nome</h6>
                <small class="text-muted">Breve descrição</small>
              </div>
              <span class="text-muted">R$ 25</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (R$)</span>
              <strong>R$25</strong>
            </li>

          </ul>
        </div>
      </div>
      </div>
    </div>
  </div>
</nav>
</header>
<div class=" sticky-top bg-white pt-3">
  <ul class="nav nav-tabs ">
    <div class="container">
      <div class="row d-flex justify-content-around">
        <li class="nav-item text-center col-4">
          <a class="nav-link <?php if($page=='/pagina/marca'){ echo 'active';}else { echo '';} ?> text-dark font-weight-bold" href="/pagina/marca">Marcas</a>
        </li>
        <li class="nav-item text-center col-4">
          <a class="nav-link <?php if($page=='/pagina/categoria'){ echo 'active';}else { echo '';} ?> text-dark font-weight-bold" href="/pagina/categoria">Categorias</a>
        </li>
        <li class="nav-item text-center col-4">
          <a class="nav-link <?php if($page=='/pagina/esporte'){ echo 'active';}else { echo '';} ?> text-dark font-weight-bold" href="/pagina/esporte">Esportes</a>
        </li>
      </div>
    </div>
  </ul>
</div>
