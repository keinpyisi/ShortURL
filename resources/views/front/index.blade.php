@extends('front.master')

@section('content')
<section id="urlbox">
    <h1>Paste the URL to be shortened</h1>
        <form action="shortener.php" method="post">
            <div id="formurl">
            <input type="text" name="u" placeholder="Enter the link here">
            <div id="formbutton">
            <input type="submit" value="Shorten URL">
            </div>
            </div>
        </form>
    <p class="boxtextcenter">ShortURL.at is a free tool to shorten a URL or reduce a link<br>Use our URL Shortener to create a shortened link making it easy to remember</p>
</section>
@endsection