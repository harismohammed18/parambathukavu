<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Parambathu Kavu</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style_user.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body class="bg-white">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel fixed-top ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                  <strong>  Parambath Kavu</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li><a class="nav-link" href="{{ route('showGalleryGeneratePage') }}">Gallery</a></li>
                        <li><a class="nav-link" href="">Vazhipadu</a></li>
                        <li><a class="nav-link" href="">News</a></li>
                        <li><a class="nav-link" href="">Poojaas</a></li>
                        <li><a href="{{ route('showHistoryPage')}}" class="nav-link">History</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')

            <div class="container-fluid footer-div text-center">
              <p class="footer-div-a">
                <a  href="http://www.innocz.com/" target="_blank">  Made with <i class="fa fa-heart" style="color:red;"></i> by iNNOCZ</a>
              </p>
            </div>
        </main>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.lazy.min.js') }}"></script>
    <script>
      $(function() {
          $('.lazy').Lazy();
      });
      // ===== Scroll to Top ====
      $(window).scroll(function() {
          if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
              $('#return-to-top').fadeIn(200);    // Fade in the arrow
          } else {
              $('#return-to-top').fadeOut(200);   // Else fade out the arrow
          }
      });
      $('#return-to-top').click(function() {      // When arrow is clicked
          $('body,html').animate({
              scrollTop : 0                       // Scroll to top of body
          }, 500);
      });
    </script>
    @yield('script')
</body>
</html>
