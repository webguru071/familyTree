@extends('layouts.app')
@section('title', $title)

@section('main_body')

    <section class="cm-static-content section-spacing section-spacing-sm" ng-app="app" ng-controller="AppController">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-xs-12">
                    <div class="static-page-content contact-form">
                        <h2>
                            We would love to hear from you !
                            <br>
                        </h2>
                        <h4>
                            Share us the message & our team is all ears !!
                        </h4>
                        <ul class="list">
                            <li>
                                Your word of appreciation would bring in lots of happiness to team.
                            </li>
                            <li>
                                Have a feature suggestion ? That's great, you may send it here and you never know we
                                would call you for a coffee and listen to you on the new feature.
                            </li>
                            <li>
                                Have a feedback on existing features ! Bring in change by sharing your feedback here.
                                We make sure things are addressed.
                            </li>
                        </ul>
                        <div class="social-share-contact">
                            <nav class="links">
                                <ul class="list-unstyled list-inline">
                                    <li>
                                        <a target="_blank" href="https://plus.google.com/106941936335411398841">
                                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.facebook.com/mymilyapp">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://twitter.com/mymilyapp">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.instagram.com/mymilyapp/">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.youtube.com/channel/UCkWdAZ0XDYM1Q8lsOCxDQfA">
                                            <i class="fa fa-youtube" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1 col-xs-12">
                    <div class="form-box">
                        <form name="contact_form" ng-submit="create('contact/send', formData, 'contact_form')" class="form-horizontal contact-form">
                            <div class="form-group">
                                <div class="col-md-6 col-xs-12">
                                    <label>
                                        First Name *
                                    </label>
                                    <input validator="required" valid-method="blur" type="text" class="form-control" id="first_name"
                                        placeholder="First Name" ng-model="formData.first_name" required>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <label>
                                        Last Name *
                                    </label>
                                    <input validator="required" valid-method="blur" type="text" class="form-control" id="last_name"
                                        placeholder="Last Name" ng-model="formData.last_name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-xs-12">
                                    <label>
                                        Email *
                                    </label>
                                    <input validator="required" valid-method="blur" type="email" class="form-control"
                                        id="email" placeholder="Email" ng-model="formData.email" required>
                                </div>
                            </div>
                            <div class="form-group" ng-init="formData.reason = 'appreciation' ">
                                <div class="col-md-12 col-xs-12">
                                    <label>
                                        Reason *
                                    </label>
                                    <select class="form-control" required ng-model="formData.reason">
                                        <option value="appreciation">
                                            Appreciation
                                        </option>
                                        <option value="suggestion">
                                            Suggestion
                                        </option>
                                        <option value="complaint">
                                            Feedback
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-xs-12">
                                    <label>
                                        Message *
                                    </label>
                                    <textarea validator="required" valid-method="blur" rows="6" class="form-control" id="email"
                                        placeholder="Message" ng-model="formData.message" required></textarea>
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="theme-btn bg-theme-btn md-btn-theme">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div ng-switch="" on="allowHtml">
      <div ng-switch="" on="allowHtml">
          <div ng-switch-when="true" class="toast-message" ng-bind-html="message">
            This email is already used in the platform<br>
            Password should be at least 6 characters<br>
            Phone should not be less than 10 digits<br>
            Please provide a valid phone<br>
          </div>
        </div>
      </div>
@endsection
