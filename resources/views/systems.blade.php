@extends('layouts.app')

@section('content')
    <main>
        <div class="h1Title">Համակարգեր և ապրանքներ</div>
        @include('selectButtons')
        <div class="wrapper">
            <div class="systemsWrapper d-grid">
                @if(!empty($systems))
                    @foreach ($systems as $system)
                        <div class="system">
                            <a href="{{route('system',['url'=>$system->url])}}">
                                <div class="systemImgContainer d-flex align-items-center justify-content-center flex-column">
                                    <img src="{{$system->first_image()}}" alt="">
                                </div>
                                <div>
                                    <h6>{{ $system->{'title_'.$lang} }}</h6>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </main>
@endsection
