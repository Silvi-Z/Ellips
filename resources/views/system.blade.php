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
                        <img src="{{asset('front/images/giphy.gif')}}" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12 singleInfo">
                <h6>Տեսահսկման անալոգային և թվային համակարգեր</h6>
                <div class="systemDescription">Տեսահսկումը հանդիսանում է օբյեկտի անվտանգության համակարգի անբաժանելի մասը: Տեսահսկման համակարգերի
                    հիմնական գործառույթը վիզուալ վերահսկողությունն է, ահազանգումը իրական ժամանակի ռեժիմում և պահպանվող
                    տարածքում գործողությունների ձայնագրումը: Ինտերնետին միացված տեսահսկման համակարգի օգնությամբ հնարավոր
                    է իրական ժամանակում վերահսկել ընկերության այլ մասնաճյուղերի աշխատանքը, որոնք գտնվում են այլ
                    քաղաքներում և երկրներում: Տեսահսկման համակարգերը տեղադրվում են բնակարաններում, ամառանոցներում,
                    բանկերում, խանութներում և սուպերմարկետներում, գրասենյակներում, արտադրության և պահեստավորման
                    վայրերում, ավտոկայանատեղերում և այլն:Տեսահսկումը հանդիսանում է օբյեկտի անվտանգության համակարգի անբաժանելի մասը: Տեսահսկման համակարգերի
                    հիմնական գործառույթը վիզուալ վերահսկողությունն է, ահազանգումը իրական ժամանակի ռեժիմում և պահպանվող
                    տարածքում գործողությունների ձայնագրումը: Ինտերնետին միացված տեսահսկման համակարգի օգնությամբ հնարավոր
                    է իրական ժամանակում վերահսկել ընկերության այլ մասնաճյուղերի աշխատանքը, որոնք գտնվում են այլ
                    քաղաքներում և երկրներում: Տեսահսկման համակարգերը տեղադրվում են բնակարաններում, ամառանոցներում,
                    բանկերում,բնակարաններում, ամառանոցներում,
                    բանկերում, ամառանոցներում,
                    բանկերում, ամառանոցներում,
                    բանկերում,</div>
{{--                <span class="seeAllText">--}}
{{--                    <img src="{{asset('front/icons/arrowSeeMore.svg')}}" alt="">--}}
{{--                </span>--}}
            </div>
        </div>
        <div class="moreSystems container ">
            <div class="moreSystemsTitle">Ներգրավված ապրանքեր</div>
            <div class="systemsSlide">
                <div class="product">
                    <a href="{{route('system')}}">
                        <div class="d-flex align-items-center justify-content-center flex-column">
                            <img src='{{asset('front/images/camera1.png')}}' alt="">
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
                            <img src='{{asset('front/images/camera3.jpg')}}' alt="">
                        </div>
                        <div>
                            <h6>2K HD բացօթյա PTZ IP տեսախցիկ 330ft IR գիշերային տեսողություն</h6>
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

