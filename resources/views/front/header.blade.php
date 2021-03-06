<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav id="mainNav" class="navbar navbar-expand navbar-right navbar-light bg-light ">
                <a class="navbar-brand" href="{{url('/')}}">URL Shortener</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="https://github.com/keinpyisi/ShortURL/blob/main/README.md">Docs</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="{{url('/admin/login')}}">Login <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('/admin/register')}}">Sign up</a>
                    </li>
                  </ul>
                </div>
              </nav>
        </div>
    </div>
</div>