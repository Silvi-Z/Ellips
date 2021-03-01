@extends('layouts.app')
@section('title') {{ $category->{'title_'.app()->getLocale()} }} @endsection

@section('content')
    <main class="">
        <h1>{{ $category->{'title_'.app()->getLocale()} }}</h1>
        @include('selectButtons')
        <div class="productPageWrapper">
            <div class="lastNavigate">
                <a href="{{route('categories')}}">@lang('static.Products')</a>
            </div>
            <div class="filter row">
                <form class="col-md-12 col-lg-6 col" action="">
                    <input type="hidden" name="system_id" value="{{$system_id}}">
                    <input type="hidden" name="brand_id" value="{{$brand_id}}">
                    <div>
                        <label>
                            <input type="text" data-name="product" name="search" value="{{$search}}" class="searchInput"
                                   placeholder="@lang('static.Search')">
                        </label>
                        <button class="searchButton btn-dark">@lang('static.Search')</button>
                    </div>
                </form>
                <div class="nav-item dropdown col-md-6 col-lg-3">
                    <a class="nav-link dropdown-toggle brand-toggle" data-toggle="dropdown"
                       href="#">@lang('static.BY BRAND')</a>
                    <ul class="dropdown-menu">
                        @if(!empty($brands))
                            @foreach($brands as $brand)
                                <li><a class="dropdown-item @if($brand->id == $brand_id) activeDropdown @endif"
                                       href="{{route('category',['url'=>$category->url,'brand_id'=>$brand->id,'system_id'=>$system_id])}}">{{ $brand->{'title_'.$lang} }}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="nav-item dropdown col-md-6 col-lg-3">
                    <a class="nav-link dropdown-toggle system-toggle" data-toggle="dropdown"
                       href="#">@lang('static.BY SYSTEMS')</a>
                    <ul class="dropdown-menu">
                        @if(!empty($systems))
                            @foreach($systems as $system)
                                <li><a class="dropdown-item @if($system->id == $system_id) activeDropdown @endif"
                                       href="{{route('category',['url'=>$category->url,'system_id'=>$system->id,'brand_id'=>$brand_id])}}">{{ $system->{'title_'.$lang} }}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="contentWrapper d-grid">
                @if(!empty($products))
                    @foreach($products as $product)
                        <div class="product d-flex justify-content-center">
                            <a href="{{route('product',['url'=>$product->url])}}">
                                <div class="d-flex align-items-center justify-content-center flex-column">
                                    <img src="{{$product->first_image()}}" alt="">
                                </div>
                                <div>
                                    <h6>{{ $product->{'title_'.$lang} }}</h6>
                                    <p>{{number_format($product->price)}} @lang('static.AMD') </p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif

            </div>
            {{ $products->links() }}
        </div>
    </main>
@endsection
