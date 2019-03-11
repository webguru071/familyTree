@extends('layouts.app')
@section('title', $title)

@section('main_body')
    <section class="home-cm-sec home-hero-sec">
        <div class="">
            <div class="home-hero-sec-banner">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h2>
                        A family media platform
                    </h2>
                    <p>
                        A platform exclusively for you and your family to share, care and reminisce your intimate
                        moments.
                    </p>
                    <a href="{{route('signupForm')}}" class="btn-rounded">
                        Sign up now
                    </a>
                    <span>
                        It's free!
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section class="home-cm-sec home-mymily" ng-controller="PageCommonController as Common">
        <div class="container" ng-init="Common.checkUserBrowser();">
            <div class="row">
                <div class="col-sm-12 col-xs-12">

                    <div class="video">
                        <div class="tab-content video_mymily">
                            <div class="tab-pane fade in active embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" id="video_iframe" width="100%" height="400" src="https://www.youtube.com/embed/Fd5nfvl20MY?rel=0&autoplay=1&amp;showinfo=0&mute=1"
                                    frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <ul class="list-inline" id="video_actions">
                        <li class="active" id="englishSource">
                            <a href="" ng-click="Common.handelVideoShow('english')">English</a>
                        </li>
                        <li id="hindiSource">
                            <a href="" ng-click="Common.handelVideoShow('hindi')">Hindi</a>
                        </li>
                    </ul>
                    <h4>
                        Why mymily
                    </h4>
                    <p>
                        In the modern age of nuclear families, family members are growing apart from each other and are
                        barely aware of their roots and family heritage.
                    </p>
                    <p>
                        mymily helps you bridge this gap and helps you <strong>connect</strong> with all your family
                        members - your parents, siblings, grandparents, cousins, uncles and aunts.
                    </p>
                    <div class="mymily-concept">
                        <img src="https://mymily.com/img/landing_home/mymily-concept-together.png" class="img-responsive center-block"
                            alt="mymily-concept">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-cm-sec mymily-activity hidden-xs">
        <div class="container">
            <div class="activity-container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <h2>
                            Bringing your entire<br> family together
                        </h2>
                    </div>
                </div>
                <div class="entire-family">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="desc">
                                <div class="content">
                                    <div class="heading-tag">
                                        Family Tree
                                    </div>
                                    <h3>
                                        Take a look at how your entire family has grown over generations
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="">
                                <img src="https://mymily.com/img/landing_home/mymily-home-family-tree.png" class="img-responsive family-reuninon"
                                    alt="why-mymily-family-tree">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="entire-family">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="">
                                <img src="https://mymily.com/img/landing_home/mymily-home-album.png" class="img-responsive family-reuninon"
                                    alt="why-mymily-albums">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="desc">
                                <div class="content">
                                    <h3 class="mrgn-lt">
                                        <div class="heading-tag">
                                            Albums
                                        </div><br>
                                        From your great grandpa’s wedding to your great grandson’s first day of school,
                                        all in one place
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="entire-family">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="desc">
                                <div class="content">
                                    <div class="heading-tag">
                                        Chat
                                    </div>
                                    <h3>
                                        Keep the endless family conversation going with the most laughter and fun
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div>
                                <img src="https://mymily.com/img/landing_home/mymily-home-chat.png" class="img-responsive"
                                    alt="why-mymily-chat">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="entire-family">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="">
                                <img src="https://mymily.com/img/landing_home/mymily-home-reminder.png" class="img-responsive family-reuninon"
                                    alt="why-mymily-reminder">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="desc">
                                <div class="content">
                                    <h3 class="mrgn-lt">
                                        <div class="heading-tag">
                                            Reminder
                                        </div><br>
                                        Gives you ample time to think of the most thoughtful presents for your loved
                                        ones
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="entire-family">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="desc">
                                <div class="content">
                                    <div class="heading-tag">
                                        Journal
                                    </div>
                                    <h3>
                                        Your Dadi’s secret recipe now stays the family’s best-kept secret
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="">
                                <img src="https://mymily.com/img/landing_home/mymily-home-journal.png" class="img-responsive family-reuninon"
                                    alt="why-mymily-journal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-cm-sec mymily-activity hidden-lg hidden-md hidden-sm">
        <div class="container">
            <div class="activity-container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <h2>
                            Bringing your entire<br> family together
                        </h2>
                    </div>
                </div>
                <div class="entire-family">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="desc">
                                <div class="content">
                                    <div class="heading-tag">
                                        Family Tree
                                    </div>
                                    <h3>
                                        Take a look at how your entire family has grown over generations
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="">
                                <img src="https://mymily.com/img/landing_home/mymily-home-family-tree.png" class="img-responsive family-reuninon"
                                    alt="why-mymily-family-tree">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="entire-family">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="desc">
                                <div class="content">
                                    <div class="heading-tag">
                                        Album
                                    </div>
                                    <h3 class="mrgn-lt">
                                        From your great grandpa’s wedding to your great grandson’s first day of school,
                                        all in one place
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="">
                                <img src="https://mymily.com/img/landing_home/mymily-home-album.png" class="img-responsive family-reuninon"
                                    alt="why-mymily-album">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="entire-family">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="desc">
                                <div class="content">
                                    <div class="heading-tag">
                                        Chat
                                    </div>
                                    <h3 class="mrgn-lt">
                                        Keep the endless family conversation going with the most laughter and fun
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div>
                                <img src="https://mymily.com/img/landing_home/mymily-home-chat.png" class="img-responsive"
                                    alt="why-mymily-chat">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="entire-family">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="desc">
                                <div class="content">
                                    <div class="heading-tag">
                                        Reminder
                                    </div>
                                    <h3>
                                        Gives you ample time to think of the most thoughtful presents for your loved
                                        ones
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="">
                                <img src="https://mymily.com/img/landing_home/mymily-home-reminder.png" class="img-responsive family-reuninon"
                                    alt="why-mymily-reminder">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="entire-family">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="desc">
                                <div class="content">
                                    <div class="heading-tag">
                                        Journal
                                    </div>
                                    <h3>
                                        Your Dadi’s secret recipe now stays the family’s best-kept secret
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="">
                                <img src="https://mymily.com/img/landing_home/mymily-home-journal.png" class="img-responsive family-reuninon"
                                    alt="why-mymily-journal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="req-access-content bg-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="text-center">
                        <div class="heading-tag">
                            TESTIMONIALS
                        </div>
                        <h2>
                            Here is what mymily users have to say
                        </h2>

                        <div class="profile-owner flexslider flexslider-testimonial">
                            <ul class="slides">
                                <li class="testimonial">
                                    <img src="https://mymily.com/img/signup/mymily-Dhruv-Jadav.jpg" class="img-responsive img-circle"
                                        alt="Krishna raj sharma">
                                    <h5>
                                        Dhruv Jadav
                                    </h5>
                                    <h6>
                                        Gandhinagar
                                    </h6>
                                    <p>
                                        "The Idea is unique and it is boon for not only those who are living away from
                                        the family but also for those who are living with the family but not able to
                                        connect"
                                    </p>
                                </li>
                                <li class="testimonial">
                                    <img src="https://mymily.com/img/signup/shubha-anand-mymily-family-media-platform.jpg"
                                        class="img-responsive img-circle" alt="Krishna raj sharma">
                                    <h5>
                                        Shuba Anand,
                                    </h5>
                                    <h6>
                                        Bangalore
                                    </h6>
                                    <p>
                                        "I understand the concept of mymily and see the need for a family centric app.
                                        I find the platform pretty attractive and i like it right from my first
                                        interaction. The family tree feature is pretty exciting and I can't wait to
                                        have my entire family on board. I will definitely recommend mymily to
                                        everybody."
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="req-access-content cta-sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="text-center">
                        <h2>
                            Take the first step to reconnect with your family.
                        </h2>
                        <a href="{{route('signupForm')}}" class="btn-rounded">
                            Sign Up Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
