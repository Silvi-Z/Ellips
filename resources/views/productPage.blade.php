@extends('layouts.app')

@section('content')
    <main>
        <div class="h1Title">ՏԵՍԱԽՑԻԿՆԵՐ</div>
        @include('selectButtons')
        <div class="productPageWrapper">
            <div class="filter row">
                <div class="col-md-12 col-lg-6 col">
                    <label>
                        <input type="text" placeholder="Փնտրել">
                    </label>
                </div>
                <div class="nav-item dropdown col-md-6 col-lg-3">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                        ԸՍՏ Բրենդի
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Բրենդ 1</a></li>
                        <li><a class="dropdown-item" href="#">Բրենդ 2</a></li>
                        <li><a class="dropdown-item" href="#">Բրենդ 3</a></li>
                        <li><a class="dropdown-item" href="#">Բրենդ 3</a></li>
                        <li><a class="dropdown-item" href="#">Բրենդ 3</a></li>
                        <li><a class="dropdown-item" href="#">Բրենդ 3</a></li>
                        <li><a class="dropdown-item" href="#">Բրենդ 3</a></li>
                        <li><a class="dropdown-item" href="#">Բրենդ 3</a></li>
                        <li><a class="dropdown-item" href="#">Բրենդ 3</a></li>
                        <li><a class="dropdown-item" href="#">Բրենդ 3</a></li>
                    </ul>
                </div>
                <div class="nav-item dropdown col-md-6 col-lg-3">
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
            <div class="contentWrapper d-grid">
                <div class="product d-flex justify-content-center">
                    <a href="{{route('product')}}">
                        <div class="d-flex align-items-center justify-content-center flex-column">
                            <img src="{{asset('front/images/camera1.png')}}" alt="">
                        </div>
                        <div>
                            <h6>5MP Super HD Ակտիվ զսպող տեսախցիկ</h6>
                            <p>20․000 դր․ </p>
                        </div>
                    </a>
                </div>
                <div class="product d-flex justify-content-center">
                    <a href="{{route('product')}}">
                        <div class="d-flex align-items-center justify-content-center flex-column">
                            <img src="{{asset('front/images/camera2.png')}}" alt="">
                        </div>
                        <div>
                            <h6>Տնային մոնիտորինգի հավաքածու, որն ունի Wi-Fi ջրհեղեղի տեսախցիկ և 1080p HD վիդեո դռան
                                զանգ</h6>
                            <p>20․000 դր․ </p>
                        </div>
                    </a>
                </div>
                <div class="product d-flex justify-content-center">
                    <a href="{{route('product')}}">
                        <div class="d-flex align-items-center justify-content-center flex-column">
                            <img src="{{asset('front/images/camera3.jpg')}}" alt="">
                        </div>
                        <div>
                            <h6>2K HD բացօթյա PTZ IP տեսախցիկ 330ft IR գիշերային տեսողություն</h6>
                            <p>20․000 դր․ </p>
                        </div>
                    </a>
                </div>
                <div class="product d-flex justify-content-center">
                    <a href="{{'product'}}">
                        <div class="d-flex align-items-center justify-content-center flex-column">
                            <img src="{{asset('front/images/camera1.png')}}" alt="">
                        </div>
                        <div>
                            <h6>5MP Super HD Ակտիվ զսպող տեսախցիկ</h6>
                            <p>20․000 դր․ </p>
                        </div>
                    </a>
                </div>
                <div class="product d-flex justify-content-center">
                    <a href="{{route('product')}}">
                        <div class="d-flex align-items-center justify-content-center flex-column">
                            <img src="{{asset('front/images/camera2.png')}}" alt="">
                        </div>
                        <div>
                            <h6>Տնային մոնիտորինգի հավաքածու, որն ունի Wi-Fi ջրհեղեղի տեսախցիկ և 1080p HD վիդեո դռան
                                զանգ</h6>
                            <p>20․000 դր․ </p>
                        </div>
                    </a>
                </div>
                <div class="product d-flex justify-content-center">
                    <a href="{{route('product')}}">
                        <div class="d-flex align-items-center justify-content-center flex-column">
                            <img src="{{asset('front/images/camera3.jpg')}}" alt="">
                        </div>
                        <div>
                            <h6>2K HD բացօթյա PTZ IP տեսախցիկ 330ft IR գիշերային տեսողություն</h6>
                            <p>20․000 դր․ </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection
