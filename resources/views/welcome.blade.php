<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Daily Bread - Serving what's hot everyday </title>

        <!-- Scripts --> 
        <script src="{{ URL::asset('login-template/assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('js/script.js') }}"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('login-template/assets/font-awesome/css/font-awesome.min.css') }}">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('login-template/assets/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('login-template/assets/css/form-elements.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
        <style>

            .scroll {
                overflow: hidden;
            }

            .center {
                margin: auto;
                text-align: center;
                margin-top: 20px !important;
            }
            .welcome-back {
                width: 100% !important;
                height: 100% !important;
                position: fixed !important;
                left: 0px !important;
                top: 0px !important;
                z-index: -10 !important;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
        
            .nav-border {
                width: 100% !important;
                margin-top: -5px;
                z-index: 10000 !important;
                position: absolute;
            }

            .lets-go-nav {
                width: 20% !important;
                height: auto !important;
                top: 20px !important;
                position: absolute;
                right: 5px !important;
            }

            .back-to-shop {
                width: 20% !important;
                height: auto !important;
                top: 20px !important;
                position: absolute;
                right: 5px !important;
            }

            .daily-bread {
                margin-top: -20px;
            }

            .top-view {
                display: none;
            }

            .bottom-view {
                display: none;
            }

            .object-bg {
                position: absolute !important;
                left: 0px !important;
                bottom: 0px !important;
            }

/* 25% */
            @media (min-width: 4422px) and (max-width: 5864px) {
                .lets-go-nav { margin-top: 250px !important; right: -150px !important;}
                .daily-bread { margin-top: 200px !important}
            }
/* 33% */
            @media (min-width: 2979px) and (max-width: 4421px) {
                .lets-go-nav { margin-top: 185px !important; right: -180px !important;}
                .daily-bread { margin-top: 150px !important}
            }
/* 50% */
            @media (min-width: 2257px) and (max-width: 2978px) {
                .lets-go-nav { margin-top: 95px !important; right: -80px !important;}
                .daily-bread { margin-top: 100px !important}
            }
/* 67% */
            @media (min-width: 1947px) and (max-width: 2256px) {
                .lets-go-nav { margin-top: 50px !important; right: -80px !important;}
                .daily-bread { margin-top: 50px !important}
            }
/* 75% */
            @media (min-width: 1641px) and (max-width: 1946px) {
                .lets-go-nav { margin-top: 35px !important; right: -20px !important;}
                .daily-bread { margin-top: 0px !important}
            }
/* 90% */
            @media (min-width: 1537px) and (max-width: 1640px) {
                .lets-go-nav { margin-top: 20px !important;}
                .daily-bread { margin-top: -50px !important}
            }
/* 110% */
            @media (min-width: 1200px) and (max-width: 1407px) {
                .lets-go-nav { margin-top: 10px !important; right: 35px !important; width: 18% !important}
                .daily-bread { margin-top: -60px !important}
                .object-bg { width: 40% !important;}
            }
/* 125% */
            @media (min-width: 992px) and (max-width: 1199px) {
                .lets-go-nav { margin-top: 10px !important; right: 15px !important; width: 20% !important}
                .daily-bread { margin-top: -60px !important}
                .object-bg { width: 40% !important;}
            }
/* 150% */
            @media (min-width: 880px) and (max-width: 991px) {
                .lets-go-nav { margin-top: 5px !important; right: -10px !important; width: 22.5% !important}
                .daily-bread { margin-top: -40px !important}
                .object-bg { width: 40% !important;}
            }
/* 175% */
            @media (min-width: 768px) and (max-width: 879px) {
                .lets-go-nav { margin-top: -10px !important; right: 0px !important; width: 25% !important}
                .daily-bread { margin-top: -20px !important; width: 80% !important; height: auto;}
                .object-bg { width: 40% !important;}
            }
/* 200% */
            @media (min-width: 650px) and (max-width: 767px) {
                .lets-go-nav { margin-top: -20px !important; right: 30px !important; width: 27.5% !important}
                .daily-bread { margin-top: -10px !important; width: 80% !important; height: auto;}
                .object-bg { width: 40% !important;}
            }
/* 250% */
            @media (min-width: 533px) and (max-width: 649px) {
                .lets-go-nav { margin-top: -15px !important; right: 30px !important; width: 27.5% !important}
                .daily-bread { margin-top: -20px !important; width: 80% !important; height: auto;}
                .object-bg { width: 40% !important;}
            }
/* 300% */  
            @media (min-width: 414px) and (max-width: 532px) {
                .lets-go-nav { margin-top: -15px !important; right: 30px !important; width: 30% !important}
                .daily-bread { margin-top: -10px !important; width: 70% !important; height: auto;}
                .object-bg { width: 40% !important;}
            }
/* 400% */
            @media (min-width: 297px) and (max-width: 415px) {
                .lets-go-nav { margin-top: -15px !important; right: 20px !important; width: 32.5% !important}
                .daily-bread { margin-top: -35px !important; width: 80% !important; height: auto;}
                .object-bg { width: 40% !important;}
            }
/* 500% */
            @media (min-width: 179px) and (max-width: 297px) {
                .lets-go-nav { margin-top: -17px !important; right: 0px !important; width: 35% !important}
                .daily-bread { margin-top: -40px !important; width: 80% !important; height: auto;}
                .object-bg { width: 40% !important;}
            }

        </style>
    </head>
<body class="scroll">

<script type="text/javascript">
    setInterval(showName , 2000);
    setInterval(showNav, 3000);
    setInterval(showObject, 4000);
    setInterval(showBackShop , 3000);

    function showName() {
        $('#name').addClass('animated pulse');
    }

    function showNav() {
        $('#lets-go').removeClass('top-view');
        $('#lets-go').addClass('animated bounceInDown lets-go-nav');
    }

    function showObject() {
        $('#object-bg').removeClass('bottom-view');
        $('#object-bg').addClass('animated bounceInUp object-bg')
    }

    function showBackShop() {
        $('#back-to-shop').removeClass('top-view');
        $('#back-to-shop').addClass('animated bounceInDown back-to-shop')
    }

</script>

    <img src="{{ URL::asset('img/nav-border.png') }}" class="nav-border">
    <div class="container">   
        <div id="app">
            <nav class="navbar navbar-static-top">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @if (Auth::check())
                                <span>
                                    <a href="{{ url('/home') }}">
                                        <img src="{{ URL::asset('img/back-to-shop.png') }}" id="back-to-shop" class="top-view">
                                    </a>
                                </span>
                            @else
                                <span>
                                    <a href="{{ url('/login') }}">
                                        <img src="{{ URL::asset('img/lets-go-nav.png') }}" id="lets-go" class="top-view">
                                    </a>
                                </span>
                            @endif
                    @endif
            </nav>
            <div class="center">
                <img src="{{ URL::asset('img/name.png') }}" width="100%" height="auto" class="daily-bread" id="name">
            </div>
        </div>
        <img class="welcome-back" src="{{ URL::asset('img/drawing-bg.png') }}">
    </div>
        <img src="{{ URL::asset('img/object-bg.png') }}" class="bottom-view" id="object-bg">

    <script src="{{ URL::asset('login-template/assets/js/jquery-1.11.1.min.js') }}"></script>
</body>
</html>
