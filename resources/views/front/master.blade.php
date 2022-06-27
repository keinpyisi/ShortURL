
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <title>URL Shortener</title>
        <meta name="description" content="ShortURL is a url shortener to reduce a long link. Use our tool to shorten links and then share them, in addition you can monitor traffic statistics.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <style type="text/css">
                @import url(https://fonts.googleapis.com/css?family=Asap:400,700|Lato:400,700,900|Source+Sans+Pro:400,700&display=swap);
            </style>
            <link rel="stylesheet" href="/dist/style.css">
            <link rel="shortcut icon" href="favicon.ico">
    </head>
<body>
    <header>
        <div id="logo"><a href="https://www.shorturl.at/" class="logo">Short URL</a></div>
    </header>
    <main>
        @yield('content')
    </main>
    @include('front.footer')
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31391210-44" type="37618d96ed9681bdb898a269-text/javascript"></script>
        <script type="37618d96ed9681bdb898a269-text/javascript">
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-31391210-44');
        </script>
        <script data-cfasync="false" async src="/sw.js"></script>
        <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="37618d96ed9681bdb898a269-|49" defer=""></script></body>
</html>