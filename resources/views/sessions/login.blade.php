@extends('layouts.default')
@section('content')
<div class="container-fluid container-fill-height">
    <div class="container-content-middle">


        <form role="form" class="m-x-auto text-center app-login-form" method="POST" action="{{ route('login') }}">

            {{ csrf_field() }}
            <a href="{{route('home')}}" class="app-brand m-b-lg">
                <img src="img/brand.png" alt="brand">
            </a>

            <div class="form-group">
                <input type="text" name="email" class="form-control" value="{{ old('email') }}" placeholder="Username">
            </div>

            <div class="form-group m-b-md">
                <input type="password" name="password" class="form-control" value="{{ old('password') }}" placeholder="Password">
            </div>

            @include('shared.errors')

            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember Me</label>
                </div>
            </div>

            <div class="m-b-lg">
                <button  type="submit" class="btn btn-primary">Log In</button>
                <button class="btn btn-default">Sign up</button>
            </div>

            <footer class="screen-login">
                <a href="{{ route('password.reset') }}" class="text-muted">Forgot password</a>
            </footer>
            <hr>

            <p>No account？<a href="{{ route('signup') }}">Signup Now！</a></p>
        </form>
    </div>
</div>
@stop

