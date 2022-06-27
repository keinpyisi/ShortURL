@extends('front.master')

@section('content')

    <section id="content">
    <h1>Your shortened URL</h1>
    <p>Copy the shortened link and share it in messages, texts, posts, websites and other locations.</p>
    </section>
    <script type="27ae45fd9d8f2c3792307ccb-text/javascript">
      var clipboard = new Clipboard('.copy');
      </script>
    <script type="27ae45fd9d8f2c3792307ccb-text/javascript">
          function toggle_visibility(id) {
             var e = document.getElementById(id);
             if(e.style.display == "none")
                e.style.display = "table";
             //else
                //e.style.display = "none";
          }
      </script>
    <section id="urlbox">
    <br><br>
    <div id="formurl" style="max-width: 400px;">
    <input id="shortenurl" type="text" value="shorturl.at/gnxGW" onClick="if (!window.__cfRLUnblockHandlers) return false; this.select();" data-cf-modified-27ae45fd9d8f2c3792307ccb-="">
    <div id="formbutton">
    <input type="button" data-clipboard-target="#shortenurl" class="copy" value="Copy URL" onclick="if (!window.__cfRLUnblockHandlers) return false; toggle_visibility('balloon');" data-cf-modified-27ae45fd9d8f2c3792307ccb-="">
    </div>
    </div>
    <div id="formurl" style="max-width: 400px; display: block;">
    <div id="balloon" style="display: none;">URL Copied</div>
    </div><br><br>
    </section>
    <section id="content">
    <h2>Share URL</h2>
    <div class="socialnetworkbox">
    <p>
    <a class="snb snbfacebook" href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; window.open('https://www.facebook.com/sharer/sharer.php?u=shorturl.at/gnxGW', 'facebook', 'width=800, height=600, resizable, scrollbars=yes, status=1'); return false;" data-cf-modified-27ae45fd9d8f2c3792307ccb-="">Facebook</a>
    <a class="snb snbtwitter" href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; window.open('https://twitter.com/share?url=shorturl.at/gnxGW', 'twitter', 'width=800, height=600, resizable, scrollbars=yes, status=1'); return false;" data-cf-modified-27ae45fd9d8f2c3792307ccb-="">Twitter</a>
    <a class="snb snbpinterest" href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; window.open('https://pinterest.com/pin/create/link/?url=shorturl.at/gnxGW', 'pinterest', 'width=800, height=600, resizable, scrollbars=yes, status=1'); return false;" data-cf-modified-27ae45fd9d8f2c3792307ccb-="">Pinterest</a>
    <a class="snb snbtumblr" href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; window.open('https://www.tumblr.com/share/link?url=shorturl.at/gnxGW', 'tumblr', 'width=800, height=600, resizable, scrollbars=yes, status=1'); return false;" data-cf-modified-27ae45fd9d8f2c3792307ccb-="">Tumblr</a>
    <a class="snb snbwhatsapp" href="whatsapp://send?text=shorturl.at/gnxGW">WhatsApp</a>
    </p>
    </div>
    </section>
@endsection

