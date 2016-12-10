@extends('layouts.default')
@section('title', 'Home')
@section('content')
    <div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">
            THIS IS THE HOME PAGE
        </p>
        <P>
            Everything starts from here.
        </P>
        <p>
            <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">Register</a>
        </p>
    </div>
@stop