@extends('layouts.app')

@section('content')
    <main class="contactPageWrapper">
        <h1>ԿԱՊ ՄԵԶ ՀԵՏ</h1>
        <div class="contactPage">
            <div class="container">
                <div class="row contactInfo">
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <h3>ԵՐԵՎԱՆ</h3>
                                    <p class="address">Նիկողայոս Տիգրանյան 27</p>
                                    <p class="numbers">(010) 23 01 07<br>
                                        (010) 23 01 08</p>
                                    <p class="emailAddress">office@sec.am</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <h3>ԳՅՈՒՄՐԻ</h3>
                                    <p class="address">Հաղթանակի պողոտա 42/9</p>
                                    <p class="numbers">(096) 63 61 03</p>
                                    <p class="emailAddress">ellips.gyumri@sec.am</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div>
                                    <h4>ՎԱՃԱՌՔ</h4>
                                    <p class="numbers">(010) 23 69 59</p>
                                    <p class="emailAddress">sales@sec.am</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div>
                                    <h4>ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ</h4>
                                    <p class="numbers">(010) 23 69 59</p>
                                    <p class="emailAddress">hash@sec.am</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div>
                                    <h4>ԾՐԱԳՐԱՎՈՐՈՒՄ</h4>
                                    <p class="numbers">(010) 23 50 26</p>
                                    <p class="emailAddress">dev@sec.am</p>
                                </div>
                            </div>
                            <div class="col-md-7 col-6">
                                <h4>ՀԵՏԵՎԵՔ ՄԵԶ</h4>
                                <ul class="row">
                                    <li class="col-md-2 col-2"><img src="{{asset('front/icons/blackFb.svg')}}" alt=""></li>
                                    <li class="col-md-2 col-2"><img src="{{asset('front/icons/blackYouTube.svg')}}" alt=""></li>
                                    <li class="col-md-2 col-2"><img src="{{asset('front/icons/blackGoogle.svg')}}" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 form">
                        <form action="">
                            <div class="d-flex flex-column w-100 justify-content-end">
                                <label for="name"></label>
                                <input id="name" type="text" placeholder="ՁԵՐ ԱՆՈՒՆԸ">
                            </div>
                            <div class="d-flex flex-column w-100 justify-content-end">
                                <label for="email"></label>
                                <input id="email" type="email" placeholder="ՁԵՐ ԷԼ․ ՀԱՍՑԵՆ">
                            </div>
                            <div class="d-flex flex-column w-100 justify-content-end">
                                <label for="phone"></label>
                                <input id="phone" type="number" placeholder="ՁԵՐ ՀԵՌԱԽՈՍԱՀԱՄԱՐԸ">
                            </div>
                            <div class="d-flex flex-column w-100 justify-content-end">
                                <label for="message"></label>
                                <input id="message" type="text" placeholder="ՁԵՐ ՆԱՄԱԿԸ">
                            </div>
                            <button type="submit">ՈՒղարկել</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="map"></div>
    </main>
@endsection
