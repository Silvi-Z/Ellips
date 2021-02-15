@extends('layouts.app')

@section('content')
    <main class="contactPageWrapper">
        <div class="h1Title">ԿԱՊ ՄԵԶ ՀԵՏ</div>
        <div class="contactPage">
            <div class="container">
                <div class="row contactInfo">
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <div class="city">ԵՐԵՎԱՆ</div>
                                    <div class="showMap">(Տեսնել քարտեզի վրա)</div>
                                    <p class="address">Նիկողայոս Տիգրանյան 27</p>
                                    <p class="numbers">(010) 23 01 07<br>
                                        (010) 23 01 08</p>
                                    <p class="emailAddress">office@sec.am</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <div class="city">ԳՅՈՒՄՐԻ</div>
                                    <div class="showMap">(Տեսնել քարտեզի վրա)</div>
                                    <p class="address">Հաղթանակի պողոտա 42/9</p>
                                    <p class="numbers">(096) 63 61 03</p>
                                    <p class="emailAddress">ellips.gyumri@sec.am</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div>
                                    <div class="serviceContact">ՎԱՃԱՌՔ</div>
                                    <p class="numbers">(010) 23 69 59</p>
                                    <p class="emailAddress">sales@sec.am</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div>
                                    <div class="serviceContact">ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ</div>
                                    <p class="numbers">(010) 23 69 59</p>
                                    <p class="emailAddress">hash@sec.am</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div>
                                    <div class="serviceContact">ԾՐԱԳՐԱՎՈՐՈՒՄ</div>
                                    <p class="numbers">(010) 23 50 26</p>
                                    <p class="emailAddress">dev@sec.am</p>
                                </div>
                            </div>
                            <div class="col-md-7 col-6">
                                <div class="serviceContact">ՀԵՏԵՎԵՔ ՄԵԶ</div>
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
                                <label for="name">
                                    <span class="errorMessage">Please enter you name </span>
                                    <input id="name" type="text" placeholder="ՁԵՐ ԱՆՈՒՆԸ" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ՁԵՐ ԱՆՈՒՆԸ'">
                                </label>
                            </div>
                            <div class="d-flex flex-column w-100 justify-content-end">
                                <label for="email">
                                    <span class="errorMessage">Please enter you email </span>
                                    <input id="email" type="email" placeholder="ՁԵՐ ԷԼ․ ՀԱՍՑԵՆ" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ՁԵՐ ԷԼ․ ՀԱՍՑԵՆ'">
                                </label>
                            </div>
                            <div class="d-flex flex-column w-100 justify-content-end">
                                <label for="phone">
                                    <span class="errorMessage">Please enter you phone </span>
                                    <input id="phone" type="tel" placeholder="ՁԵՐ ՀԵՌԱԽՈՍԱՀԱՄԱՐԸ" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ՁԵՐ ՀԵՌԱԽՈՍԱՀԱՄԱՐԸ'">
                                </label>
                            </div>
                            <div class="d-flex flex-column w-100 justify-content-end">
                                <label for="message">
                                    <span class="errorMessage">Please enter you phone </span>
                                    <textarea rows="1" id="message" type="textarea" placeholder="ՁԵՐ ՆԱՄԱԿԸ" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ՁԵՐ ՆԱՄԱԿԸ'"></textarea>
                                </label>
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
