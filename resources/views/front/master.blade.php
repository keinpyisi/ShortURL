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
</head>
<body>
@include('front.header')

@yield('content')
<section id="features" class="home">
    <div class="container">
        <div class="section-heading wow bounceIn">
            <h1>Features</h1>
                <div class="divider"></div>
            <p>All Amazing Features</p>
        </div>
        <div class="row">
            <div class="col-sm-3 col-xs-12">
                <div class="about-item wow fadeInLeft" data-wow-delay="0.3s">
                    <i class="fa fa-bar-chart fa-2x"></i>
                        <h3>Advanced Analytics</h3>
                    <p>Advanced Reporting & Analytics by <u>continents</u>, <u>countries</u>, <u>states</u>, <u>cities</u>, <u>device type</u>, <u>device brand</u> & <u>device name</u></p>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="about-item wow fadeInLeft" data-wow-delay="0.3s">
                    <i class="fa fa-tachometer fa-2x"></i>
                        <h3> Administration Panel</h3>
                    <p>Control all of the features from the administration panel with a click of a button.</p>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="about-item wow fadeInLeft" data-wow-delay="0.9s">
                    <i class="fa fa-code fa-2x"></i>
                        <h3>Advanced API System</h3>
                    <p>API allows you to develop applications that interface with this service.</p>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="about-item wow fadeInLeft" data-wow-delay="0.3s">
                    <i class="fa fa-pencil-square-o fa-2x"></i>
                        <h3>Edit Created Links</h3>
                    <p>%s allows you to modify the long URL behind your customized shortlinks.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@include('front.footer')
@include('front.js')
</body>
</html>