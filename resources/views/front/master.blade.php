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

@include('front.footer')
@include('front.js')
</body>
</html>