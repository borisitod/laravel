@extends('layouts.default')
@section('title', 'Edit Profile')

@section('content')
    <div class="profile-header text-center"
         style="background-image: url('/laravel/public/img/iceland.jpg');">
        <div class="container">
            <div class="container-inner">
                <img class="img-circle media-object" src="{{asset('img/avatar-dhg.png')}}">
                <h3 class="profile-header-user">{{$user->name}}</h3>
                <p class="profile-header-bio">
                    I wish i was a little bit taller, wish i was a baller, wish i had a girl… also.
                </p>
            </div>
        </div>
    </div>

            <div class="col-md-offset-3 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5>Edit Profile</h5>
                    </div>
                    <div class="panel-body">

                        @include('shared.errors')
                        <form method="POST" action="{{ route('users.update', $user->id )}}">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name">Name：</label>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email：</label>
                                <input type="text" name="email" class="form-control" value="{{ $user->email }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="password">Password：</label>
                                <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password：</label>
                                <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@stop