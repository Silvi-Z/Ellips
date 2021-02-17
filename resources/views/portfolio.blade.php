@extends('layouts.app')

@section('content')
    <main>
        <div class="h1Title">ՊՈՐՏՖՈԼԻՈ</div>
        <div class="portfolioPage">
            <div class="portfolio">
                <div class="portfolioBigImg row">
                    <div class="col-12">
                        <a href="{{route("portfolioSingle")}}">
                            <div class="portfolioBigImgContainer">
                                <img src="{{asset('images/portfolioBigImg.png')}}" alt="">
                            </div>
                            <h3>Կենդանաբանական այգի</h3>
                            <p>Հակահրդեհային ահազանգման համակարգ (ORENA SYSTEM),Տեսահսկման համակարգ (Անալոգային
                                տեսախցիկներ)
                                Պահպանման և տագնապի ահազանգման համակարգ (EVO-192)
                            </p>
                        </a>
                    </div>
                </div>
                <div class="portfolioSmallImages row">
                    <div class="col-12 col-md-6">
                        <div class="portfolioContainer">
                            <img src="{{asset('images/portfolioFirstSmallImg.png')}}" alt="">
                        </div>
                        <h3>«Էլիտ Պլազա» բիզնես կենտրոն</h3>
                        <p>Հակահրդեհային ահազանգման համակարգ (ORENA SYSTEM),Տեսահսկման համակարգ (Անալոգային
                            տեսախցիկներ)</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="portfolioContainer">
                            <img src="{{asset('images/portfolioSecondSmallImg.png')}}" alt="">
                        </div>
                        <h3>HSBC Բանկ Հայաստան</h3>
                        <p>Հակահրդեհային ահազանգման համակարգ (ORENA SYSTEM),Տեսահսկման համակարգ (Անալոգային
                            տեսախցիկներ)</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="portfolioContainer">
                            <img src="{{asset('images/portfolioFirstSmallImg.png')}}" alt="">
                        </div>
                        <h3>«Էլիտ Պլազա» բիզնես կենտրոն</h3>
                        <p>Հակահրդեհային ահազանգման համակարգ (ORENA SYSTEM),Տեսահսկման համակարգ (Անալոգային
                            տեսախցիկներ)</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="portfolioContainer">
                            <img src="{{asset('front/images/giphy.gif')}}" alt="">
                        </div>
                        <h3>HSBC Բանկ Հայաստան</h3>
                        <p>Հակահրդեհային ահազանգման համակարգ (ORENA SYSTEM),Տեսահսկման համակարգ (Անալոգային
                            տեսախցիկներ)</p>
                    </div>
                </div>
                <!--                <button class="button">Պորտֆոլիո</button>-->
            </div>
        </div>
        <div class="darkSection">
            <h3>ԱՐԽԻՎ</h3>
            <div class="archive">
                <a href="{{route('portfolioSingle')}}">
                    <div class="archivePortfolio d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="imgVideoWrapper">
                                <img src="{{asset('images/portfolioImg.jpg')}}" alt="">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                            </div>
                        </div>
                        <span class="navigateBtn"></span>
                    </div>
                </a>
                <a href="{{route('portfolioSingle')}}">
                    <div class="archivePortfolio d-flex align-items-center justify-content-between">
                        <div class="d-flex justify-content-center">
                            <div class="imgVideoWrapper">
                                <img src="{{asset('images/portfolioImg.jpg')}}" alt="">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                            </div>
                        </div>
                        <span class="navigateBtn"></span>
                    </div>
                </a>
                <a href="{{route('portfolioSingle')}}">
                    <div class="archivePortfolio d-flex align-items-center justify-content-between">
                        <div class="d-flex justify-content-center">
                            <div class="imgVideoWrapper">
                                <img src="{{asset('images/portfolioImg.jpg')}}" alt="">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                            </div>
                        </div>
                        <span class="navigateBtn"></span>
                    </div>
                </a>
                <a href="{{route('portfolioSingle')}}">
                    <div class="archivePortfolio d-flex align-items-center justify-content-between">
                        <div class="d-flex justify-content-center">
                            <div class="imgVideoWrapper">
                                <img src="{{asset('front/images/Isopoly.gif')}}" alt="">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                            </div>
                        </div>
                        <span class="navigateBtn"></span>
                    </div>
                </a>
                <a href="{{route('portfolioSingle')}}">
                    <div class="archivePortfolio d-flex align-items-center justify-content-between">
                        <div class="d-flex justify-content-center">
                            <div class="imgVideoWrapper">
                                <img src="{{asset('images/portfolioImg.jpg')}}" alt="">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                            </div>
                        </div>
                        <span class="navigateBtn"></span>
                    </div>
                </a>
            </div>
        </div>
    </main>
@endsection
