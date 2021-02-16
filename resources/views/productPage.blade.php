@extends('layouts.app')

@section('content')
    <main>
        <div class="h1Title">{{ $category->{'title_'.app()->getLocale()} }}</div>
        @include('selectButtons')
        <div class="productPageWrapper">
            <div class="lastNavigate">
                <a href="{{route('categories')}}">@lang('static.Products')</a>
            </div>
            <div class="filter row">
                <div class="col-md-12 col-lg-6 col">
                    <label>
                        <input type="text"  data-name="product"  class="searchInput" placeholder="@lang('static.Search')">
                    </label>
                </div>
                <div class="nav-item dropdown col-md-6 col-lg-3">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                       @lang('static.BY BRAND')
                    </a>
                    <ul class="dropdown-menu">
                        @if(!empty($brands))
                            @foreach($brands as $brand)
                                <li><a class="dropdown-item" href="{{route('category',['url'=>$category->url,'brand_id'=>$brand->id])}}">{{ $brand->{'title_'.$lang} }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="nav-item dropdown col-md-6 col-lg-3">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                        @lang('static.BY SYSTEMS')
                    </a>
                    <ul class="dropdown-menu">
                        @if(!empty($systems))
                            @foreach($systems as $system)
                                <li><a class="dropdown-item" href="{{route('categories',['system_id'=>$system->id])}}">{{ $system->{'title_'.$lang} }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="contentWrapper d-grid">
                @if(!empty($products) && count($products))
                    @foreach($products as $product)
                        <div class="product d-flex justify-content-center">
                            <a href="{{route('product',['url'=>$product->url])}}">
                                <div class="d-flex align-items-center justify-content-center flex-column">
                                    <img src="{{$product->first_image()}}" alt="">
                                </div>
                                <div>
                                    <h6>{{ $product->{'title_'.$lang} }}</h6>
                                    <p>{{$product->price}} @lang('static.AMD') </p>
                                </div>
                            </a>
                        </div>
                    @endforeach

                @endif
            </div>
        </div>
    </main>
@endsection
