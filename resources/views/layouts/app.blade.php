<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&amp;display=swap" as="style"
        onload="this.onload=null;this.rel='stylesheet'" />
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&amp;display=swap" rel="stylesheet"
            type="text/css" />
    </noscript>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet-gesture-handling/dist/leaflet-gesture-handling.min.css" type="text/css">
    <script src="https://unpkg.com/leaflet-gesture-handling"></script>
    <link rel="icon" href="{{ asset('images/heart-32.png') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- FontAwesome CSS -->
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet" />
    <!-- Neela Icon Set CSS -->
    <link href="{{ asset('css/neela-icon-set.css') }}" rel="stylesheet" />

    <!-- Owl Carousel CSS -->
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jquery.minicolors.css') }}" rel="stylesheet" />

    <!-- Template CSS -->
    <link href="{{ asset('css/style.css')."?ver=". now()->format('ymdhis')  }}" rel="stylesheet" />
    <link href="{{ asset('css/index.css')."?ver=". now()->format('ymdhis') }}" rel="stylesheet" />

    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-3.6.0.min.js') }}"></script>
    <title>Tuan & Lan - Wedding Invitation</title>
</head>

<body>
    <!-- BEGIN PRELOADER -->
    @include('layouts.preloading')
    <!-- END PRELOADER -->

    <!-- BEGIN WRAPPER -->
    <div id="wrapper">

        <!-- BEGIN HEADER -->
        @include('layouts.header')
        <!-- END HEADER -->

        <!-- CONTENT SECTION -->
        @yield('content')
        <!-- END CONTENT SECTION -->

        <!-- BEGIN FOOTER -->
        @include('layouts.footer')
        <!-- END FOOTER -->
    </div>
    <!-- END WRAPPER -->

    <!-- Libs -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }} "></script>
    <script src="{{ asset('js/jquery-ui.min.js') }} "></script>
    <script src="{{ asset('js/jquery-migrate-3.3.2.min.js') }} "></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('js/jquery.placeholder.min.js') }} "></script>
    <script src="{{ asset('js/ismobile.js') }} "></script>
    <script src="{{ asset('js/retina.min.js') }} "></script>
    <script src="{{ asset('js/waypoints.min.js') }} "></script>
    <script src="{{ asset('js/waypoints-sticky.min.js') }} "></script>
    <script src="{{ asset('js/owl.carousel.min.js') }} "></script>
    <script src="{{ asset('js/lightbox.min.js') }} "></script>

    <!-- Nicescroll script to handle gallery section touch swipe -->
    <script src="{{ asset('js/jquery.nicescroll.js') }}"></script>

    <!-- Hero Background Slideshow Script -->
    <script src="{{ asset('js/jquery.zoomslider.js') }}"></script>

    <!-- Template Scripts -->
    <script src="{{ asset('js/variables.js')."?ver=". now()->format('ymdhis')  }}" asp-append-version="true"></script>
    <script src="{{ asset('js/scripts.js')."?ver=". now()->format('ymdhis')  }}" asp-append-version="true"></script>
    <script src="{{ asset('js/template.settings.js')."?ver=". now()->format('ymdhis')  }}" asp-append-version="true"></script>
    <script src="{{ asset('js/jquery.minicolors.min.js') }}"></script>
    @yield('js')
</body>

</html>
