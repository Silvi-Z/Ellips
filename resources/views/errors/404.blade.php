@extends('layouts.app')

@section('content')
    <main class="page_404">
        <div class="messageContainer d-flex align-items-center flex-column">
            <h1>ՀԱՐԳԵԼԻ ՕԳՏԱՏԵՐ, ԷՋԸ ՉԻ ԳՏՆՎԵԼ․
                ԿԱՐՈՂ ԵՔ ՎԵՐԱԴԱՌՆԱԼ</h1>
            <button class="button btn-dark">Գլխավոր էջ</button>
        </div>
        <div class="icon_404 d-flex align-items-center">
            <img src="{{asset('front/icons/page_404.png')}}" alt="">
        </div>
    </main>
@endsection
