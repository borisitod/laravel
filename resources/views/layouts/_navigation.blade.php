<nav class="navbar navbar-inverse navbar-fixed-top app-navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-main">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('img/brand-white.png')}}" alt="brand">
            </a>
        </div>
        <div class="navbar-collapse collapse" id="navbar-collapse-main">
            @if(Auth::check())
                <ul class="nav navbar-nav hidden-xs">
                    <li class="active">
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{route('users.edit', $user->id)}}">Profile</a>
                    </li>
                    <li>
                        <a data-toggle="modal" href="#msgModal">Messages</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right m-r-0 hidden-xs">
                    <li >
                        <a class="app-notifications" href="notifications/index.html">
                            <span class="icon icon-bell"></span>
                        </a>
                    </li>
                    <li>
                        <button class="btn btn-default navbar-btn navbar-btn-avitar" data-toggle="popover">
                            {{--<img class="img-circle" src="{{asset('img/avatar-dhg.png')}}">--}}

                            <img class="img-circle"  src="{{$user->gravatar('140')}}" alt="{{$user->name}}">
                        </button>
                    </li>
                </ul>

                <form class="navbar-form navbar-right app-search" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" data-action="grow" placeholder="Search">
                    </div>
                </form>

                <ul class="nav navbar-nav hidden-sm hidden-md hidden-lg">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="">Profile</a></li>
                    <li><a href="notifications/index.html">Notifications</a></li>
                    <li><a data-toggle="modal" href="#msgModal">Messages</a></li>
                    <li><a href="#" data-action="growl">Growl</a></li>
                    <li><a href="{{route('login')}}">Logout</a></li>
                </ul>

                <ul class="nav navbar-nav hidden">
                    <li><a href="#" data-action="growl">Growl</a></li>
                    {{--<li><form action="{{ route('logout') }}" method="POST">--}}
                    {{--{{ csrf_field() }}--}}
                    {{--{{ method_field('DELETE') }}--}}
                    {{--<button style="position: relative;display: block;padding: 10px 15px;" type="submit" name="button">Logout</button>--}}
                    {{--</form>--}}
                    {{--</li>--}}
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                    </li>
                </ul>
            @else
                <ul class="nav navbar-nav hidden-xs">
                    <li class="active">
                        <a href="{{route('home')}}">Home</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav hidden-sm hidden-md hidden-lg">
                    <li><a href="{{route('home')}}">Home</a></li>
                </ul>

                <ul class="nav navbar-nav hidden">
                    <li><a href="{{route('login')}}">Login</a></li>
                </ul>
            @endif
        </div>
    </div>
</nav>

