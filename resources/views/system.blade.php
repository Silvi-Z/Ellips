@extends('layouts.app')
@section('title') @lang('static.Systems') @endsection

@section('content')
    <main class="singleProductPage systemPage">
        <div class="pageTitle">
            <h1>@lang('static.Systems')</h1>
        </div>
        <div class="wrapper row">
            <div class="col-xl-6 col-12 position-relative">
                <div class="singleProduct">
                    @if(!empty($system->images) && count($system->images))
                        @foreach($system->images as  $image)
                            @if($image->image_name)
                                <div class="singleProductSlide">
                                    <img src="{{asset('files/'.$image->image_name)}}" alt="img">
                                </div>
                            @else
                                <div class="singleProductSlide">
                                    <iframe width="100%" src="{{$image->video}}?autoplay=1&showinfo=0&controls=0" allowfullscreen>
                                    </iframe>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-xl-6 col-12 singleInfo">
                <h6>{{ $system->{'title_'.$lang} }}</h6>
                <div class="systemDescription">
                    {!!  $system->{'text_'.$lang} !!}
                   </div>
{{--                <span class="seeAllText">--}}
{{--                    <img src="{{asset('front/icons/arrowSeeMore.svg')}}" alt="">--}}
{{--                </span>--}}
            </div>
        </div>
        @if(!empty($system->products) && count($system->products))
        <div class="moreSystems container ">
                <div class="moreSystemsTitle">@lang('static.Products involved')</div>
                <div class="systemsSlide">
                    @foreach($system->products as $product)
                        @if($loop->index < 6)
                            <div class="product">
                                <a href="{{route('product',['url'=>$product->url])}}">
                                    <div class="d-flex align-items-center justify-content-center flex-column">
                                        <img src='{{$product->first_image()}}' alt="">
                                    </div>
                                    <div>
                                        <h6>{{ $product->{'title_'.$lang} }}</h6>
                                        <p>{{ $product->price }} @lang('static.AMD')</p>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
        </div>
        @endif
    </main>
    @endsection

