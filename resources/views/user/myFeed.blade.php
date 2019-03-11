@extends('layouts.base')

@section('title', $title)

@section('content')

<div class="main-content-wrapper">
    <div class="container">
        <div class="main-section-container">
            <div class="row">
                <div class="col-md-3 col-xs-12 hidden-xs hidden-sm">
                    <aside class="eq-col mm">
                        <div class="card profile-card">
                            <div class="pro-bg-image" style="background: url(https://mymily.com/img/mymilyuserprofilebanner.jpg) no-repeat; background-size: cover; background-position: center;">
                                <div class="img-overlay"></div>
                                <a href="" class="view-action">
                                    <i class="ion-ios-eye" aria-hidden="true"></i> Profile
                                </a>
                                <a href="" class="edit-action">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </a>
                            </div>
                            <div class="pro-summary">
                                <img
                                  src="{{asset(Auth::user()->img_address)}}"
                                  alt="User" class="user-pro-image">
                                <div class="summary-content">
                                    <p class="usr-name text-ellipsis">
                                        {{Auth::user()->name}}
                                    </p>
                                    <a class="stats-block" href="">
                                        <i class="fa ion-ios-people"></i>
                                        <p class="stats-label">Family</p>
                                        <p>0</p>
                                    </a>
                                    <a class="stats-block" href="">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                        <p class="stats-label">Connections</p>
                                        <p>0</p>
                                    </a>
                                    <a class="stats-block" href="">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        <p class="stats-label">milys</p>
                                        <p>0</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </aside>
                </div>
                <div class="col-md-6 col-xs-12 ng-scope" ng-controller="ExperimentalController as Exp">
                    <div class="fade-out ng-scope show_element ng-hide" ng-controller="ShoutOutController as Post" ng-init="Post.initShoutout();" ng-hide="Post.wallListService.shoutout_list.length === 0" element-init="" aria-hidden="true">
                        <div class="feed-notify-container ng-binding">
                            <ul id="shoutout_cards" class="stack stack--mawar">
                                <!-- ngRepeat: post in Post.wallListService.shoutout_list -->
                            </ul>
                        </div>
                    </div>
                    <div class="mod main-content">
                        <!-- ngInclude: -->
                        <ng-include class="slide ng-scope" id="powertour-demo-box-1" src="Post.addPostService.config.activeTemplate" ng-controller="AddPostController as Post" style="">
                            <div class="cm-card ty-card ty-post-form-card ng-scope">
                                <form method="post" action="/createpost/{{Auth::user()->id}}" id="postCrateForm">
                                  @csrf
                                    <div class="users-blk msg-box">
                                        <div class="my-post-body">
                                            <div class="form-group post-form-group">
                                                <img class="user-image" src="{{asset(Auth::user()->img_address)}}" alt="Woshikuzzaman " width="40" height="40">
                                                <textarea  class="form-control" name="message" placeholder="Lets write something..." id="post-message" style="display: none;"></textarea>
                                                <div class="emoji-wysiwyg-editor form-control" style="height: 69px;" placeholder="Lets write something..." contenteditable="true" id="postBody"></div>
                                            </div>
                                        </div>
                                        <div class="my-post-footer">
                                            <div class="row">
                                                <div class="col-sm-8 col-xs-12 pad-l-0">
                                                    <div class="right-footer">
                                                        <button id="mcreate_album" type="submit" class="theme-btn theme-btn bg-theme-btn pull-right cmn-spinner">
                                                            <span>
                                                                Post
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </ng-include>

                        <div class="mod_tab_nav home_mod_tab_nav">
                            <a href="{{route('home')}}" class="mod_tab mod_tab-home">
                                Family Feed
                            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{{route('my-feed')}}" class="mod_tab mod_tab-home is-active">
                                My feed
                            </a>
                        </div>

                        <div class="feed-container-box">
                            <div class="list-section">


                                  @foreach($posts as $post)

                                    <div class="pf-card show_element">
                                        <div>
                                            <div class="card-header"><a target="_blank" href=""><img class="img-responsive" src="http://localhost:8000/img/familyTree-default-male.png"></a>
                                                <h2><a target="_blank" href="">You</a></h2>
                                                <div class="sub-info"><span>{{$post->created_at}}</span></div>
                                            </div>
                                            <div class="msg-body">
                                                <div class="msg-content">{{$post->post_body}}</div>
                                            </div>
                                            <div class="action-footer clearfix dropdown"><span class="conversation pull-right"></span><a href="" class="love">
                                                    <div class="heart" role="button" tabindex="0"></div>0
                                                </a></div>
                                            <div class="comment">
                                                <div class="comment-input"><img src="http://localhost:8000/img/familyTree-default-male.png" class="img-responsive">
                                                  <input type="text" id="add_comment_1237" name="comment" class="form-control" placeholder="Add your comment.."
                                                      style="display: none;">
                                                    <div class="emoji-wysiwyg-editor form-control" style="height: 33px;" placeholder="Add your comment.." contenteditable="true" id="commentInput"></div>
                                                    <div class="post_action"><button type="button" class="btn-reset pull-right comment-post-action" id="postComment"><span> Comment </span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach



                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-3 col-xs-12 hidden-xs hidden-sm">
                    <aside class="eq-col mm">

                        <div class="item pending-invite-lt ng-scope" ng-controller="NodeController as Node" ng-init="getAPIData('member/node/get/uninvited-members', 'data')" ng-show="data.uninvited_members.length>0 || data.unjoined_members.length>0 "
                          aria-hidden="false">
                            <div class="header">
                                <span class="left">Pending invites</span>
                                <a href="" class="pull-right">View all</a>
                                <p ng-repeat="uninvited_member in data.uninvited_members" class="ng-scope" style="">
                                    <img
                                      ng-src="https://static-mymily.s3.ap-south-1.amazonaws.com/userphotos/mymily-default-female-200-200.png?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAIV6PDO76KJKGLFAA%2F20190304%2Fap-south-1%2Fs3%2Faws4_request&amp;X-Amz-Date=20190304T055151Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Expires=21600&amp;X-Amz-Signature=2b9d74eb2f5bbc5bb263d2143f1a584e6fad47a91de8e20b0c15e72e382ee497"
                                      alt="" class="img-responsive"
                                      src="https://static-mymily.s3.ap-south-1.amazonaws.com/userphotos/mymily-default-female-200-200.png?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAIV6PDO76KJKGLFAA%2F20190304%2Fap-south-1%2Fs3%2Faws4_request&amp;X-Amz-Date=20190304T055151Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Expires=21600&amp;X-Amz-Signature=2b9d74eb2f5bbc5bb263d2143f1a584e6fad47a91de8e20b0c15e72e382ee497">
                                    <a class="ng-binding">vzxcvzxcv</a>
                                    <br>
                                    <button ng-click="Node.inviteNodeFromDashboard(uninvited_member)" type="button" class="sm-ouline-btn sm-ouline-theme-btn md-btn-theme">Invite</button>
                                </p>
                                <p ng-repeat="uninvited_member in data.uninvited_members" class="ng-scope">
                                    <img
                                      ng-src="https://static-mymily.s3.ap-south-1.amazonaws.com/userphotos/mymily-default-male-200-200.png?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAIV6PDO76KJKGLFAA%2F20190304%2Fap-south-1%2Fs3%2Faws4_request&amp;X-Amz-Date=20190304T055151Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Expires=21600&amp;X-Amz-Signature=9c62f1b48a9b166b41510e924dd4b6a1610417e778b119741057a015a2da86f7"
                                      alt="" class="img-responsive"
                                      src="https://static-mymily.s3.ap-south-1.amazonaws.com/userphotos/mymily-default-male-200-200.png?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAIV6PDO76KJKGLFAA%2F20190304%2Fap-south-1%2Fs3%2Faws4_request&amp;X-Amz-Date=20190304T055151Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Expires=21600&amp;X-Amz-Signature=9c62f1b48a9b166b41510e924dd4b6a1610417e778b119741057a015a2da86f7">
                                    <a class="ng-binding">vzxcvzx</a>
                                    <br>
                                    <button ng-click="Node.inviteNodeFromDashboard(uninvited_member)" type="button" class="sm-ouline-btn sm-ouline-theme-btn md-btn-theme">Invite</button>
                                </p><!-- end ngRepeat: uninvited_member in data.uninvited_members -->
                                <p ng-repeat="uninvited_member in data.uninvited_members" class="ng-scope">
                                    <img
                                      ng-src="https://static-mymily.s3.ap-south-1.amazonaws.com/userphotos/mymily-default-female-200-200.png?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAIV6PDO76KJKGLFAA%2F20190304%2Fap-south-1%2Fs3%2Faws4_request&amp;X-Amz-Date=20190304T055151Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Expires=21600&amp;X-Amz-Signature=2b9d74eb2f5bbc5bb263d2143f1a584e6fad47a91de8e20b0c15e72e382ee497"
                                      alt="" class="img-responsive"
                                      src="https://static-mymily.s3.ap-south-1.amazonaws.com/userphotos/mymily-default-female-200-200.png?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAIV6PDO76KJKGLFAA%2F20190304%2Fap-south-1%2Fs3%2Faws4_request&amp;X-Amz-Date=20190304T055151Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Expires=21600&amp;X-Amz-Signature=2b9d74eb2f5bbc5bb263d2143f1a584e6fad47a91de8e20b0c15e72e382ee497">
                                    <a class="ng-binding">vzxcvzxc</a>
                                    <br>
                                    <button ng-click="Node.inviteNodeFromDashboard(uninvited_member)" type="button" class="sm-ouline-btn sm-ouline-theme-btn md-btn-theme">Invite</button>
                                </p><!-- end ngRepeat: uninvited_member in data.uninvited_members -->
                                <p ng-repeat="uninvited_member in data.uninvited_members" class="ng-scope">
                                    <img
                                      ng-src="https://static-mymily.s3.ap-south-1.amazonaws.com/userphotos/mymily-default-male-200-200.png?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAIV6PDO76KJKGLFAA%2F20190304%2Fap-south-1%2Fs3%2Faws4_request&amp;X-Amz-Date=20190304T055151Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Expires=21600&amp;X-Amz-Signature=9c62f1b48a9b166b41510e924dd4b6a1610417e778b119741057a015a2da86f7"
                                      alt="" class="img-responsive"
                                      src="https://static-mymily.s3.ap-south-1.amazonaws.com/userphotos/mymily-default-male-200-200.png?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAIV6PDO76KJKGLFAA%2F20190304%2Fap-south-1%2Fs3%2Faws4_request&amp;X-Amz-Date=20190304T055151Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Expires=21600&amp;X-Amz-Signature=9c62f1b48a9b166b41510e924dd4b6a1610417e778b119741057a015a2da86f7">
                                    <a class="ng-binding">bdzfvzfv</a>
                                    <br>
                                    <button ng-click="Node.inviteNodeFromDashboard(uninvited_member)" type="button" class="sm-ouline-btn sm-ouline-theme-btn md-btn-theme">Invite</button>
                                </p><!-- end ngRepeat: uninvited_member in data.uninvited_members -->
                                <p ng-repeat="uninvited_member in data.uninvited_members" class="ng-scope">
                                    <img
                                      ng-src="https://static-mymily.s3.ap-south-1.amazonaws.com/userphotos/mymily-default-female-200-200.png?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAIV6PDO76KJKGLFAA%2F20190304%2Fap-south-1%2Fs3%2Faws4_request&amp;X-Amz-Date=20190304T055151Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Expires=21600&amp;X-Amz-Signature=2b9d74eb2f5bbc5bb263d2143f1a584e6fad47a91de8e20b0c15e72e382ee497"
                                      alt="" class="img-responsive"
                                      src="https://static-mymily.s3.ap-south-1.amazonaws.com/userphotos/mymily-default-female-200-200.png?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAIV6PDO76KJKGLFAA%2F20190304%2Fap-south-1%2Fs3%2Faws4_request&amp;X-Amz-Date=20190304T055151Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Expires=21600&amp;X-Amz-Signature=2b9d74eb2f5bbc5bb263d2143f1a584e6fad47a91de8e20b0c15e72e382ee497">
                                    <a class="ng-binding">zxcvzxcv</a>
                                    <br>
                                    <button ng-click="Node.inviteNodeFromDashboard(uninvited_member)" type="button" class="sm-ouline-btn sm-ouline-theme-btn md-btn-theme">Invite</button>
                                </p><!-- end ngRepeat: uninvited_member in data.uninvited_members -->
                                <p ng-repeat="uninvited_member in data.uninvited_members" class="ng-scope">
                                    <img
                                      ng-src="https://static-mymily.s3.ap-south-1.amazonaws.com/userphotos/mymily-default-female-200-200.png?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAIV6PDO76KJKGLFAA%2F20190304%2Fap-south-1%2Fs3%2Faws4_request&amp;X-Amz-Date=20190304T055151Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Expires=21600&amp;X-Amz-Signature=2b9d74eb2f5bbc5bb263d2143f1a584e6fad47a91de8e20b0c15e72e382ee497"
                                      alt="" class="img-responsive"
                                      src="https://static-mymily.s3.ap-south-1.amazonaws.com/userphotos/mymily-default-female-200-200.png?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAIV6PDO76KJKGLFAA%2F20190304%2Fap-south-1%2Fs3%2Faws4_request&amp;X-Amz-Date=20190304T055151Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Expires=21600&amp;X-Amz-Signature=2b9d74eb2f5bbc5bb263d2143f1a584e6fad47a91de8e20b0c15e72e382ee497">
                                    <a class="ng-binding">fsdfsdf</a>
                                    <br>
                                    <button ng-click="Node.inviteNodeFromDashboard(uninvited_member)" type="button" class="sm-ouline-btn sm-ouline-theme-btn md-btn-theme">Invite</button>
                                </p><!-- end ngRepeat: uninvited_member in data.uninvited_members -->
                                <p ng-repeat="uninvited_member in data.uninvited_members" class="ng-scope">
                                    <img
                                      ng-src="https://static-mymily.s3.ap-south-1.amazonaws.com/userphotos/mymily-default-male-200-200.png?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAIV6PDO76KJKGLFAA%2F20190304%2Fap-south-1%2Fs3%2Faws4_request&amp;X-Amz-Date=20190304T055151Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Expires=21600&amp;X-Amz-Signature=9c62f1b48a9b166b41510e924dd4b6a1610417e778b119741057a015a2da86f7"
                                      alt="" class="img-responsive"
                                      src="https://static-mymily.s3.ap-south-1.amazonaws.com/userphotos/mymily-default-male-200-200.png?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAIV6PDO76KJKGLFAA%2F20190304%2Fap-south-1%2Fs3%2Faws4_request&amp;X-Amz-Date=20190304T055151Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Expires=21600&amp;X-Amz-Signature=9c62f1b48a9b166b41510e924dd4b6a1610417e778b119741057a015a2da86f7">
                                    <a class="ng-binding">sdfasf</a>
                                    <br>
                                    <button ng-click="Node.inviteNodeFromDashboard(uninvited_member)" type="button" class="sm-ouline-btn sm-ouline-theme-btn md-btn-theme">Invite</button>
                                </p><!-- end ngRepeat: uninvited_member in data.uninvited_members -->
                            </div>
                        </div>
                        <div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="message"></div>

