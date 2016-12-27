@extends('layouts.default')
@section('content')
    <div class="growl" id="app-growl"></div>
    <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Users</h4>
                </div>

                <div class="modal-body p-a-0">
                    <div class="modal-body-scroller">
                        <ul class="media-list media-list-users list-group">
                            <li class="list-group-item">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img class="media-object img-circle" src="img/avatar-fat.jpg">
                                    </a>
                                    <div class="media-body">
                                        <button class="btn btn-default btn-sm pull-right">
                                            <span class="glyphicon glyphicon-user"></span> Follow
                                        </button>
                                        <strong>Jacob Thornton</strong>
                                        <p>@fat - San Francisco</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img class="media-object img-circle" src="img/avatar-dhg.png">
                                    </a>
                                    <div class="media-body">
                                        <button class="btn btn-default btn-sm pull-right">
                                            <span class="glyphicon glyphicon-user"></span> Follow
                                        </button>
                                        <strong>Dave Gamache</strong>
                                        <p>@dhg - Palo Alto</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img class="media-object img-circle" src="img/avatar-mdo.png">
                                    </a>
                                    <div class="media-body">
                                        <button class="btn btn-default btn-sm pull-right">
                                            <span class="glyphicon glyphicon-user"></span> Follow
                                        </button>
                                        <strong>Mark Otto</strong>
                                        <p>@mdo - San Francisco</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container p-t-md">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default panel-profile m-b-md">
                    <div class="panel-heading" style="background-image: url(img/iceland.jpg);"></div>
                    <div class="panel-body text-center">
                        <a href="{{route('users.show', $user->id)}}">
                            {{--<img--}}
                                    {{--class="panel-profile-img"--}}
                                    {{--src="img/avatar-dhg.png">--}}
                            <img src="{{$user->gravatar('140')}}" alt="{{$user->name}}" class="panel-profile-img">
                        </a>

                        <h5 class="panel-title">
                            <a class="text-inherit" href="{{route('users.show', $user->id)}}">{{$user->name}}</a>
                        </h5>

                        <p class="m-b-md">I wish i was a little bit taller, wish i was a baller, wish i had a girl… also.</p>

                        <ul class="panel-menu">
                            <li class="panel-menu-item">
                                <a href="#userModal" class="text-inherit" data-toggle="modal">
                                    Friends
                                    <h5 class="m-y-0">{{ count($user->followers) }}</h5>
                                </a>
                            </li>

                            <li class="panel-menu-item">
                                <a href="#userModal" class="text-inherit" data-toggle="modal">
                                    Tweets
                                    <h5 class="m-y-0"> {{ $user->statuses()->count() }}</h5>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-default visible-md-block visible-lg-block">
                    <div class="panel-body">
                        <h5 class="m-t-0">About <small>· <a href="#">Edit</a></small></h5>
                        <ul class="list-unstyled list-spaced">
                            <li><span class="text-muted icon icon-calendar m-r"></span>Went to <a href="#">Oh, Canada</a>
                            <li><span class="text-muted icon icon-users m-r"></span>Became friends with <a href="#">Obama</a>
                            <li><span class="text-muted icon icon-github m-r"></span>Worked at <a href="#">Github</a>
                            <li><span class="text-muted icon icon-home m-r"></span>Lives in <a href="#">San Francisco, CA</a>
                            <li><span class="text-muted icon icon-location-pin m-r"></span>From <a href="#">Seattle, WA</a>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-default visible-md-block visible-lg-block">
                    <div class="panel-body">
                        <h5 class="m-t-0">Photos <small>· <a href="#">Edit</a></small></h5>
                        <div data-grid="images" data-target-height="150">
                            <div>
                                <img data-width="640" data-height="640" data-action="zoom" src="img/instagram_5.jpg">
                            </div>

                            <div>
                                <img data-width="640" data-height="640" data-action="zoom" src="img/instagram_6.jpg">
                            </div>

                            <div>
                                <img data-width="640" data-height="640" data-action="zoom" src="img/instagram_7.jpg">
                            </div>

                            <div>
                                <img data-width="640" data-height="640" data-action="zoom" src="img/instagram_8.jpg">
                            </div>

                            <div>
                                <img data-width="640" data-height="640" data-action="zoom" src="img/instagram_9.jpg">
                            </div>

                            <div>
                                <img data-width="640" data-height="640" data-action="zoom" src="img/instagram_10.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <ul class="list-group media-list media-list-stream">

                    <li class="media list-group-item p-a">
                        <form action="{{ route('statuses.store') }}" method="POST">
                            <div class="input-group">
                                    @include('shared.errors')
                                    {{ csrf_field() }}
                                    <input type="text" name="content" class="form-control" placeholder="Talking about your new story">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                            <span class="icon icon-camera"></span>
                                        </button>
                                    </div>
                            </div>
                        </form>
                    </li>
                    @if (count($feed_items))
                        @foreach($feed_items as $status)
                            <li class="media list-group-item p-a">
                                <a class="media-left" href="#">
                                    <img
                                            class="media-object img-circle"
                                            src="{{ $status->user->gravatar('140')}}">
                                </a>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <small class="pull-right text-muted">{{ $status->created_at->diffForHumans()}}</small>
                                        <h5>{{$status->user->name}}</h5>
                                    </div>

                                    <p>
                                        {{ $status->content }}
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="col-md-3">
                <div class="alert alert-warning alert-dismissible hidden-xs" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <a class="alert-link" href="profile/index.html">Visit your profile!</a> Check your self, you aren't looking too good.
                </div>

                <div class="panel panel-default m-b-md hidden-xs">
                    <div class="panel-body">
                        <h5 class="m-t-0">Sponsored</h5>
                        <div data-grid="images" data-target-height="150">
                            <img class="media-object" data-width="640" data-height="640" data-action="zoom" src="img/instagram_2.jpg">
                        </div>
                        <p><strong>It might be time to visit Iceland.</strong> Iceland is so chill, and everything looks cool here. Also, we heard the people are pretty nice. What are you waiting for?</p>
                        <button class="btn btn-primary-outline btn-sm">Buy a ticket</button>
                    </div>
                </div>

                <div class="panel panel-default m-b-md hidden-xs">
                    <div class="panel-body">
                        <h5 class="m-t-0">Followings <small>· <a href="{{route('users.followings', $user->id)}}">View All</a></small></h5>
                        <ul class="media-list media-list-stream">
                            @if(count($home_users)> 0)
                                @foreach($home_users as $home_user)
                            <li class="media m-b">
                                <a class="media-left" href="#">
                                    <img
                                            class="media-object img-circle"
                                            src="img/avatar-fat.jpg">
                                </a>
                                <div class="media-body">
                                    <strong>{{$home_user->name}}</strong>
                                    {{--<div class="media-body-actions">--}}
                                        {{--<button class="btn btn-primary-outline btn-sm">--}}
                                            {{--<span class="icon icon-add-user"></span> Follow</button>--}}
                                    {{--</div>--}}
                                    @if ($home_user->id !== Auth::user()->id)
                                        <div id="follow_form">
                                            @if (Auth::user()->isFollowing($home_user->id))
                                                <form action="{{ route('followers.destroy', $home_user->id) }}" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <div class="media-body-actions">
                                                        <button  type="submit" class="btn btn-primary-outline btn-sm">
                                                            <span class="icon icon-remove-user"></span> Cancel Follow</button>
                                                    </div>
                                                </form>
                                            @else
                                                <form action="{{ route('followers.store', $home_user->id) }}" method="post">
                                                    {{ csrf_field() }}
                                                    <div class="media-body-actions">
                                                        <button  type="submit" class="btn btn-primary-outline btn-sm">
                                                            <span class="icon icon-add-user"></span> Follow</button>
                                                    </div>
                                                </form>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </li>
                                @endforeach
                            @endif
                            {{--<li class="media">--}}
                                {{--<a class="media-left" href="#">--}}
                                    {{--<img--}}
                                            {{--class="media-object img-circle"--}}
                                            {{--src="img/avatar-mdo.png">--}}
                                {{--</a>--}}
                                {{--<div class="media-body">--}}
                                    {{--<strong>Mark Otto</strong> @mdo--}}
                                    {{--<div class="media-body-actions">--}}
                                        {{--<button class="btn btn-primary-outline btn-sm">--}}
                                            {{--<span class="icon icon-add-user"></span> Follow</button></button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                    <div class="panel-footer">
                        Dave really likes these nerds, no one knows why though.
                    </div>
                </div>

                <div class="panel panel-default panel-link-list">
                    <div class="panel-body">
                        © 2015 Bootstrap

                        <a href="#">About</a>
                        <a href="#">Help</a>
                        <a href="#">Terms</a>
                        <a href="#">Privacy</a>
                        <a href="#">Cookies</a>
                        <a href="#">Ads </a>

                        <a href="#">info</a>
                        <a href="#">Brand</a>
                        <a href="#">Blog</a>
                        <a href="#">Status</a>
                        <a href="#">Apps</a>
                        <a href="#">Jobs</a>
                        <a href="#">Advertise</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop