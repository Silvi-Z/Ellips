@extends('layouts.app')

@section('content')
    <main class="productsPage wrapper">
        <div class="h1Title">@lang('static.products and systems')</div>
        @include ('selectButtons')
            <div class="filter row">
                <form class="col" action="">
                    <div>
                        <label>
                            <input data-name="category" class="searchInput" type="text" placeholder=" @lang('static.Search')">
                        </label>
                        <button class="searchButton btn-dark">փնտրել</button>
                    </div>
                </form>
                <div class="nav-item dropdown col-md-4">
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
            <div class="productsWrapper d-grid">
                @php
                    $products = [
                        [
                            "productImage" => "front/images/camera1.png",
                            "productName" => "5MP Super HD Ակտիվ զսպող տեսախցիկ",
                            "productPrice" => "20․000  դր․"
                        ],
                        [
                            "productImage" => "front/images/camera2.png",
                            "productName" => "Տնային մոնիտորինգի հավաքածու, որն ունի Wi-Fi ջրհեղեղի տեսախցիկ և 1080p HD վիդեո դռան զանգ",
                            "productPrice" => "20․000  դր․"
                        ],
                        [
                            "productImage" => "front/images/camera3.jpg",
                            "productName" => "2K HD բացօթյա PTZ IP տեսախցիկ 330ft IR գիշերային տեսողություն",
                            "productPrice" => "20․000  դր․"
                        ],
                        [
                            "productImage" => "front/images/camera1.png",
                            "productName" => "5MP Super HD Ակտիվ զսպող տեսախցիկ",
                            "productPrice" => "20․000  դր․"
                        ],
                        [
                            "productImage" => "front/images/camera2.png",
                            "productName" => "Տնային մոնիտորինգի հավաքածու, որն ունի Wi-Fi ջրհեղեղի տեսախցիկ և 1080p HD վիդեո դռան զանգ",
                            "productPrice" => "20․000  դր․"
                        ],
                        [
                            "productImage" => "front/images/camera3.jpg",
                            "productName" => "2K HD բացօթյա PTZ IP տեսախցիկ 330ft IR գիշերային տեսողություն",
                            "productPrice" => "20․000  դր․"
                        ]
                    ]
                @endphp
                @foreach ($categories as $key => $category)
                    <div class="product d-flex justify-content-center">
                        <a href="{{route('category',['url'=>$category->url])}}">
                            <div class="d-flex align-items-center justify-content-center flex-column">
                                <img src="{{asset('files/'.$category->image)}}" alt="">
                            </div>
                            <div>
                                <h6>{{ $category->{'title_'.$lang} }}</h6>
{{--                                <p>{{$value["productPrice"]}} </p>--}}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

    </main>
@endsection
