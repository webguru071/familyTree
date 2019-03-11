@extends('layouts.app')
@section('title', $title)

@section('main_body')

<section class="req-access-sec req-access-content bg-light-grey" ng-controller="MasterSignupController as Signup" scroll-section="signup-sec">
    <div class="container" ng-init="Signup.init('1')">
        <div class="md-container" ng-controller="AppController">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="start-your-family" ng-controller="PageCommonController as Common">
                        <h2>
                            Sign up now
                        </h2>
                        <p>
                            Start your mymily family and don’t miss out on the intimate family moments!
                        </p>
                        <div class="video-signup">
                            <div class="tab-pane fade in active embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" id="video_iframe" width="100%" height="400" src="https://www.youtube.com/embed/Fd5nfvl20MY?rel=0&autoplay=1&amp;showinfo=0&mute=1" frameborder="0" gesture="media"
                                  allow="encrypted-media" allowfullscreen></iframe>
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
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 profile-completed show_element" element-init="">
                    <form class="static-page-form request-access-form ng-pristine ng-invalid ng-invalid-required" name="request-access-form" method="post" action="{{route('signup')}}" id="signupForm">
                      @csrf
                        <div class="form-group">
                            <label for="name">Name*</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" required="" name="name" value="{{old('name')}}">
                        </div>

                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email address" required="" name="email" value="{{old('email')}}">
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="phone">Phone*</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="Enter your phone" required="" name="phone" value="{{old('phone')}}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group no-margin-imp">
                                    <label>Gender*</label>
                                </div>
                                <div class="custom-radio">
                                    <label>
                                        <input type="radio" name="gender" id="male" value="male"><br>Male
                                        <img src="https://mymily.com/img/signup/male.png" class="img-responsive">
                                    </label>
                                    <label>
                                        <input type="radio" name="gender" id="female" value="female"><br> Female
                                        <img src="https://mymily.com/img/signup/female.png" class="img-responsive">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label>Set a username*</label>
                                <input autocomplete="off" type="text" class="form-control" id="username" name="username" value="{{old('username')}}" placeholder="Enter username" required="" >
                            </div>
                        </div>
                        <div class="form-group form-field">
                            <div class="show-hide-input">
                                <label for="email">Password*</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter password" required="">
                            </div>
                        </div>
                        <div class="checked-box">
                            <label>
                                <input type="checkbox" name="checked" required="" ng-model="Signup.signupService.signUpData.toc" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" aria-invalid="true">
                                <span>
                                    I agree to the <a target="_blank" href="">terms and conditions</a> of mymily platform.
                                    <span>
                                    </span></span></label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn-rounded">
                                <span ng-if="!helper.activeAction" class="ng-scope">
                                    Sign Up
                                </span>

                            </button>
                        </div>
                        <div class="">
                            <span>
                                Already a member? <a href="{{route('signinForm')}}">
                                    Sign in
                                </a>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="message"></div>

<script src="{{asset('js/signup.js')}}"></script>

@endsection
