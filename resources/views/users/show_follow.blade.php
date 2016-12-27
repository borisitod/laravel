@extends('layouts.default')
@section('title', $title)

@section('content')
    <div class="col-md-offset-3 col-md-6">
        <h1>{{ $title }}</h1>
        <ul class="list-group media-list media-list-stream">
            @foreach ($users as $user)
                <li class="media list-group-item p-a">
                    {{--<img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar"/>--}}
                    {{--<a href="{{ route('users.show', $user->id )}}" class="username">{{ $user->name }}</a>--}}

                    <a class="media-left" href="#">
                        <img
                                class="media-object img-circle"
                                src="{{ $user->gravatar() }}" alt="{{ $user->name }}">
                    </a>
                    <div class="media-body">
                        <div class="media-heading">
                            <small class="pull-right text-muted">
                                @if (Auth::check())
                                    @include('users._follow_form')
                                @endif

                            </small>
                            <h5>{{ $user->name}}</h5>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>

        {!! $users->render() !!}
    </div>
@stop