@extends('layouts.default')
@section('content')
<div class="growl" id="app-growl"></div>
<div class="profile-header text-center"
     style="background-image: url(img/iceland.jpg);">
    <div class="container">
        <div class="container-inner">
            <img class="img-circle media-object" src="img/avatar-dhg.png">
            <h3 class="profile-header-user">Dave Gamache</h3>
            <p class="profile-header-bio">
                I wish i was a little bit taller, wish i was a baller, wish i had a girl… also.
            </p>
        </div>
    </div>

    <nav class="profile-header-nav">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#">Photos</a>
            </li>
            <li>
                <a href="#">Others</a>
            </li>
            <li>
                <a href="#">Anothers</a>
            </li>
        </ul>
    </nav>
</div>

<div class="container m-y-md" data-grid="images">
    <div>
        <img data-width="640" data-height="400" data-action="zoom" src="img/instagram_5.jpg">
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

    <div>
        <img data-width="640" data-height="400" data-action="zoom" src="img/instagram_11.jpg">
    </div>

    <div>
        <img data-width="640" data-height="640" data-action="zoom" src="img/instagram_12.jpg">
    </div>

    <div>
        <img data-width="640" data-height="400" data-action="zoom" src="img/instagram_13.jpg">
    </div>

    <div>
        <img data-width="640" data-height="640" data-action="zoom" src="img/instagram_14.jpg">
    </div>

    <div>
        <img data-width="640" data-height="640" data-action="zoom" src="img/instagram_15.jpg">
    </div>

    <div>
        <img data-width="640" data-height="640" data-action="zoom" src="img/instagram_16.jpg">
    </div>

    <div>
        <img data-width="640" data-height="640" data-action="zoom" src="img/instagram_17.jpg">
    </div>

    <div>
        <img data-width="640" data-height="640" data-action="zoom" src="img/instagram_18.jpg">
    </div>

    <div>
        <img data-width="640" data-height="400" data-action="zoom" src="img/instagram_1.jpg">
    </div>

    <div>
        <img data-width="640" data-height="640" data-action="zoom" src="img/instagram_2.jpg">
    </div>
</div>
@stop