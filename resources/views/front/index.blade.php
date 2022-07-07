@extends('front.master')

@section('content')

<header class="shorten">
    <div class="container">
        <div class="intro-text">
            <div class="intro-heading wow zoomIn" data-wow-delay=".3s">URL Shortener</div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
        <form action="{{url('/shortener')}}" method="post" id="shorten" class="form-inline" >
            @csrf
            <div class="form-group">
                <input type="text" name="original_url" placeholder="Your URL Here" required="required" class="form-control input-lg" id="url" />
                <button type="submit"><img src="/dist/img/Right-Arrow.png" alt="" /></button>
            </div>
        </form>
        </div>
        <div class="slogan">
            URL Shortnerは長いURLを短くしてくれてどこでもシェーアーできる無料のサービスです。
        </div>
    </div>
</header>
@endsection