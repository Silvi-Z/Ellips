@extends('layouts.app')
@section('content')
    <main class="homePage d-flex flex-column">
        <h1 class="homePageTitle">ԱՆՎՏԱՆԳՈՒԹՅՈՒՆ․ ՈՐԱԿ․ ՀՈՒՍԱԼԻՈՒԹՅՈՒՆ</h1>
        <section>
            <div class="container">
                <div class="d-flex justify-content-center slider w-100">
                    <div class="w-100 position-relative d-flex">
                        <div class="imagesSlide">
                            <div>
                                <video loop  autoplay muted height="200" width="300">
                                    <source src="{{asset('images/systemVideo.mp4')}}" type="video/mp4">
                                </video>
                            </div>
                            <div>
                                <img src="{{asset('images/img2.jfif')}}" alt="img1" data-text="ԼՈՒՍԱՑՈՒՅՑԻ">
                            </div>
                            <div>
                                <img src="{{asset('images/img3.jfif')}}" alt="img1" data-text="ԼՈՒՍԱՑՈՒՅՑԻ ԶԱՐԳԱՑՈՒՄԸ ԼՈՒՍԱՑՈՒՅՑԻ">
                            </div>
                        </div>

                        <div class="imagesSmallSlide">
                            <div>
                                <video loop  autoplay muted height="200" width="300">
                                    <source src="{{asset('images/systemVideo.mp4')}}" type="video/mp4">
                                </video>
                            </div>
                            <div>
                                <img src="{{asset('images/img2.jfif')}}" alt="img1" data-text="ԼՈՒՍԱՑՈՒՅՑԻ">
                            </div>
                            <div>
                                <img src="{{asset('images/img3.jfif')}}" alt="img1" data-text="ԼՈՒՍԱՑՈՒՅՑԻ ԶԱՐԳԱՑՈՒՄԸ ԼՈՒՍԱՑՈՒՅՑԻ">
                            </div>
                        </div>

                        <div class="wrap">
                            <div class="bigSlide">
                                <p>ԼՈՒՍԱՑՈՒՅՑԻ ԶԱՐԳԱՑՈՒՄԸ</p>
                            </div>
                            <div class="distance"></div>
                            <div class="smallSlide"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
             @include('ourExperience')
        </section>
        <div class="darkSection w-100 d-flex flex-column justify-content-center">
            <!--                <div>-->
            <h3>Ծառայություններ</h3>
            <div  class="services">
                <div>
                    <div class="servicesTitle">
                        <img src="{{asset('icons/slide01.svg')}}" alt="">
                        <p>Տեխնիկական Խորհրդատվություն</p>
                    </div>
                    <p>«Էլլիպս ՋիԷյ» ընկերությունն առաջարկում է տեխնիկական խորհրդատվություն բարձրակարգ մասնագետների կողմից, ինչպես նոր ձեռք բերվող ապրանքների,
                        այնպես էլ գործող անվտանգության համակարգերի վերաբերյալ: Վերջինիս համար խորհրդատվությունը տրվում է պայմանագրային հիմունքներով:</p>
                </div>
                <div>
                    <div class="servicesTitle">
                        <img src="{{asset('icons/slide02.svg')}}" alt="">
                        <p> Նախագծում, Արտադրություն և Ներկրում</p>
                    </div>
                    <p>«Էլլիպս ՋիԷյ» ընկերությունն առաջարկում է տեխնիկական խորհրդատվություն բարձրակարգ մասնագետների կողմից, ինչպես նոր ձեռք բերվող ապրանքների,
                        այնպես էլ գործող անվտանգության համակարգերի վերաբերյալ: Վերջինիս համար խորհրդատվությունը տրվում է պայմանագրային հիմունքներով:</p>
                </div>
                <div>
                    <div class="servicesTitle">
                        <img src="{{asset('icons/slide03.svg')}}" alt="">
                        <p>Տեղադրում և Գործարկում</p>
                    </div>
                    <p>«Էլլիպս ՋիԷյ» ընկերությունն առաջարկում է տեխնիկական խորհրդատվություն բարձրակարգ մասնագետների կողմից, ինչպես նոր ձեռք բերվող ապրանքների,
                        այնպես էլ գործող անվտանգության համակարգերի վերաբերյալ: Վերջինիս համար խորհրդատվությունը տրվում է պայմանագրային հիմունքներով:</p>
                </div>
                <div>
                    <div class="servicesTitle">
                        <img src="{{asset('icons/slide02.svg')}}" alt="">
                        <p>Տեղադրում և Գործարկում</p>
                    </div>
                    <p>«Էլլիպս ՋիԷյ» ընկերությունն առաջարկում է տեխնիկական խորհրդատվություն բարձրակարգ մասնագետների կողմից, ինչպես նոր ձեռք բերվող ապրանքների,
                        այնպես էլ գործող անվտանգության համակարգերի վերաբերյալ: Վերջինիս համար խորհրդատվությունը տրվում է պայմանագրային հիմունքներով:</p>
                </div>
                <div>
                    <div class="servicesTitle">
                        <img src="{{asset('icons/slide02.svg')}}" alt="">
                        <p> Նախագծում, Արտադրություն և Ներկրում</p>
                    </div>
                    <p>«Էլլիպս ՋիԷյ» ընկերությունն առաջարկում է տեխնիկական խորհրդատվություն բարձրակարգ մասնագետների կողմից, ինչպես նոր ձեռք բերվող ապրանքների,
                        այնպես էլ գործող անվտանգության համակարգերի վերաբերյալ: Վերջինիս համար խորհրդատվությունը տրվում է պայմանագրային հիմունքներով:</p>
                </div>
                <div>
                    <div class="servicesTitle">
                        <img src="{{asset('icons/slide03.svg')}}" alt="">
                        <p>Տեղադրում և Գործարկում</p>
                    </div>
                    <p>«Էլլիպս ՋիԷյ» ընկերությունն առաջարկում է տեխնիկական խորհրդատվություն բարձրակարգ մասնագետների կողմից, ինչպես նոր ձեռք բերվող ապրանքների,
                        այնպես էլ գործող անվտանգության համակարգերի վերաբերյալ: Վերջինիս համար խորհրդատվությունը տրվում է պայմանագրային հիմունքներով:</p>
                </div>
                <div>
                    <div class="servicesTitle">
                        <img src="{{asset('icons/slide02.svg')}}" alt="">
                        <p>Տեղադրում և Գործարկում</p>
                    </div>
                    <p>«Էլլիպս ՋիԷյ» ընկերությունն առաջարկում է տեխնիկական խորհրդատվություն բարձրակարգ մասնագետների կողմից, ինչպես նոր ձեռք բերվող ապրանքների,
                        այնպես էլ գործող անվտանգության համակարգերի վերաբերյալ: Վերջինիս համար խորհրդատվությունը տրվում է պայմանագրային հիմունքներով:</p>
                </div>
                <!--                    </div>-->
            </div>
            <!--                        <div class="wrapper">-->
            <div class="moreServices d-flex justify-content-center">
                <p>«Էլլիպս ՋիԷյ» ընկերությունն առաջարկում է նաև ծառայությունների առանձին փաթեթներ,որոնք են․</p>
                <div class="d-flex">
                    <div class="d-flex justify-content-center align-items-center w-250 ">Էլեկտրասնուցում</div>
                    <div class="d-flex justify-content-center align-items-center w-250 ">Բակի լուսավորություն</div>
                    <div class="d-flex justify-content-center align-items-center w-250 ">Սանտեխնիկա նախագծումից մինչև իրականացում, ջրահեռացում, ջրամատակարարում</div>
                </div>
            </div>
            <!--                        </div>-->
            <div class="newCompanies w-100">
                <h3>Մեզ վստահում են</h3>
                @include ('companies')
            </div>
            <div class="wrapper">
                <div class="portfolio d-flex flex-column align-items-center">
                    <div class="portfolioBigImg">
                        <img src="{{asset('images/portfolioBigImg.png')}}" class="w-100 d-flex flex-column justify-content-center" alt="">
                        <h3 class="portfolioTitle">Կենդանաբանական այգի</h3>
                        <p>Հակահրդեհային ահազանգման համակարգ (ORENA SYSTEM),Տեսահսկման համակարգ (Անալոգային տեսախցիկներ)
                            Պահպանման և տագնապի ահազանգման համակարգ (EVO-192)
                        </p>
                    </div>
                    <div class="portfolioSmallImages d-flex w-100">
                        <div>
                            <img src="{{asset('images/portfolioFirstSmallImg.png')}}" class="w-100" alt="">
                            <h3 class="portfolioTitle">«Էլիտ Պլազա» բիզնես կենտրոն</h3>
                            <p>Հակահրդեհային ահազանգման համակարգ (ORENA SYSTEM),Տեսահսկման համակարգ (Անալոգային տեսախցիկներ)</p>
                        </div>
                        <div>
                            <img src="{{asset('images/portfolioSecondSmallImg.png')}}" class="w-100" alt="">
                            <h3 class="portfolioTitle">HSBC Բանկ Հայաստան</h3>
                            <p>Հակահրդեհային ահազանգման համակարգ (ORENA SYSTEM),Տեսահսկման համակարգ (Անալոգային տեսախցիկներ)</p>
                        </div>
                    </div>
                    <button class="button">Պորտֆոլիո</button>
                </div>
            </div>
        </div>
        <section>
            <div class="container">
                <div class="products d-flex flex-column align-items-center">
                    <h3>Համակարգեր և ապրանքեր</h3>
                    <!--                    <div class="container">-->
                    <div class="d-flex">
                        <div class="col-sm product">
                            <div class="d-flex align-items-center justify-content-center flex-column">
                                <img src="{{asset('images/camera1.png')}}" alt="">
                            </div>
                            <div>
                                <h6>5MP Super HD Ակտիվ զսպող տեսախցիկ</h6>
                                <p>20․000  դր․</p>
                            </div>
                        </div>
                        <div class="col-sm product">
                            <div class="d-flex align-items-center justify-content-center flex-column">
                                <img src="{{asset('images/camera2.png')}}" alt="">
                            </div>
                            <div>
                                <h6>Տնային մոնիտորինգի հավաքածու, որն ունի Wi-Fi ջրհեղեղի տեսախցիկ և 1080p HD վիդեո դռան զանգ</h6>
                                <p>20․000  դր․</p>
                            </div>
                        </div>
                        <div class="col-sm product">
                            <div class="d-flex align-items-center justify-content-center flex-column">
                                <img src="{{asset('images/camera3.png')}}" alt="">
                            </div>
                            <div>
                                <h6>2K HD բացօթյա PTZ IP տեսախցիկ 330ft IR գիշերային տեսողություն</h6>
                                <p>20․000  դր․</p>
                            </div>
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
                    <button type="button" class="btn btn-light button">Տեսնել ավելին</button>
                    <!--                    <button class="button">Տեսնել ավելին</button>-->
                </div>
            </div>
        </section>
        <div class="blogs w-100 d-flex justify-content-center bg-white">
            <div class="w-100">
                <h3>Բլոգ</h3>
                <div class="blog d-flex align-items-center justify-content-between">
                    <img src="{{asset('images/blog1.png')}}" alt="" >
                    <div class="d-flex flex-column justify-content-center">
                        <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                        <p>12.28.2020</p>
                    </div>
                    <div >
                        <p>12.28.2020</p>
                        <span></span>
                    </div>
                </div>
                <div class="blog d-flex align-items-center justify-content-between">
                    <img src="{{asset('images/blog2.png')}}" alt="">
                    <div class="d-flex flex-column justify-content-center">
                        <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                        <p>12.28.2020</p>
                    </div>
                    <div >
                        <p>12.28.2020</p>
                        <span></span>
                    </div>
                </div>
                <div class="blog d-flex align-items-center justify-content-between">
                    <img src="{{asset('images/blog3.png')}}" alt="">
                    <div class="d-flex flex-column justify-content-center">
                        <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                        <p>12.28.2020</p>
                    </div>
                    <div>
                        <p>12.28.2020</p>
                        <span></span>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <button class="button btn btn-dark">Տեսնել ավելին</button>
                </div>
            </div>
        </div>
    </main>
@endsection

