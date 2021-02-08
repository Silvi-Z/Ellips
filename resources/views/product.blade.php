@extends('layouts.app')

@section('content')
    <main class="singleProductPage">
        <h1>Տեսախցիկներ</h1>
        <div class="d-flex wrapper">
            <div class="singleProduct">
                <div>
                    <img src="{{asset('images/camera3.png')}}">
                </div>
                <div>
                    <video autoplay muted loop>
                        <source src="{{asset('images/video.mp4')}}" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="singleInfo">
                <h6>2K HD բացօթյա PTZ IP տեսախցիկ 330ft IR գիշերային տեսողություն</h6>
                <p class="price">20․000 դր․</p>
                <p><span>Կատարյալ 4K նկար</span>
                    Այս անվտանգության տեսախցիկը կարող է արձանագրել 4K Ultra HD տեսանյութ ՝ ավելի քան 8 միլիոն պիքսել ՝
                    հիանալի մանրամասնությամբ և լուծաչափով: Այսօր անվտանգության արդյունաբերության ամենաբարձր չափանիշը `4K
                    թույլտվությունը տալիս է ճշգրիտ պատկերներ և գույների վերարտադրություն: Սա նաև կբարձրացնի թվային
                    խոշորացումը, որպեսզի հեռվից հեռու տեսնեք:
                    <span>Կառուցված է դրսում օգտագործման համար</span>
                    Այս 4K անվտանգության տեսախցիկը ունի IP67 վարկանիշ և նախատեսված է բոլոր տեսակի եղանակային պայմաններին
                    դիմակայելու համար: Փաստորեն, այն կարող է գործել -40 ° F- ից 131 ° F (-40 ° C- 55 ° C) տատանվող
                    ջերմաստիճաններում `այն դարձնելով բազմակողմանի լուծում տարբեր կլիմայական պայմաններում:</p>
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
                            <p>20․000  դր․</p>
                        </div>
                    </a>
                </div>
                <div class="product">
                    <a href="{{route('product')}}">
                        <div class="d-flex align-items-center justify-content-center flex-column">
                            <img src='{{asset('images/camera2.png')}}' alt="">
                        </div>
                        <div>
                            <h6>Տնային մոնիտորինգի հավաքածու, որն ունի Wi-Fi ջրհեղեղի տեսախցիկ և 1080p HD վիդեո դռան զանգ</h6>
                            <p>20․000  դր․</p>
                        </div>
                    </a>
                </div>
                <div class="product">
                    <a href="{{route('product')}}">
                        <div class="d-flex align-items-center justify-content-center flex-column">
                            <img src='{{asset('images/camera3.png')}}' alt="">
                        </div>
                        <div>
                            <h6>2K HD բացօթյա PTZ IP տեսախցիկ 330ft IR գիշերային տեսողություն</h6>
                            <p>20․000  դր․</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>

@endsection
