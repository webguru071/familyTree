<html class="no-js gr__mymily_com ng-scope" lang="" ng-app="app">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Source+Sans+Pro:300,400,600,700"
        rel="stylesheet">
    <link media="all" type="text/css" rel="stylesheet" href="https://mymily.com/build/vendor-U35DR7NsSr.css">
    <link rel="stylesheet" type="text/css" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://mymily.com/build/app-U35DR7NsSr.css">
    <link rel="shortcut icon" href="https://mymily.com/img/favicon.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

<body class="hold-transition sidebar-mini" data-gr-c-s-loaded="true">
    <header class="home-header-sec static-header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-9">
                    <a class="logo logo-tm" href="{{route('index')}}">mynasab</a>
                </div>
                <div class="col-md-9 hidden-xs hidden-sm">
                    <nav>
                        <ul>
                            <li>
                                <a href="{{route('signinForm')}}">Sign In</a>
                            </li>

                            <li>
                                <a href="{{route('about')}}">About</a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}">Contact</a>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div class="col-xs-3 hidden-lg hidden-md header-section">
                    <div class="navbar-header">
                        <button data-toggle="collapse-side" data-target=".side-collapse" type="button" class="navbar-toggle">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="side-collapse" id="side-collapse">
                        <nav class="header-navigation navbar-collapse no-padding">
                            <ul class="list-inline list-unstyled no-margin">
                                <li class="nav-item">
                                    <div class="text-right">
                                        <a id="close_menu" class="btn btn-xs">
                                            ✗
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a href="{{route('signinForm')}}">Sign In</a>
                                </li>
                                <li>
                                    <a href="{{route('about')}}">About</a>
                                </li>
                                <li>
                                    <a href="{{route('contact')}}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

@yield('main_body')

<footer class="home-footer-section">
    <div class="container">
        <div class="footer-container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <nav>
                        <span>mymily</span>
                        <ul>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <nav>
                        <span>Company</span>
                        <ul>
                            <li>
                                <a href="#">Privacy</a>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <nav>
                        <span>Download App</span>
                        <ul>
                            <li>
                                <a href="#">Google
                                    Play</a>
                            </li>
                            <li>
                                <a href="#">App
                                    Store</a>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div class="col-md-3 col-xs-12">
                    <nav>
                        <span>Support</span>
                        <ul>
                            <li>
                                <a href="tel:+91 89700 27272" class="support">
                                    <i class="icon ion-android-call"></i>+91 89700 27272
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-ticket" aria-hidden="true"></i>Raise a support ticket
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="lower-footer">
                    <a href="" class="item-nodisplay">
                        <img src="" class="logo logo-tm">
                    </a>
                    <p class="center">mynasab 2019. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://mymily.com/build/vendor-U35DR7NsSr.js"></script>
<script src="https://mymily.com/build/redlof-U35DR7NsSr.js"></script>
<script src="https://mymily.com/build/page-U35DR7NsSr.js"></script>
<script src="https://mymily.com/js/echoza.js"></script>
</body>

</html>
