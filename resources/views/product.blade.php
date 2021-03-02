@extends('layouts.app')
@section('title') @lang('static.Products') @endsection

@section('content')
    <main class="singleProductPage">
        <div class="pageTitle">
            <h1>@lang('static.Products')</h1>
        </div>
        <div class="wrapper row">
            <div class="col-xl-6 col-12 position-relative">
                <div class="singleProduct">
                    @if(!empty($product->images))
                        @foreach($product->images as  $image)
                            @if($image->image_name)
                                <div class="singleProductSlide">
                                    <img src="{{asset('files/'.$image->image_name)}}" alt="img">
                                </div>
                            @else
                                <div class="singleProductSlide">
                                    <iframe width="100%" src="{{$image->video}}">
                                    </iframe>
                                </div>
                            @endif
                        @endforeach
                    @endif

                </div>
            </div>
            <div class="col-xl-6 col-12 singleInfo">
                <h6>{{ $product->{'title_'.$lang} }}</h6>
                <h6>{{ $product->brand->{'title_'.$lang} }}</h6>
                <p class="price">{{ $product->price }} @lang('static.AMD')</p>
                <div class="productDescription">{!!  $product->{'text_'.$lang}  !!}</div>
                <div class="tags">
                    @foreach($product->systems as $system)
                    <a href="{{route('system',['url'=>$system->url])}}">{{ $system->{'title_'.$lang} }}</a>
                    @endforeach
                        @foreach($product->categories as $category)
                            <a href="{{route('category',['url'=>$category->url])}}">{{ $category->{'title_'.$lang} }}</a>
                        @endforeach
                </div>
{{--                <span class="seeAllText"><img src="{{asset('front/icons/arrowSeeMore.svg')}}" alt=""></span>--}}
            </div>
        </div>
        @if(!empty($similars))
            <div class="moreProducts">
                <h5>@lang('static.Similar products')</h5>
                <div class="d-flex justify-content-center">
                    @foreach($similars as  $similar)
                        <div class="product">
                            <a href="{{route('product',['url'=>$similar->url])}}">
                                <div class="d-flex align-items-center justify-content-center flex-column">
                                    <img src='{{$similar->first_image()}}' alt="">
                                </div>
                                <div>
                                    <h6>{{ $similar->{'title_'.$lang} }}</h6>
                                    <p>{{ $similar->price }} @lang('static.AMD')</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </main>
@endsection
