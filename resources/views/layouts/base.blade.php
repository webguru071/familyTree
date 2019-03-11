<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <meta name="csrf_token" content="UEqvVjK7HbzcxgNRShdcZZaW4iUmBNeJ6JtdGaNY" />
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#0095eb">
    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://mymily.com/build/vendor-U35DR7NsSr.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://mymily.com/build/app-U35DR7NsSr.css">
    <link rel="shortcut icon" href="https://mymily.com/img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

<body class="hold-transition sidebar-mini body_scroll">
    <header class="main-header">
        <div class="container-fluid" ng-init="Home.listenToOwnChannel(1107, 0, 0)">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-xs-12 custom-col9 pd-right-no">
                    <h1><a class="logo" href="">mymily</a></h1>
                    <nav class="left-nav hidden-xs hidden-sm">
                        <ul class="pd-left-ul20">
                            <li>
                                <a id="step-home" href="{{route('home')}}" class="active">
                                    <i class="fa fa-home" aria-hidden="true"></i><br>
                                    <span>
                                        Home
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a id="step-profile" href="{{route('profile')}}" class="icon-wrap ">
                                    <i class="fa fa-user" aria-hidden="true"></i><br>
                                    <span>
                                        Profile
                                    </span>
                                    <a href="" class="" ng-if="Home.profile_update==false" uib-tooltip="Please, complete your profile" tooltip-placement="bottom" tooltip-class="customClass">
                                        <i class="fa fa-asterisk asterick" aria-hidden="true"></i>
                                    </a>
                                </a>
                            </li>
                            <li>
                                <a id="step-family" href="{{route('family')}}" class="">
                                    <i class="fa fa-code-fork" aria-hidden="true"></i><br>
                                    <span>
                                        My Family
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a id="step-chats" href="{{route('chat')}}" class=" chat-item pos-rel">
                                    <i class="fa fa-comments-o" aria-hidden="true"></i><br>
                                    <span>
                                        Chats
                                    </span>
                                    <span class="unread-chatcount" ng-bind="Home.profileService.unread_messages" ng-if="Home.profileService.unread_messages>0">
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3 col-xs-12 custom-col3 hidden-xs hidden-sm" ng-app="app">
                    <nav class="right-nav" ng-controller="NotificationController as Notification">
                        <ul>

                            <li>
                                <div class="dropdown">
                                    <a href="" ng-init="Notification.loadLimitedNotifications()" class="notification-block" data-toggle="dropdown">
                                        <i class="icon fa fa-bell" aria-hidden="true"></i>
                                        <span class="notification_counter" ng-if="Home.profileService.unseen_notifications>0" ng-bind="Home.profileService.unseen_notifications">
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                        <li ng-click="Notification.redirect(notificationLimit)" class="notification-list-header" ng-repeat="notificationLimit in Notification.notificationService.limitlist"
                                          ng-class="{'seen_notification': !notificationLimit.is_seen}">
                                            <img class="user-image" src="https://mymily.com/img/mymily-profile.png" alt="User">
                                            <h6>
                                                <a ng-bind="notificationLimit.title">
                                                </a>
                                            </h6>
                                            <p>
                                                <span ng-bind="notificationLimit.created_at">
                                                </span>
                                            </p>
                                        </li>
                                        <li class="view_all"><a href="">View All</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img
                                      src="{{asset(Auth::user()->img_address)}}"
                                      alt="User" class="user-dropdown-img">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right cm-profile-dropdown">
                                    <div>
                                        <li><a href="">Profile</a></li>
                                        <li>
                                          <a href="{{route('logout')}}" id="logoutRoute">Signout</a></li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xs-3 hidden-lg hidden-md header-section">
                    <div class="navbar-header inner-navbar-header">
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
                                    <ul class="mob-menu-header clearfix">
                                        <div class="first-header">
                                            <ul class="clearfix">
                                                <li>
                                                    <a href class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img
                                                          src="https://static-mymily.s3.ap-south-1.amazonaws.com/userphotos/mymily-default-male.png?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAIV6PDO76KJKGLFAA%2F20190304%2Fap-south-1%2Fs3%2Faws4_request&X-Amz-Date=20190304T044122Z&X-Amz-SignedHeaders=host&X-Amz-Expires=12000&X-Amz-Signature=94d257ce6981f78210167441e922553953fe0b996ce8845059fcc436400f5129"
                                                          alt="User" class="user-dropdown-img">
                                                    </a>
                                                </li>
                                                <li class="pull-right">
                                                    <a id="close_menu" class="btn btn-xs">
                                                        &#x2717;
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <li class="pull-right notify">
                                            <a href="" class="mobile_notification">
                                                <i class="icon fa fa-bell" aria-hidden="true"></i><span>
                                                    Notification
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="" class="active">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>
                                            Home
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="icon-wrap ">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <span>
                                            Profile
                                        </span>
                                    </a>
                                </li>


                                <li>
                                    <a href="" class="">
                                        <i class="fa fa-code-fork" aria-hidden="true"></i>
                                        <span>
                                            My Family
                                        </span>
                                    </a>
                                </li>


                                <li>
                                    <a href="" class=" chat-item pos-rel">
                                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                                        <span>
                                            Chats
                                        </span>
                                        <span class="unread-chatcount" ng-bind="Home.profileService.unread_messages" ng-if="Home.profileService.unread_messages>0">
                                        </span>
                                    </a>
                                </li>


                                <li>
                                    <a href="">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                                        <span>
                                            Signout
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="app-footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <nav class="site-footer">
                        <ul class="">
                            <li>
                                <a href="https://mymily.com/about" target="_blank">About</a>
                            </li>
                            <li>
                                <a href="https://mymily.com/terms" target="_blank">Terms</a>
                            </li>
                            <li>
                                <a href="https://mymily.com/privacy" target="_blank">Privacy</a>
                            </li>
                            <li>
                                <a href="https://mymily.com/faqs" target="_blank">Faqs</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="footer-span clearfix">
                        <span class="pull-right">&copy;2019 mymily. All rights reserved.</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script src="https://mymily.com/build/vendor-U35DR7NsSr.js"></script>
    <script src="https://mymily.com/build/redlof-U35DR7NsSr.js"></script>
    <script src="https://mymily.com/build/role-member-U35DR7NsSr.js"></script>
</body>

</html>
