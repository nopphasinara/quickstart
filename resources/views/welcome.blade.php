<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Album example for Bootstrap</title>
    
    {{-- <link rel="icon" href="../../../../favicon.ico"> --}}
    <link rel="stylesheet" href="{{ get_asset('google_fonts.open_sans') }}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ get_asset('fontawesome') }}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" crossorigin="anonymous">
  </head>
  <body>
    {{-- <img class="lazyload" src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t1.0-9/31958767_177418146412512_1354849314718875648_o.jpg?_nc_cat=0&oh=57a12baca770222c5e4824cc47eb92aa&oe=5B8C2BD4" data-src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t1.0-9/31958767_177418146412512_1354849314718875648_o.jpg?_nc_cat=0&oh=57a12baca770222c5e4824cc47eb92aa&oe=5B8C2BD4" width="765" height="574" data-srcset="small.jpg 480w, medium.jpg 640w, large.jpg 1024w" />
    <img class="lazyload" src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t1.0-0/p480x480/31955922_1027554134058724_961709599243632640_o.jpg?_nc_cat=0&oh=bad4301ae5e56747134cd78935738859&oe=5B532740" data-src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t1.0-9/31959869_1027554130725391_4164943028038926336_n.jpg?_nc_cat=0&oh=08e87fa2e52eca0f6fef44b4a5190ad4&oe=5B8AC637" width="765" height="574" data-srcset="small.jpg 480w, medium.jpg 640w, large.jpg 1024w" /> --}}
    
    <div id="header" class="fixed-top" role="header">
      <div id="navbar-main" class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation">
        <div class="container">
            <div class="logo">
              xxx
            </div><!-- / .logo -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-inner" aria-controls="navbar-main-inner" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-main-inner">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
              </ul>
            </div>
            <span class="navbar-text">
              Navbar text with an inline element
            </span>
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div><!-- / .container -->
      </div><!-- / #navbar-main -->
    </div><!-- / #header -->
    
    <div id="slide-homepage">
      
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" data-src="holder.js/100px100p?random=yes&auto=yes" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" data-src="holder.js/100px100p?random=yes&auto=yes" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" data-src="holder.js/100px100p?random=yes&auto=yes" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div><!-- / #slide-homepage -->
    
    <div id="main" role="main">
      xxx
    </div><!-- / #main -->
    
    <div id="footer" role="footer">
      <div class="copyright">
        <div class="container">
          <div class="row d-flex text-center text-sm-left justify-content-between">
            <div class="col-sm-auto">
              <p>&copy; Copyrights 2018 {{ config('app.name') }}</p>
              <ul class="list-inline mb-0">
                <li class="list-inline-item">
                  <a href="#">Link</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">Link</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">Link</a>
                </li>
              </ul>
            </div>
            <div class="col-sm-auto">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-fw fa-facebook"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div><!-- / .container -->
      </div><!-- / .copyright -->
    </div><!-- / #footer -->
    
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="{{ asset(config('custom.jquery.'. config('custom.app_resource') .'')) }}" crossorigin="anonymous"></script>
    <script src="{{ asset(config('custom.holder.'. config('custom.app_resource') .'')) }}" crossorigin="anonymous"></script>
    <script src="{{ asset(config('custom.ie.'. config('custom.app_resource') .'')) }}" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset(config('custom.tooltip.'. config('custom.app_resource') .'')) }}" crossorigin="anonymous"></script> --}}
    {{-- <script src="{{ asset(config('custom.lazyload.'. config('custom.app_resource') .'')) }}" crossorigin="anonymous"></script> --}}
    <script src="{{ asset(config('custom.bootstrap.'. config('custom.app_resource') .'')) }}" crossorigin="anonymous"></script>
    <script>
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    
    $('#myCollapse').on('shown.bs.collapse', function (e) {
      // Action to execute once the collapsible area is expanded
    })
    </script>
  </body>
</html>
