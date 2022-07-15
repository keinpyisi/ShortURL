<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" /> <title>@yield('title','SHORT URL')</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="og:title" content="">
<meta name="og:description" content="">
<meta property="og:image" content="" />
@include('front.css')
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2734907977933705"
     crossorigin="anonymous"></script>
</head>
<body>
@include('front.header')

@yield('content')
<section id="features" class="home">
    <div class="container">
        <div class="section-heading wow bounceIn">
            <h1>Features</h1>
                <div class="divider"></div>
            {{-- <p>All Amazing Features</p> --}}
        </div>
        <div class="row">
            <div class="col-sm-3 col-xs-12">
                <div class="about-item wow fadeInLeft" data-wow-delay="0.3s">
                    <i class="fa fa-thumbs-up fa-2x" ></i>
                        <h3>Easy to use</h3>
                    <p>URL Shortnerは簡単、早いで長くてもできる。</p>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="about-item wow fadeInLeft" data-wow-delay="0.3s">
                    <i class="fa fa-tachometer fa-2x"></i>
                        <h3> Administration Panel</h3>
                    <p>アドミンパーネルで簡単にURLをコントローできる</p>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="about-item wow fadeInLeft" data-wow-delay="0.9s">
                    <i class="fa fa-code fa-2x"></i>
                        <h3>Advanced API System</h3>
                    <p>APIで他のデベロバさんたちにも利用できる</p>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="about-item wow fadeInLeft" data-wow-delay="0.3s">
                    <i class="fa fa-pencil-square-o fa-2x"></i>
                        <h3>Unlimited API Request</h3>
                    <p>APIは何回でもリクエス、何時間でも利用できる</p>
                </div>
            </div>
        </div>
    </div>
</section>
@include('front.footer')
@include('front.js')
</body>
</html>
