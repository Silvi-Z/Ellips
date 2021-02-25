@extends('layouts.app')

@section('content')
    <main class="page_404">
        <div class="messageContainer d-flex align-items-center flex-column">
            <h1>@lang('static.DEAR USER, PAGE NOT FOUND ․ YOU CAN RETURN')</h1>
            <a href="{{route('mainpage')}}"><button class="button btn-dark">@lang('static.Main page')</button></a>
        </div>
        <div class="icon_404 d-flex align-items-center">
            <img src="{{asset('front/icons/page_404.png')}}" alt="">
        </div>
    </main>
@endsection
