@extends('layouts.dashNav')

@section('content')
<div class="container-fluid">
  <div class="row">
    @include('dashboard.sideNav')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Funções do site</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button class="btn btn-sm btn-outline-secondary">Share</button>
            <button class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
            This week
          </button>
        </div>
      </div>
      <div class="mt-5">
        <h4>Imagens atuias</h4>
        <hr>
      </div>
      <div class="container-fluid mb-4">
        <div class="row">
          <div class="col-6">
            @include('banner')
          </div>
          <div class="col-6 align-self-center border">
            @include('carrosel')
          </div>
        </div>
        <div class="row">
          <div class="col-6 mt-3">
            <div class="card w-100">
              <div class="card-body">
                <h5 class="card-title">Alterar imagens do carrosel</h5>
                <hr>
                <form action="index.html" method="post">
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Example file input
                        <input type="file" class="form-control-file">
                      </label>
                    </div>
                    <div class="form-group col-6">
                      <label>Example file input
                        <input type="file" class="form-control-file">
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Example file input
                        <input type="file" class="form-control-file">
                      </label>
                    </div>
                    <div class="form-group col-6">
                      <label>Example file input
                        <input type="file" class="form-control-file">
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Example file input
                        <input type="file" class="form-control-file">
                      </label>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end mt-2">
                    <input type="submit" value="Enviar" name="submit" class="btn btn-success shadow"/>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-6 mt-3">
            <div class="card w-100">
              <div class="card-body">
                <h5 class="card-title">Alterar imagens de promoções</h5>
                <hr>
                <form action="index.html" method="post">
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Example file input
                        <input type="file" class="form-control-file">
                      </label>
                    </div>
                    <div class="form-group col-6">
                      <label>Example file input
                        <input type="file" class="form-control-file">
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Example file input
                        <input type="file" class="form-control-file">
                      </label>
                    </div>
                    <div class="form-group col-6">
                      <label>Example file input
                        <input type="file" class="form-control-file">
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Example file input
                        <input type="file" class="form-control-file">
                      </label>
                    </div>
                    <div class="form-group col-6">
                      <label>Example file input
                        <input type="file" class="form-control-file">
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Example file input
                        <input type="file" class="form-control-file">
                      </label>
                    </div>
                    <div class="form-group col-6">
                      <label>Example file input
                        <input type="file" class="form-control-file">
                      </label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-end mt-2">
                    <input type="submit" value="Enviar" name="submit" class="btn btn-success shadow"/>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection
