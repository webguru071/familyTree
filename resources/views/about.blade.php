@extends('layouts.app')
@section('title', $title)

@section('main_body')

    <section class="static-cm-content bg-grey-st about-mymily-hero">
        <div class="container">
            <div class="row">
                <div class="col-xs-12" ng-controller="AppController">
                    <div class="static-page-content about-mymily">
                        <div class="circle-wht">
                        </div>
                        <img src="https://mymily.com/img/mymily-about.png" class="img-responsive center-block" alt="About mymily">
                        <div class="text-center wht-and-how">
                            <h2>
                                About mymily
                            </h2>
                            <p>
                                mymily is a family media where you* can live, store and re-live your family moments. It
                                is a platform exclusively for you and your family to share, care and reminisce your
                                intimate moments. It wouldn’t be wrong to say “a virtual home for your real family”.
                            </p>
                            <p>
                                *You can be a dad, a mom, a grandma, a grandpa, an aunt, an uncle, a sister, a brother
                                and/or a cousin. This platform is for everyone in a family.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="static-cm-content bg-wht why_mymily">
        <div class="container">
            <div class="static-page-content">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <h2 class="text-center">
                            Why mymily
                        </h2>
                    </div>
                </div>
                <div class="why-mymily-content">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h3>
                                we are far apart
                            </h3>
                            <p>
                                We realize that most of us, regardless of living or not living with our family, have
                                grown so distant with them owing to the pressure of earning or preparing to earn our
                                livelihood.
                            </p>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <img src="https://mymily.com/img/mymily-apart-by-location.png" class="img-responsive img-location"
                                alt="mymily-family-location">
                        </div>
                    </div>
                </div>
                <div class="why-mymily-content">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="family-memories">
                                <div class="circle-wht circle-grey">
                                </div>
                                <img src="https://mymily.com/img/mymily-important-memories.png" class="img-responsive img-memories"
                                    alt="mymily-important-memories">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <h3>
                                We miss on important memories
                            </h3>
                            <p>
                                Although there are so many social media at our disposal to store all the digital
                                memories we want, we still tend to miss out on our private family memories. We don’t
                                feel that coziness to share our sometimes “embarassing” and/or “proud” memories with
                                our family anywhere and everywhere.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="why-mymily-content">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="lg-margin-top">
                                <h3>
                                    How long can you trace back to your family ancestral lineage?
                                </h3>
                                <p>
                                    To your great grandfather? To your great great grandfather? What if there was a
                                    recorded family tree for your future generations to always look back on their
                                    lineage and all the memories associated.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <img src="https://mymily.com/img/mymily-about-family-tree.png" class="img-responsive center-block"
                                alt="mymily-about-family-tree">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="static-cm-content bg-grey-st">
        <div class="container">
            <div class="static-page-content">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="text-center mymily-feature">
                            <h2>
                                What we can do on <span>mymily</span>
                            </h2>
                            <h5>
                                Well, everything that helps you come closer with your family
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="milys-tagline">
                            <i class="fa fa-comments-o" aria-hidden="true"></i>
                            <h6>
                                One to one chat
                            </h6>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="milys-tagline">
                            <i class="fa fa-bullhorn" aria-hidden="true"></i>
                            <h6>
                                Posts and shoutouts
                            </h6>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="milys-tagline">
                            <i class="fa fa-code-fork" aria-hidden="true"></i>
                            <h6>
                                Family tree
                            </h6>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="milys-tagline">
                            <i class="fa fa-bell" aria-hidden="true"></i>
                            <h6>
                                Reminders
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="milys-tagline">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <h6>
                                Family Member Profiles
                            </h6>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="milys-tagline">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <h6>
                                Custom Groups
                            </h6>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="milys-tagline">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <h6>
                                Journal
                            </h6>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="milys-tagline">
                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                            <h6>
                                Albums
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="milys-tagline">
                            <p class="text-center">
                                and much more...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="lets-started">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="center-block app-link-section">
                                <div class="">
                                    <a href="signup.html" class="btn-cm-rounded">Sign up</a>
                                </div>
                                <h5>
                                    ALSO AVAILABLE ON APP STORE AND GOOGLE PLAY
                                </h5>
                                <div class="download-store">
                                    <a href="#" target="_blank">
                                        <img src="https://mymily.com/img/apple_store_img.svg" alt="Apple store">
                                    </a>
                                    <a href="#" target="_blank">
                                        <img src="https://mymily.com/img/play_store.png" class="google-play" alt="Play store">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <img src="https://mymily.com/img/mymily-getting-started.png" class="img-responsive img-mymily-get-started"
                                alt="mymily-getting-started">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
