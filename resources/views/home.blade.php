@extends('layouts.app')
@section('content')
    <main class="homePage d-flex flex-column">
        <div class="homePageTitle h1Title">ԱՆՎՏԱՆԳՈՒԹՅՈՒՆ․ ՈՐԱԿ․ ՀՈՒՍԱԼԻՈՒԹՅՈՒՆ</div>
        <section>
            <div class="container">
                <div class="d-flex justify-content-center slider w-100">
                    <div class="w-100 position-relative d-flex justify-content-end">
                        <div class="wrap">
                            <div class="dots">
                                <div class="prev"></div>
                                <div class="heroSlider textSlide bigSlide">
                                    <div>ԼՈՒՍԱՑՈՒՅՑԻ ԶԱՐԳԱՑՈՒՄԸ</div>
                                    <div>ԼՈՒՍԱՑՈՒՅՑԻ</div>
                                    <div>ԼՈՒՍԱՑՈՒՅՑԻ ԶԱՐԳԱՑՈՒՄԸ ԼՈՒՍԱՑՈՒՅՑԻ</div>
                                </div>
                                <div class="heroSlider imagesSlide">
                                    <div>
                                        <img src="{{asset('front/images/Isopoly.gif')}}" alt="">
                                    </div>
                                    <div>
                                        <img src="{{asset('images/img2.jfif')}}" alt="img1" data-text="ԼՈՒՍԱՑՈՒՅՑԻ">
                                    </div>
                                    <div>
                                        <img src="{{asset('images/img3.jfif')}}" alt="img1"
                                             data-text="ԼՈՒՍԱՑՈՒՅՑԻ ԶԱՐԳԱՑՈՒՄԸ ԼՈՒՍԱՑՈՒՅՑԻ">
                                    </div>
                                </div>
                                <div class="heroSlider imagesSmallSlide">
                                    <div>
                                        <img src="{{asset('front/images/Isopoly.gif')}}"
                                             data-text="ԼՈՒՍԱՑՈՒՅՑԻ ԼՈՒՍԱՑՈՒՅՑԻ" alt="">
                                    </div>
                                    <div>
                                        <img src="{{asset('images/img2.jfif')}}" alt="img1" data-text="ԼՈՒՍԱՑՈՒՅՑԻ">
                                    </div>
                                    <div>
                                        <img src="{{asset('images/img3.jfif')}}" alt="img1"
                                             data-text="ԼՈՒՍԱՑՈՒՅՑԻ ԶԱՐԳԱՑՈՒՄԸ ԼՈՒՍԱՑՈՒՅՑԻ">
                                    </div>
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
            <h3>Ծառայություններ</h3>
            <div class="services d-flex">
                <div class="serviceWrapper">
                    <div class="servicesTitleWrapper">
                        <img src="{{asset('front/icons/slide01.svg')}}" alt="">
                        <div class="servicesTitle">Տեխնիկական Խորհրդատվություն</div>
                    </div>
                    <div class="servicesSlideDescription">«Էլլիպս ՋիԷյ» ընկերությունն առաջարկում է տեխնիկական խորհրդատվություն բարձրակարգ մասնագետների
                        կողմից, ինչպես նոր ձեռք բերվող ապրանքների,
                        այնպես էլ գործող անվտանգության համակարգերի վերաբերյալ: Վերջինիս համար խորհրդատվությունը տրվում է
                        պայմանագրային հիմունքներով:</div>
                </div>
                <div class="serviceWrapper">
                    <div class="servicesTitleWrapper">
                        <img src="{{asset('front/icons/slide02.svg')}}" alt="">
                        <div class="servicesTitle"> Նախագծում, Արտադրություն և Ներկրում</div>
                    </div>
                    <div class="servicesSlideDescription">«Էլլիպս ՋիԷյ» ընկերությունն առաջարկում է տեխնիկական խորհրդատվություն բարձրակարգ մասնագետների
                        կողմից, ինչպես նոր ձեռք բերվող ապրանքների,
                        այնպես էլ գործող անվտանգության համակարգերի վերաբերյալ: Վերջինիս համար խորհրդատվությունը տրվում է
                        պայմանագրային հիմունքներով:</div>
                </div>
                <div class="serviceWrapper">
                    <div class="servicesTitleWrapper">
                        <img src="{{asset('front/icons/slide03.svg')}}" alt="">
                        <div class="servicesTitle">Տեղադրում և Գործարկում</div>
                    </div>
                    <div class="servicesSlideDescription">«Էլլիպս ՋիԷյ» ընկերությունն առաջարկում է տեխնիկական խորհրդատվություն բարձրակարգ մասնագետների
                        կողմից, ինչպես նոր ձեռք բերվող ապրանքների,
                        այնպես էլ գործող անվտանգության համակարգերի վերաբերյալ: Վերջինիս համար խորհրդատվությունը տրվում է
                        պայմանագրային հիմունքներով:</div>
                </div>
                <div class="serviceWrapper">
                    <div class="servicesTitleWrapper">
                        <img src="{{asset('front/icons/slide02.svg')}}" alt="">
                        <div class="servicesTitle">Տեղադրում և Գործարկում</div>
                    </div>
                    <div class="servicesSlideDescription">«Էլլիպս ՋիԷյ» ընկերությունն առաջարկում է տեխնիկական խորհրդատվություն բարձրակարգ մասնագետների
                        կողմից, ինչպես նոր ձեռք բերվող ապրանքների,
                        այնպես էլ գործող անվտանգության համակարգերի վերաբերյալ: Վերջինիս համար խորհրդատվությունը տրվում է
                        պայմանագրային հիմունքներով:</div>
                </div>
                <div class="serviceWrapper">
                    <div class="servicesTitleWrapper">
                        <img src="{{asset('front/icons/slide02.svg')}}" alt="">
                        <div class="servicesTitle"> Նախագծում, Արտադրություն և Ներկրում</div>
                    </div>
                    <div class="servicesSlideDescription">«Էլլիպս ՋիԷյ» ընկերությունն առաջարկում է տեխնիկական խորհրդատվություն բարձրակարգ մասնագետների
                        կողմից, ինչպես նոր ձեռք բերվող ապրանքների,
                        այնպես էլ գործող անվտանգության համակարգերի վերաբերյալ: Վերջինիս համար խորհրդատվությունը տրվում է
                        պայմանագրային հիմունքներով:</div>
                </div>
                <div class="serviceWrapper">
                    <div class="servicesTitleWrapper">
                        <img src="{{asset('front/icons/slide03.svg')}}" alt="">
                        <div class="servicesTitle">Տեղադրում և Գործարկում</div>
                    </div>
                    <div class="servicesSlideDescription">«Էլլիպս ՋիԷյ» ընկերությունն առաջարկում է տեխնիկական խորհրդատվություն բարձրակարգ մասնագետների
                        կողմից, ինչպես նոր ձեռք բերվող ապրանքների,
                        այնպես էլ գործող անվտանգության համակարգերի վերաբերյալ: Վերջինիս համար խորհրդատվությունը տրվում է
                        պայմանագրային հիմունքներով:</div>
                </div>
                <div class="serviceWrapper">
                    <div class="servicesTitleWrapper">
                        <img src="{{asset('front/icons/slide02.svg')}}" alt="">
                        <div class="servicesTitle">Տեղադրում և Գործարկում</div>
                    </div>
                    <div class="servicesSlideDescription">«Էլլիպս ՋիԷյ» ընկերությունն առաջարկում է տեխնիկական խորհրդատվություն բարձրակարգ մասնագետների
                        կողմից, ինչպես նոր ձեռք բերվող ապրանքների,
                        այնպես էլ գործող անվտանգության համակարգերի վերաբերյալ: Վերջինիս համար խորհրդատվությունը տրվում է
                        պայմանագրային հիմունքներով:</div>
                </div>
                <!--                    </div>-->
            </div>
            <!--                        <div class="wrapper">-->
            <div class="moreServices row d-flex justify-content-center">
                <div class="col servicesDescription">«Էլլիպս ՋիԷյ» ընկերությունն առաջարկում է նաև ծառայությունների առանձին փաթեթներ,որոնք են․</div>
                <div class="d-flex col-12 col-xl-9 moreServicesSlide justify-content-center">
                    <div>
                        <div class="d-flex moreService justify-content-center align-items-center w-250 ">Էլեկտրասնուցում</div>
                    </div>
                    <div>
                        <div class="d-flex moreService justify-content-center align-items-center w-250 ">Բակի լուսավորություն</div>
                    </div>
                    <div>
                        <div class="d-flex moreService justify-content-center align-items-center w-250 ">Բակի լուսավորություն</div>
                    </div>
                </div>
            </div>
            <!--                        </div>-->
            <div class="companies w-100">
                <div class="companiesTitle">Մեզ վստահում են</div>
                @include ('companies')
            </div>
            <div class="wrapper">
                <div class="portfolio ">
                    <div class="portfolioBigImg row">
                        <div class="col-12">
                            <a href="{{route("portfolio",['url'=>234])}}">
                                <div class="portfolioBigImgContainer">
                                    <img src="{{asset('images/portfolioBigImg.png')}}" alt="">
                                </div>
                                <h3>Կենդանաբանական այգի</h3>
                                <div class="portfolioSmallText">Հակահրդեհային ահազանգման համակարգ (ORENA SYSTEM),Տեսահսկման համակարգ (Անալոգային
                                    տեսախցիկներ)
                                    Պահպանման և տագնապի ահազանգման համակարգ (EVO-192)
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="portfolioSmallImages row">
                        <div class="col-12 col-md-6">
                            <div class="portfolioContainer">
                                <img src="{{asset('images/portfolioFirstSmallImg.png')}}" alt="">
                            </div>
                            <h3>«Էլիտ Պլազա» բիզնես կենտրոն</h3>
                            <div class="portfolioSmallText">Հակահրդեհային ահազանգման համակարգ (ORENA SYSTEM),Տեսահսկման համակարգ (Անալոգային
                                տեսախցիկներ)</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="portfolioContainer">
                                <img src="{{asset('images/portfolioSecondSmallImg.png')}}" alt="">
                            </div>
                            <h3>HSBC Բանկ Հայաստան</h3>
                            <div class="portfolioSmallText">Հակահրդեհային ահազանգման համակարգ (ORENA SYSTEM),Տեսահսկման համակարգ (Անալոգային
                                տեսախցիկներ)</div>
                        </div>
                    </div>
                    <a href="{{route('portfolios')}}">
                        <button class="button">Պորտֆոլիո</button>
                    </a>
                </div>
            </div>
        </div>
        <section>
            <div class="container">

                <div class="productPageWrapper d-flex flex-column">
                    <h3>Ապրանքեր և համակարգեր</h3>
                    <!--                    <div class="container">-->
                    <div class="contentWrapper d-grid">
                        <div class="product d-flex justify-content-center">
                            <a href="{{route('product',['url'=>111])}}">
                                <div class="d-flex align-items-center justify-content-center flex-column">
                                    <img src="{{asset('front/images/camera2.png')}}" alt="">
                                </div>
                                <div>
                                    <h6>Տնային մոնիտորինգի հավաքածու, որն ունի Wi-Fi ջրհեղեղի տեսախցիկ և 1080p HD վիդեո
                                        դռան
                                        զանգ</h6>
                                    <p>20․000 դր․ </p>
                                </div>
                            </a>
                        </div>
                        <div class="product d-flex justify-content-center">
                            <a href="{{route('product',['url'=>111])}}">
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
                        <div class="w-100"></div>
                    </div>
                    <!--                    </div>-->
                    <!--                    <div class="d-flex">-->
                    <!---->
                    <!--                        <div class="product">-->
                    <!--                            <div class="d-flex align-items-center justify-content-center flex-column">

                                                    <img src="/images/camera3.png" alt="">-->
                    <!--                            </div>-->
                    <!--                            <div>-->
                    <!--                                <h6>2K HD բացօթյա PTZ IP տեսախցիկ 330ft IR գիշերային տեսողություն</h6>

                                                    <p>20․000  դր․</p>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!---->
                    <!--                    </div>-->
                    <a href="{{route('categories',['url'=>888])}}">
                        <button type="button" class="btn btn-dark button">Տեսնել ավելին</button>
                    </a>
                    <!--                    <button class="button">Տեսնել ավելին</button>-->
                </div>
            </div>
        </section>
        <div class="blogs w-100 d-flex justify-content-center bg-white">
            <div class="w-100">
                <h3>Բլոգ</h3>
                <div class="blogsWrapper">
                    <div class="wrapper">
                        <a href="{{route('blog',['url'=>234])}}">
                            <div class="blog d-flex align-items-center justify-content-between">
                                <div class="d-flex justify-content-center">
                                    <div class="imgVideoWrapper">
                                        <img src="{{asset('front/images/blog1.png')}}" alt="">
                                    </div>
                                    <div class="d-flex flex-wrap">
                                        <div>
                                            <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                                        </div>
                                        <p>12.28.2020</p>
                                        <span class="navigateBtn"></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{route('blog',['url'=>234])}}">
                            <div class="blog d-flex align-items-center justify-content-between">
                                <div class="d-flex justify-content-center">
                                    <div class="imgVideoWrapper">
                                        <img src="{{asset('front/images/blog2.png')}}" alt="">
                                    </div>
                                    <div class="d-flex flex-wrap">
                                        <div>
                                            <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                                        </div>
                                        <p>12.28.2020</p>
                                        <span class="navigateBtn"></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{route('blog',['url'=>234])}}">
                            <div class="blog d-flex align-items-center justify-content-between">
                                <div class="d-flex justify-content-center">
                                    <div class="imgVideoWrapper">
                                        <img src="{{asset('front/images/blog3.png')}}" alt="">
                                    </div>
                                    <div class="d-flex flex-wrap">
                                        <div>
                                            <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                                        </div>
                                        <p>12.28.2020</p>
                                        <span class="navigateBtn"></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{route('blogs',['url'=>234])}}">
                            <button class="button btn btn-dark">Տեսնել ավելին</button>
                        </a>
                        {{--                        <button class="button">Տեսնել ավելին</button>--}}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

