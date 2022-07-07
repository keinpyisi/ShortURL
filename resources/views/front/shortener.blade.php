@extends('front.master')

@section('content')
    <header class="shorten">
      <div class="container">
          <div class="intro-text">
              <div class="intro-heading wow zoomIn" data-wow-delay=".3s">URL Shortener</div>
          <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
          <div id="shorten" class="form-inline" >
              <div class="form-group">
                  <input id="shortenurl" type="text" value="{{url('/').'/'.$short}}" class="form-control input-lg"  />
                  <button onclick="myFunction()">
                    <span class="tooltip">Copied</span>
                    <img src="/dist/img/copy.png" alt="" />
                  </button>
              </div>
            </div>
          </div>
          <div class="slogan">
            URL Shortnerは長いURLを短くしてくれてどこでもシェーアーできる無料のサービスです。
          </div>
      </div>
  </header>
@endsection

