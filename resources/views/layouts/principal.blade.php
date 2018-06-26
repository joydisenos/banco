<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bank</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <!-- Bootstrap -->
        <script src="{{asset('js/modernizr.custom.js')}}"></script>
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/jquery.fancybox.css')}}" rel="stylesheet">
        <link href="{{asset('css/flickity.css')}}" rel="stylesheet" >
        <link href="{{asset('css/animate.css')}}" rel="stylesheet">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
        <link href="{{asset('css/styles.css')}}" rel="stylesheet">
        <link href="{{asset('css/queries.css')}}" rel="stylesheet">
        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- open/close -->
        @yield('content')


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="footer-logo">
                        <!--<img src="img/logo-blue.png" alt="Footer Logo Blue">-->
                        Bank
                        </h1>
                        <p>A bank System <a href="{{url('/')}}"><em>Bank</em></a></p>
                    </div>
                    <div class="col-md-7">
                        <ul class="footer-nav">
                            <li><a href="#about">About</a></li>
                            <li><a href="#features">Features</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <div class="overlay overlay-boxify">
            <nav>
                <ul>
                    <li><a href="#about"><i class="fa fa-heart"></i>About</a></li>
                    <li><a href="#features"><i class="fa fa-flash"></i>Features</a></li>
                </ul>
                @guest
                <ul>
                    <li><a href="{{url('/register')}}"><i class="fa fa-user"></i>Register</a></li>
                    <li><a href="{{url('/login')}}"><i class="fa fa-sign-in"></i>Login</a></li>
                </ul>
                @else
                <ul>
                    <li><a href="{{url('/home')}}"><i class="fa fa-sign-in"></i>My Bank</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Log Out</a></li>
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                </form>
                @endguest
            </nav>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/min/toucheffects-min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/flickity.pkgd.min.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/retina.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/min/scripts-min.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
