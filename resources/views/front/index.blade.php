@extends('front.master')

@section('content')
<section id="urlbox">
    <h1>Paste the URL to be shortened</h1>
        <form action="{{url('/shortener')}}" method="post">
            @csrf
            <div id="formurl">
                <input type="text" name="original_url" placeholder="Enter the link here">
                    <div id="formbutton">
                        <input type="submit">
                    </div>
            </div>
        </form>
    <br/>
</section>
@endsection