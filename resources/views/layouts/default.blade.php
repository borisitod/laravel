{{--<!DOCTYPE html>--}}

{{--<html>--}}
{{--<head>--}}
   {{--<title>@yield('title','Laravel') - Laravel App</title>--}}
   {{--<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">--}}
{{--</head>--}}
{{--<body>--}}
   {{--@include('layouts._header')--}}
   {{--<div class="container">--}}
      {{--<div class="col-md-offset-1 col-md-10">--}}
         {{--@include('shared.messages')--}}
         {{--@yield('content')--}}
         {{--@include('layouts._footer')--}}
      {{--</div>--}}
   {{--</div>--}}
   {{--<script src="{{URL::asset('js/app.js')}}"></script>--}}
{{--</body>--}}
{{--</html>--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    {{--@include('layouts._header')--}}
    <title>@yield('title','Laravel') - Laravel App</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

    <link href="{{asset('css/toolkit.css')}}" rel="stylesheet">
    <link href="{{asset('css/application.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" ref="stylesheet">

    {{--<link href="resource/assets/libs/" ref="stylesheet">--}}

    <style>
        /* note: this is a hack for ios iframe for bootstrap themes shopify page */
        /* this chunk of css is not part of the toolkit :) */
        body {
            width: 1px;
            min-width: 100%;
            *width: 100%;
        }
    </style>
</head>
<body class="with-top-navbar">

@include('layouts._navigation')
@include('shared.msg')
@include('shared.messages')
@yield('content')


<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/chart.js')}}"></script>
<script src="{{asset('js/toolkit.js')}}"></script>
<script src="{{asset('js/application.js')}}"></script>
{{--<script src="{{asset('js/libs.js')}}"></script>--}}
<script>
    // execute/clear BS loaders for docs
    $(function () {
        if (window.BS && window.BS.loader && window.BS.loader.length) {
            while (BS.loader.length) {
                (BS.loader.pop())()
            }
        }
    })
</script>
</body>
</html>

