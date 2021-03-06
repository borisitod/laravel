@extends('layouts.default')
@section('title', 'Register')
@section('content')
    <div class="col-md-offset-3 col-md-6" style="padding-top: 50px">
        <div class="panel panel-default" >
            <div class="panel-heading">
                <h5>Register</h5>
            </div>
            <div class="panel-body">
                @include('shared.errors')

                <form method="POST" action="{{ route('users.store') }}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name：</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email：</label>
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="password">Password：</label>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password：</label>
                        <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
@stop