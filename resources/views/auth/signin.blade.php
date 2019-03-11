@extends('layouts.app')
@section('title', $title)

@section('main_body')
    <section class="cm-static-content sign-in-page ng-scope" ng-app="app" ng-controller="MemberAccountController as member">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="static-page-form signin-form-wrapper">
                        <h3>Sign In</h3>
                        <div class="form-holder show_element" element-init="">
                            <form ng-submit="member.signin(member.signInData)" class="ng-invalid ng-invalid-required ng-dirty ng-valid-parse"
                                action="{{route('signin')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                        name="username" ng-model="member.signInData.username" placeholder="Your Username"
                                        required="" aria-invalid="true">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input ng-attr-type="password" class="form-control login-pass ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                        name="password" ng-model="member.signInData.password" placeholder="Your Password"
                                        required="" type="password" aria-invalid="true">
                                </div>
                                <div class="checked-box noselect">
                                    <label>
                                        <input type="checkbox" name="checked" id="showHidePass" ng-model="showPassword"
                                            class="ng-valid ng-dirty ng-valid-parse ng-touched ng-empty" aria-invalid="false">
                                        <span class="show_password_action">Show Password</span>
                                    </label>
                                </div>
                                <div class="form-btn-spacing action_spans_signin">
                                    <div class="row">
                                        <div class="col-sm-5 col-xs-12">
                                            <button ng-class="{'disable-action' : helper.activeAction}" ng-disabled="helper.activeAction"
                                                type="submit" class="theme-btn bg-theme-btn md-btn-theme theme-btn-spinner">
                                                <!-- ngIf: !helper.activeAction --><span ng-if="!helper.activeAction"
                                                    class="ng-scope">
                                                    Sign in
                                                </span><!-- end ngIf: !helper.activeAction -->
                                                <!-- ngIf: helper.activeAction -->
                                            </button>
                                        </div>
                                        <div class="col-sm-7 col-xs-12">
                                            <a class="forget-pass" href="#">Forgot
                                                Password?</a>
                                            <a class="forget-pass" href="{{route('signupForm')}}">Don't have an
                                                account? Sign up</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