<script type="text/javascript" src="{{asset('js/home.js')}}"></script>

<script type="text/javascript">

$(document).ready(function(){
  $("#postBoxShow").hide()
  $("#postCrateForm").submit(function(event) {
      event.preventDefault()
      let url     = $(this).attr('action')
      let method  = $(this).attr('method')
      let data    = $(this).serialize() + $("#postBody").text()

      $.ajax({
          type        : method,
          url         : url,
          data        : data,
          dataType    : 'json',
          cache       : false,
          success     : function(response) {
              let message = ''
              $("#message").hide()
              if (response.success == true) {
                  $("#postBoxShow").prepend('<div class="pf-card show_element"><div> <div class="card-header">'
                    +'<a target="_blank" href="">'
                    + '<img class="img-responsive" src="{{asset(Auth::user()->img_address)}}">'
                    +'</a><h2>'
                    +'<a target="_blank" href="">You</a>'
                    +'</h2><div class="sub-info"><span>'+response.message.created_at+'</span>'
                    +'</div></div><div class="msg-body">'
                    +'<div class="msg-content">'+response.message.post_body+'</div></div><div class="action-footer clearfix dropdown"><span class="conversation pull-right"></span><a href="" class="love">'
                    +'<div class="heart" role="button" tabindex="0"></div>0</a>'
                    +'</div><div class="comment"><div class="comment-input">'
                    +'<img src="{{asset(Auth::user()->img_address)}}" class="img-responsive">'
                    +'<input type="text" id="add_comment_1237" name="comment" class="form-control" placeholder="Add your comment.." style="display: none;">'
                    +'<div class="emoji-wysiwyg-editor form-control" style="height: 33px;" placeholder="Add your comment.." contenteditable="true"></div><div class="post_action">'
                    +'<button type="button" class="btn-reset pull-right comment-post-action">'
                    +'<span> Comment </span></button></div></div></div></div></div>').show(1000)
              } else {
                  $.each(response.message, function(item, element) {
                      message += element[0]+'<br>';
                  })

                  $("#message").html('<div id="toast-container" class="toast-bottom-left">'
                    +'<div class="toast toast-error" role="button">'
                    +'<div class="toast-message">'
                    + message
                    +'</div>'
                    +'</div>'
                    +'</div>'
                  ).show(1000);

                  setTimeout(function(){
                    $("#message").hide(1000);
                  }, 3000)
              }
          }
      })
  })
})

</script>

@endsection
