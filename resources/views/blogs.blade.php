@extends('layouts.app')

@section('content')
    <main>
        <h1>ԲԼՈԳ</h1>
        <div class="blogsWrapper">
            <div class="wrapper">
                <div class="blog d-flex align-items-center justify-content-between">
                    <div class="d-flex justify-content-center">
                        <div class="imgVideoWrapper">
                            <img src="{{asset('front/images/blog1.png')}}" alt="">
                        </div>
                        <div class="d-flex flex-wrap ">
                            <div>
                                <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                            </div>
                            <p>12.28.2020</p>
                            <span></span>
                        </div>
                    </div>
                </div>
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
                            <span></span>
                        </div>
                    </div>
                </div>
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
                            <span></span>
                        </div>
                    </div>
                </div>

                <button class="button">Տեսնել ավելին</button>
            </div>
        </div>
    </main>
@endsection
