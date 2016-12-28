@extends('layouts.default')
@section('title', 'Reset Password')

@section('content')

    <div class="col-md-6 col-md-offset-3" style="padding-top: 50px">
        <div class="panel panel-default">
            <div class="panel-heading">Reset Password</div>
            <div class="panel-body">
                @include('shared.errors')
                <form method="POST" action="{{ route('password.reset') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Email：</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">
                                Reset
                    </button>
                </form>
            </div>
        </div>
    </div>


@stop