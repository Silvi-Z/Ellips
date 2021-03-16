@extends('layouts.app')
@section('title') @lang('static.Home') @endsection
@section('content')
    <main class="homePage d-flex flex-column">
        <div class="pageTitle">
            <h1 class="homePageTitle">@lang('static.SECURITY ․ QUALITY. RELIABILITY')</h1>
        </div>
        <section>
            <div class="container">
                <div class="d-flex justify-content-center slider w-100">
                    <div class="w-100 position-relative d-flex justify-content-end">

                        <div class="wrap">
                            <div class="dots">
                                <div class="prev"></div>
                                <div class="heroSlider textSlide bigSlide">
                                    @if(!empty($slider->images) && count($slider->images))
                                        @foreach($slider->images as $image)
                                            <div><a href="{{$image->url}}">{{$image->{'text_'.$lang} }}</a></div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="heroSlider imagesSlide">
                                    @if(!empty($slider->images) && count($slider->images))
                                        @foreach($slider->images as $image)
                                            @if($image->image_name)
                                                <div>
                                                    <img src="{{asset('files/'.$image->image_name)}}" alt="">
                                                </div>
                                            @else
                                                <div>
                                                    <iframe width="100%" src="{{$image->video}}">
                                                    </iframe>
                                                </div>
                                            @endif

                                        @endforeach
                                    @endif
                                </div>
                                <div class="heroSlider imagesSmallSlide">
                                    @if(!empty($slider->images) && count($slider->images))
                                        @foreach($slider->images as $image)
                                            @if($image->image_name)
                                                <div>
                                                    <img src="{{asset('files/'.$image->image_name)}}"
                                                         data-text="{{$image->{'text_'.$lang} }}" alt="">
                                                </div>
                                            @else
                                                <div>
                                                    <iframe width="100%" src="{{$image->video}}"
                                                            data-text="{{$image->{'text_'.$lang} }}">
                                                    </iframe>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                                <div class="next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('ourExperience')
        <div class="darkSection w-100 d-flex flex-column justify-content-center">
            <!--                <div>-->
            <h3>@lang('static.Services')</h3>
            <div class="services d-flex">
                @if(!empty($top_services) && count($top_services))
                    @foreach($top_services as $key => $top_service)
                        <div class="serviceWrapper">
                            <div class="servicesTitleWrapper">
                                <span class="slideNumber">0{{$key+1}}</span>
                                {{--                                <img src="{{asset('front/icons/slide0'.($key+1).'.svg')}}" alt="">--}}
                                <div class="servicesTitle">{{ $top_service->{'title_'.$lang} }}</div>
                            </div>
                            <div class="servicesSlideDescription">{!! $top_service->{'text_'.$lang} !!}</div>
                        </div>
                @endforeach
            @endif

            </div>
            <div class="companies w-100">
                <div class="companiesTitle">@lang('static.They trust us')</div>
                @include ('companies')
            </div>
            <div class="wrapper">
                <div class="portfolio ">
                    <div class="portfolioBigImg row">
                        @if(!empty($portfolios) && count($portfolios))
                            @foreach($portfolios as $key => $portfolio)
                                @if($key == 0)
                                    <div class="col-12">
                                        <a href="{{route("portfolio",['url'=>$portfolio->url])}}">
                                            <div class="portfolioBigImgContainer">
                                                <img src="{{$portfolio->first_image()}}" alt="">
                                            </div>
                                            <h3>{{ $portfolio->{'title_'.$lang} }}</h3>
                                            <div class="portfolioSmallText">{{ $portfolio->{'small_text_'.$lang} }}
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                    <div class="portfolioSmallImages row">
                        @if(!empty($portfolios) && count($portfolios))
                            @foreach($portfolios as $key => $portfolio)
                                @if($key > 0)
                                    <div class="col-12 col-md-6">
                                        <a href="{{route("portfolio",['url'=>$portfolio->url])}}">
                                            <div class="portfolioContainer">
                                                <img src="{{$portfolio->first_image()}}" alt="">
                                            </div>
                                            <h3>{{ $portfolio->{'title_'.$lang} }}</h3>
                                            <div
                                                class="portfolioSmallText">{{ $portfolio->{'small_text_'.$lang} }}</div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>

                    <a href="{{route('portfolios')}}">
                        <button class="button">@lang('static.Portfolios')</button>
                    </a>
                </div>
            </div>
        </div>
        <section>
            <div class="container">
                @if(!empty($products) && count($products))
                    <div class="productPageWrapper d-flex flex-column">
                        <h3>@lang('static.Products և systems')</h3>
                        <!--                    <div class="container">-->
                        <div class="contentWrapper row">
                            @foreach($products as $key => $product)
                                <div class="col product d-flex justify-content-.productPageWrapper .productcenter">
                                    <a href="{{route('product',['url'=>$product->url])}}">
                                        <div class="d-flex productImage align-items-center justify-content-center flex-column">
                                            <img src="{{$product->first_image()}}" alt="">
                                        </div>
                                        <div>
                                            <h6>{{ $product->{'title_'.$lang} }}</h6>
                                            <p>{{$product->price}} @lang('static.AMD') </p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                            <div class="w-100"></div>
                        </div>
                        <a href="{{route('categories')}}">
                            <button type="button" class="btn btn-dark button">@lang('static.See more')</button>
                        </a>
                        <!--                    <button class="button">Տեսնել ավելին</button>-->

                    </div>
                @endif
            </div>
        </section>
        <div class="blogs w-100 d-flex justify-content-center bg-white">
            <div class="w-100">
                @if(!empty($blogs) && count($blogs))
                    <h3>@lang('static.Blog')</h3>
                    <div class="blogsWrapper">
                        <div class="wrapper">
                            @foreach($blogs as $key => $blog)
                                <a href="{{route('blog',['url'=>$blog->url])}}">
                                    <div class="blog d-flex align-items-center justify-content-between">
                                        <div class="d-flex justify-content-center">
                                            <div class="imgVideoWrapper">
                                                <img src="{{$blog->first_image()}}" alt="">
                                            </div>
                                            <div class="d-flex flex-wrap">
                                                <div>
                                                    <h4>{{ $blog->{'title_'.$lang} }}</h4>
                                                </div>
                                                <p>1{{date('m.d.Y'),strtotime($blog->updated_at)}}</p>
                                                <span class="navigateBtn"></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                            <a class="blogButton" href="{{route('blogs')}}">
                                <button class="button btn">@lang('static.See more')</button>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </main>
@endsection

