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
                        <a href="profile/index.html">
                            <img
                                    class="panel-profile-img"
                                    src="img/avatar-dhg.png">
                        </a>

                        <h5 class="panel-title">
                            <a class="text-inherit" href="profile/index.html">Dave Gamache</a>
                        </h5>

                        <p class="m-b-md">I wish i was a little bit taller, wish i was a baller, wish i had a girl… also.</p>

                        <ul class="panel-menu">
                            <li class="panel-menu-item">
                                <a href="#userModal" class="text-inherit" data-toggle="modal">
                                    Friends
                                    <h5 class="m-y-0">12M</h5>
                                </a>
                            </li>

                            <li class="panel-menu-item">
                                <a href="#userModal" class="text-inherit" data-toggle="modal">
                                    Enemies
                                    <h5 class="m-y-0">1</h5>
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
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Message">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default">
                                    <span class="icon icon-camera"></span>
                                </button>
                            </div>
                        </div>
                    </li>

                    <li class="media list-group-item p-a">
                        <a class="media-left" href="#">
                            <img
                                    class="media-object img-circle"
                                    src="img/avatar-dhg.png">
                        </a>
                        <div class="media-body">
                            <div class="media-heading">
                                <small class="pull-right text-muted">4 min</small>
                                <h5>Dave Gamache</h5>
                            </div>

                            <p>
                                Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            </p>

                            <div class="media-body-inline-grid" data-grid="images">
                                <div style="display: none">
                                    <img data-action="zoom" data-width="1050" data-height="700" src="img/unsplash_1.jpg">
                                </div>

                                <div style="display: none">
                                    <img data-action="zoom" data-width="640" data-height="640" src="img/instagram_1.jpg">
                                </div>

                                <div style="display: none">
                                    <img data-action="zoom" data-width="640" data-height="640" src="img/instagram_13.jpg">
                                </div>

                                <div style="display: none">
                                    <img data-action="zoom" data-width="1048" data-height="700" src="img/unsplash_2.jpg">
                                </div>
                            </div>

                            <ul class="media-list m-b">
                                <li class="media">
                                    <a class="media-left" href="#">
                                        <img
                                                class="media-object img-circle"
                                                src="img/avatar-fat.jpg">
                                    </a>
                                    <div class="media-body">
                                        <strong>Jacon Thornton: </strong>
                                        Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis.
                                    </div>
                                </li>
                                <li class="media">
                                    <a class="media-left" href="#">
                                        <img
                                                class="media-object img-circle"
                                                src="img/avatar-mdo.png">
                                    </a>
                                    <div class="media-body">
                                        <strong>Mark Otto: </strong>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="media list-group-item p-a">
                        <a class="media-left" href="#">
                            <img
                                    class="media-object img-circle"
                                    src="img/avatar-fat.jpg">
                        </a>
                        <div class="media-body">
                            <div class="media-body-text">
                                <div class="media-heading">
                                    <small class="pull-right text-muted">12 min</small>
                                    <h5>Jacob Thornton</h5>
                                </div>
                                <p>
                                    Donec id elit non mi porta gravida at eget metus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="media list-group-item p-a">
                        <a class="media-left" href="#">
                            <img
                                    class="media-object img-circle"
                                    src="img/avatar-mdo.png">
                        </a>
                        <div class="media-body">
                            <div class="media-heading">
                                <small class="pull-right text-muted">34 min</small>
                                <h5>Mark Otto</h5>
                            </div>

                            <p>
                                Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                            </p>

                            <div class="media-body-inline-grid" data-grid="images">
                                <img style="display: none" data-width="640" data-height="640" data-action="zoom" src="img/instagram_3.jpg">
                            </div>

                            <ul class="media-list">
                                <li class="media">
                                    <a class="media-left" href="#">
                                        <img
                                                class="media-object img-circle"
                                                src="img/avatar-dhg.png">
                                    </a>
                                    <div class="media-body">
                                        <strong>Dave Gamache: </strong>
                                        Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
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
                        <h5 class="m-t-0">Likes <small>· <a href="#">View All</a></small></h5>
                        <ul class="media-list media-list-stream">
                            <li class="media m-b">
                                <a class="media-left" href="#">
                                    <img
                                            class="media-object img-circle"
                                            src="img/avatar-fat.jpg">
                                </a>
                                <div class="media-body">
                                    <strong>Jacob Thornton</strong> @fat
                                    <div class="media-body-actions">
                                        <button class="btn btn-primary-outline btn-sm">
                                            <span class="icon icon-add-user"></span> Follow</button>
                                    </div>
                                </div>
                            </li>
                            <li class="media">
                                <a class="media-left" href="#">
                                    <img
                                            class="media-object img-circle"
                                            src="img/avatar-mdo.png">
                                </a>
                                <div class="media-body">
                                    <strong>Mark Otto</strong> @mdo
                                    <div class="media-body-actions">
                                        <button class="btn btn-primary-outline btn-sm">
                                            <span class="icon icon-add-user"></span> Follow</button></button>
                                    </div>
                                </div>
                            </li>
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