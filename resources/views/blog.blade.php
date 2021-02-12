@extends('layouts.app')

@section('content')
    <main>
        <div class="blogWrapper flex-column align-items-center justify-content-center">
            <div class="imageContainer">
                <div class="d-flex justify-content-center">
                    <div></div>
                    <img src="{{asset('front/images/blogSlide1.jpg')}}" alt="">
                </div>
            </div>
            <div></div>
            <div class="singleBlog">
                <div class="blogSlider">
                    <h3>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h3>
                    <div>
                        <div>
                            <span class="modalSpan" data-toggle="modal" data-target="#blogModalSlide"></span>
                            <div class="sliderBlog">
                                <div>
                                    <img src="{{asset('front/images/blog2.png')}}"
                                         alt="">
                                </div>
                                <div>
                                    <img src="{{asset('front/images/blog1.png')}}"
                                         alt="">
                                </div>
                                <div>
                                    <img src="{{asset('front/images/giphy.gif')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <p>Հետևելով և կարևորելով Հետևելով և կարևորելով Seaside Startup Summit-ի գործունեությունը՝
                                մենք
                                որոշում
                                կայացրեցինք աջակցել և հովանավորել այս տարվա գալա միջոցառումը, որը կկայանա Սևանում սույն
                                թվականի
                                հուլիսի 22-ից 29-ը: Seaside Startup Summint-ը վրանային ճամբար-ստարտափների միջոցառում է,
                                որի
                                նպատակն
                                է ստեղծել կամուրջ ներդրողների և ձեռնարկատերերի համագործակցության համար: Սևան Ստարտափ
                                Սամիթ
                                2018-ը
                                լինելու է այս տարի իրականցված բոլոր սամիթների գալա միջոցառումը: Այն միավորելու է 1000 ձե
                                ռնարկատերերի
                                աշխարհի տարբեր անկյուններից և ստեղծելու է համագործակցության կամուրջ: Էլլիպսը
                                կավտոմատացնի
                                ծառայությունները սամիթի ողջ տարածքում՝ սկսած մուտքի/ելքի համակարգից մինչև ուտեստի
                                գնումները:
                                Էլլիպսի
                                շնորհիվ սամիթի տարածքում բոլոր գործողությունները կիրականացվեն առանց մարդկային
                                միջամտության:
                                Seaside
                                Startup Summit-ի գործունեությունը՝ մենք որոշում կայացրեցինք աջակցել և հովանավորել այս
                                տարվա
                                գալա
                                միջոցառումը, որը կկայանա Սևանում սույն թվականի հուլիսի 22-ից 29-ը: Seaside Startup
                                Summint-ը
                                վրանային ճամբար-ստարտափների միջոցառում է:</p>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <a href="{{route('blog')}}">
                        <div class="blog d-flex align-items-center justify-content-between">
                            <div class="d-flex justify-content-center">
                                <div class="imgVideoWrapper">
                                    <img src="{{asset('front/images/blog3.png')}}" alt="">
                                </div>
                                <div class="d-flex flex-wrap ">
                                    <div>
                                        <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                                    </div>
                                    <p>12.28.2020</p>
                                    <span class="navigateBtn"></span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('blog')}}">
                        <div class="blog d-flex align-items-center justify-content-between">
                            <div class="d-flex justify-content-center">
                                <div class="imgVideoWrapper">
                                    <img src="{{asset('front/images/blog3.png')}}" alt="">
                                </div>
                                <div class="d-flex flex-wrap ">
                                    <div>
                                        <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                                    </div>
                                    <p>12.28.2020</p>
                                    <span class="navigateBtn"></span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('blog')}}">
                        <div class="blog d-flex align-items-center justify-content-between">
                            <div class="d-flex justify-content-center">
                                <div class="imgVideoWrapper">
                                    <img src="{{asset('front/images/blog3.png')}}" alt="">
                                </div>
                                <div class="d-flex flex-wrap ">
                                    <div>
                                        <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                                    </div>
                                    <p>12.28.2020</p>
                                    <span class="navigateBtn"></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="modal fade " id="blogModalSlide" tabindex="-1" role="dialog" aria-labelledby="blogModalSlide"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </div>
                        <div class="modal-body">
                            <img src="{{asset('front/images/blog3.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
