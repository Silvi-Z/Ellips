@extends('layouts.app')

@section('content')
    <main class="productsPage wrapper">
        <h1>Համակարգեր և ապրանքներ</h1>
        @include ('selectButtons')
{{--        <div class="">--}}
            <div class="filter row">
                <div class="col">
                    <label>
                        <input type="text" placeholder="Փնտրել">
                    </label>
                </div>
                <div class="nav-item dropdown col-md-4">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                        ԸՍՏ ՀամակարգերԻ
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Համակարգ 1</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 2</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                    </ul>
                </div>
            </div>
            <div class="productsWrapper d-grid">
                @php
                    $products = [
                        [
                            "productImage" => "../images/camera1.png",
                            "productName" => "5MP Super HD Ակտիվ զսպող տեսախցիկ",
                            "productPrice" => "20․000  դր․"
                        ],
                        [
                            "productImage" => "../images/camera2.png",
                            "productName" => "Տնային մոնիտորինգի հավաքածու, որն ունի Wi-Fi ջրհեղեղի տեսախցիկ և 1080p HD վիդեո դռան զանգ",
                            "productPrice" => "20․000  դր․"
                        ],
                        [
                            "productImage" => "../images/camera3.png",
                            "productName" => "2K HD բացօթյա PTZ IP տեսախցիկ 330ft IR գիշերային տեսողություն",
                            "productPrice" => "20․000  դր․"
                        ],
                        [
                            "productImage" => "../images/camera1.png",
                            "productName" => "5MP Super HD Ակտիվ զսպող տեսախցիկ",
                            "productPrice" => "20․000  դր․"
                        ],
                        [
                            "productImage" => "../images/camera2.png",
                            "productName" => "Տնային մոնիտորինգի հավաքածու, որն ունի Wi-Fi ջրհեղեղի տեսախցիկ և 1080p HD վիդեո դռան զանգ",
                            "productPrice" => "20․000  դր․"
                        ],
                        [
                            "productImage" => "../images/camera3.png",
                            "productName" => "2K HD բացօթյա PTZ IP տեսախցիկ 330ft IR գիշերային տեսողություն",
                            "productPrice" => "20․000  դր․"
                        ]
                    ]
                @endphp
                @foreach ($products as $key => $value)
                    <div class="product d-flex justify-content-center">
                        <a href="{{route('product')}}">
                            <div class="d-flex align-items-center justify-content-center flex-column">
                                <img src={{asset($value["productImage"])}} alt="">
                            </div>
                            <div>
                                <h6>{{$value["productName"]}}</h6>
                                <p>{{$value["productPrice"]}} </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

{{--        </div>--}}
    </main>
@endsection
