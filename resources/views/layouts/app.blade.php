<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Daily Bread - Serving what's hot everyday </title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/w3.css') }}">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script src="{{ URL::asset('login-template/assets/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ URL::asset('login-template/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ URL::asset('login-template/assets/js/scripts.js') }}"></script>
    <script src="{{ URL::asset('js/aos.js') }}"></script>

    <!-- Links -->
    <link rel="stylesheet" href="{{ URL::asset('login-template/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('login-template/assets/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('login-template/assets/css/form-elements.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('login-template/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
    <link rel="shortcut icon" href="{{ URL::asset('img/small-icon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/aos.css') }}">
</head>
<body>
    <script type="text/javascript">
        setInterval(showHome , 2000);
        setInterval(showAboutUs , 1300);
        setInterval(showMenu , 1000);
        setInterval(showReserve , 1500);
        setInterval(showContact , 1200);
        setInterval(showLogo , 2500);
        setInterval(showLogout ,  3000);

        function showHome() {
            $('#home-nav').removeClass('top-home');
            $('#home-nav').addClass('animated bounceInDown home-nav');
        }

        function showAboutUs() {
            $('#about-us-nav').removeClass('top-home');
            $('#about-us-nav').addClass('animated bounceInDown about-us-nav');
        }

        function showMenu() {
            $('#menu-nav').removeClass('top-home');
            $('#menu-nav').addClass('animated bounceInDown menu-nav');
        }

        function showReserve() {
            $('#reservation-nav').removeClass('top-home');
            $('#reservation-nav').addClass('animated bounceInDown reservation-nav');
        }

        function showContact() {
            $('#contact-us-nav').removeClass('top-home');
            $('#contact-us-nav').addClass('animated bounceInDown contact-us-nav');
        }

        function showLogo() {
            $('#final-logo').removeClass('top-home');
            $('#final-logo').addClass('animated fadeIn final-logo');
        }

        function showLogout() {
            $('#logout-border-nav').removeClass('top-home');
            $('#logout-border-nav').addClass('animated fadeIn logout-border-nav');
        }
    </script>

    <img src="{{ URL::asset('img/nav-border.png') }}" class="nav-border-login">

    @if (!Auth::guest())
        <a class="navbar-brand" href="{{ url('') }}">
            <img src="{{ URL::asset('img/final-logo.png') }}" id="final-logo" class="top-home">
        </a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <img src="{{ URL::asset('img/logout-border.png') }}" id="logout-border-nav" class="top-home">
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endif

    <div id="app">
        <nav class="navbar navbar-static-top">
            @if (Auth::guest()) 
            
            @else
             <div class="container-fluid">
                <ul class="nav navbar-nav navbar-right">
                    <a class="navbar-brand" href="{{ url('') }}">
                        <img src="{{ URL::asset('img/about-us.png') }}" id="about-us-nav" class="top-home">
                    </a>
                    <a class="navbar-brand" href="{{ url('') }}">
                        <img src="{{ URL::asset('img/menu.png') }}" id="menu-nav" class="top-home">
                    </a>
                    <a class="navbar-brand" href="{{ url('') }}">
                        <img src="{{ URL::asset('img/reservation.png') }}" id="reservation-nav" class="top-home">
                    </a>
                    <a class="navbar-brand" href="{{ url('') }}">
                        <img src="{{ URL::asset('img/contact-us.png') }}" id="contact-us-nav" class="top-home">
                    </a>
                    @endif
                </ul>
            </div>
        </nav>
        @yield('content')
    </div>
</body>
</html>
