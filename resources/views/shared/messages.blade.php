@foreach (['danger', 'warning', 'success', 'info', 'status'] as $msg)
    @if(session()->has($msg))
        {{--<div class="flash-message">--}}
            {{--<p class="alert alert-{{ $msg }}">--}}
                {{--{{ session()->get($msg) }}--}}
            {{--</p>--}}
        {{--</div>--}}
        <div class="col-md-offset-5" style="padding-top: 10px">
        <div class="growl growl-static " >
            <div class="alert alert alert-{{ $msg }} alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>{{ session()->get($msg) }}</strong>
            </div>
        </div>
        </div>
    @endif
@endforeach