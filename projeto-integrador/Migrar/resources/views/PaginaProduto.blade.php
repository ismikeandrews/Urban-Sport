@extends('layouts.app')

@section('content')
<?php $page = '/pagina/produto/{ $produto->id }'; ?>
<section>
  <div class="container">
    <hr>
    <div class="card">
      <div class="row">
        <aside class="col-sm-5">
          <article class="gallery-wrap">
            <div class="img-big-wrap">
              <div><a href="#"><img src="{{$produto->foto}}"></a></div>
            </div>
            <div class="img-small-wrap">
              <div class="item-gallery"><a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice" data-image="{{ $produto->foto }}" data-target="#image-gallery"> <img class="border" src="{{ $produto->foto }}"> </a></div>
              <div class="item-gallery"><a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice" data-image="{{ $produto->foto }}" data-target="#image-gallery"> <img class="border" src="{{ $produto->foto }}"> </a></div>
              <div class="item-gallery"><a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice" data-image="{{ $produto->foto }}" data-target="#image-gallery"> <img class="border" src="{{ $produto->foto }}"> </a></div>
              <div class="item-gallery"><a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice" data-image="{{ $produto->foto }}" data-target="#image-gallery"> <img class="border" src="{{ $produto->foto }}"> </a></div>
            </div>
          </article>
        </aside>

        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="image-gallery-title"></h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive col-md-12" src="{{ $produto->foto }}">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                </button>

                <button type="button" id="show-next-image" class="btn btn-primary float-right"><i class="fa fa-arrow-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div>

        <aside class="col-sm-7">
          <article class="card-body p-5">
          <h3 class="title mb-3">{{ $produto->name }}</h3>

          <p class="price-detail-wrap">
            <span class="price h3 text-warning">
            <span class="currency">R$</span><span class="num"> {{$produto->valor}}</span>
            </span>
            <span>/per un</span>
          </p>
          <dl class="item-property">
            <dt>Descrição</dt>
            <dd><p>{{$produto->description}}</p></dd>
          </dl>
          <dl class="param param-feature">
            <dt>Modelo #</dt>
            <dd>{{ $produto->id }}</dd>
          </dl>
          <dl class="param param-feature">
            <dt>Entraga</dt>
            <dd>Para todo o Brasil</dd>
          </dl>

          <hr>
          <div class="row">
            <div class="col-sm-5">
              <dl class="param param-inline">
                <dt>Quantidade: </dt>
                <dd>
                  <select class="form-control form-control-sm" style="width:70px;">
                    <option> 1 </option>
                    <option> 2 </option>
                    <option> 3 </option>
                  </select>
                </dd>
              </dl>
            </div>
            <div class="col-sm-7">
              <dl class="param param-inline">
                <dt>Tamanho: </dt>
                <dd>
                  <label class="form-check form-check-inline">
                    <span class="form-check-label">{{$produto->tamanho->name}}</span>
                  </label>
                </dd>
              </dl>
            </div>
          </div>
          <hr>
          <a href="/add/carrinho/{{ $produto->id }}" class="btn btn-lg btn-outline-primary">Adicionar no carrinho </a>
          </article>
        </aside>
      </div>

      <div class="container">
        <h3>Avaliação</h3>
        <h5>Avalie nossos serviços e produtos</h5>
        <hr class="my-4">
      </div>
      @include('comentario')
      <div class="row mt-1 mb-1">
        <div class="col-xs-12 col-md-8">
          <div class="row">
            <div class="col-xs-12 col-md-6 text-center">
              <h2 class="rating-num">4.0</h2>
              <div class="rating">
                <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                </span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                </span><span class="glyphicon glyphicon-star-empty"></span>
              </div>
              <div>
                <span class="glyphicon glyphicon-user"></span>1,050,008 total
              </div>
            </div>
            <div class="col-xs-12 col-md-6">
              <div class="row rating-desc">
                <div class="col-xs-3 col-md-5 text-right">
                  <span class="glyphicon glyphicon-star">★★★★★</span>
                </div>
                <div class="col-xs-8 col-md-7">
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                  </div>
                </div>
                <div class="col-xs-3 col-md-5 text-right">
                  <span class="glyphicon glyphicon-star">★★★★</span>
                </div>
                <div class="col-xs-8 col-md-7">
                  <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                    aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                  </div>
                </div>
                </div>
                <div class="col-xs-3 col-md-5 text-right">
                  <span class="glyphicon glyphicon-star">★★★</span>
                </div>
                <div class="col-xs-8 col-md-7">
                  <div class="progress">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                  </div>
                </div>
                <div class="col-xs-3 col-md-5 text-right">
                  <span class="glyphicon glyphicon-star">★★</span>
                </div>
                <div class="col-xs-8 col-md-7">
                  <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
                  </div>
                </div>
                <div class="col-xs-3 col-md-5 text-right">
                  <span class="glyphicon glyphicon-star">★</span>
                </div>
                <div class="col-xs-8 col-md-7">
                  <div class="progress">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 15%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mb-1">
        <form class="" action="index.html" method="post">
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Deixe seu comentario</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
