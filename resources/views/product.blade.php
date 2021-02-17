@extends('layouts.app')

@section('content')
    <main class="singleProductPage">
        <div class="h1Title">Տեսախցիկներ</div>
        <div class="wrapper row">
            <div class="col-xl-6 col-12 position-relative">
                <div class="singleProduct">
                    <div class="singleProductSlide">
                        <img src="{{asset('front/images/camera3.jpg')}}" alt="img">
                    </div>
                    <div class="singleProductSlide">
                        <img src="{{asset('front/images/giphy.gif')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12 singleInfo">
                <h6>2K HD բացօթյա PTZ IP տեսախցիկ 330ft IR գիշերային տեսողություն</h6>
                <p class="price">20․000 դր․</p>
                <div class="productDescription">Այս անվտանգության տեսախցիկը կարող է արձանագրել 4K Ultra HD տեսանյութ ՝
                    ավելի քան 8 միլիոն պիքսել ՝
                    հիանալի մանրամասնությամբ և լուծաչափով: </div>
                <div class="tags">
                    <a href="#">տեսախցիկներ</a>
                    <a href="#">անվտանգության համակարգ</a>
                    <a href="#">տեսահսկման համակարգ</a>
                </div>
{{--                <span class="seeAllText"><img src="{{asset('front/icons/arrowSeeMore.svg')}}" alt=""></span>--}}
            </div>
        </div>
        <div class="moreProducts">
            <h5>Նմանատիպ ապրանքեր</h5>
            <div class="d-flex justify-content-center">
                <div class="product">
                    <a href="{{route('product')}}">
                        <div class="d-flex align-items-center justify-content-center flex-column">
                            <img src='{{asset('images/camera1.png')}}' alt="">
                        </div>
                        <div>
                            <h6>5MP Super HD Ակտիվ զսպող տեսախցիկ</h6>
                            <p>20․000 դր․</p>
                        </div>
                    </a>
                </div>
                <div class="product">
                    <a href="{{route('product')}}">
                        <div class="d-flex align-items-center justify-content-center flex-column">
                            <img src='{{asset('images/camera2.png')}}' alt="">
                        </div>
                        <div>
                            <h6>Տնային մոնիտորինգի հավաքածու, որն ունի Wi-Fi ջրհեղեղի տեսախցիկ և 1080p HD վիդեո դռան
                                զանգ</h6>
                            <p>20․000 դր․</p>
                        </div>
                    </a>
                </div>
                <div class="product">
                    <a href="{{route('product')}}">
                        <div class="d-flex align-items-center justify-content-center flex-column">
                            <img src='{{asset('front/images/camera3.jpg')}}' alt="">
                        </div>
                        <div>
                            <h6>2K HD բացօթյա PTZ IP տեսախցիկ 330ft IR գիշերային տեսողություն</h6>
                            <p>20․000 դր․</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection
