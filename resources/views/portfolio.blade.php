@extends('layouts.app')

@section('content')
    <main>
        <h1>ՊՈՐՏՖՈԼԻՈ</h1>
        <div class="portfolioPage">
            <div class="portfolio">
                <div class="portfolioBigImg">
                    <div>
                        <a href="{{route("portfolioSingle")}}">
                            <img src="{{asset('images/portfolioBigImg.png')}}" alt="">
                            <h3>Կենդանաբանական այգի</h3>
                            <p>Հակահրդեհային ահազանգման համակարգ (ORENA SYSTEM),Տեսահսկման համակարգ (Անալոգային տեսախցիկներ)
                                Պահպանման և տագնապի ահազանգման համակարգ (EVO-192)
                            </p>
                        </a>
                    </div>
                </div>
                <div class="portfolioSmallImages">
                    <div>
                        <img src="{{asset('images/portfolioFirstSmallImg.png')}}" alt="">
                        <h3>«Էլիտ Պլազա» բիզնես կենտրոն</h3>
                        <p>Հակահրդեհային ահազանգման համակարգ (ORENA SYSTEM),Տեսահսկման համակարգ (Անալոգային տեսախցիկներ)</p>
                    </div>
                    <div>
                        <img src="{{asset('images/portfolioSecondSmallImg.png')}}" alt="">
                        <h3>HSBC Բանկ Հայաստան</h3>
                        <p>Հակահրդեհային ահազանգման համակարգ (ORENA SYSTEM),Տեսահսկման համակարգ (Անալոգային տեսախցիկներ)</p>
                    </div>
                    <div>
                        <img src="{{asset('images/portfolioFirstSmallImg.png')}}" alt="">
                        <h3>«Էլիտ Պլազա» բիզնես կենտրոն</h3>
                        <p>Հակահրդեհային ահազանգման համակարգ (ORENA SYSTEM),Տեսահսկման համակարգ (Անալոգային տեսախցիկներ)</p>
                    </div>
                    <div>
                        <img src="{{asset('images/portfolioSecondSmallImg.png')}}" alt="">
                        <h3>HSBC Բանկ Հայաստան</h3>
                        <p>Հակահրդեհային ահազանգման համակարգ (ORENA SYSTEM),Տեսահսկման համակարգ (Անալոգային տեսախցիկներ)</p>
                    </div>

                </div>
                <!--                <button class="button">Պորտֆոլիո</button>-->
            </div>
        </div>
        <div class="darkSection">
            <h3>ԱՐԽԻՎ</h3>
            <div class="archive">
                <div class="archivePortfolio d-flex align-items-center justify-content-between">
                    <div class="d-flex justify-content-center">
                        <div class="imgVideoWrapper">
                            <img src="{{asset('images/portfolioImg.jpg')}}" alt="">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                        </div>
                    </div>
                    <span></span>
                </div>
                <div class="archivePortfolio d-flex align-items-center justify-content-between">
                    <div class="d-flex justify-content-center">
                        <div class="imgVideoWrapper">
                            <img src="{{asset('images/portfolioImg.jpg')}}" alt="">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                        </div>
                    </div>
                    <span></span>
                </div>
                <div class="archivePortfolio d-flex align-items-center justify-content-between">
                    <div class="d-flex justify-content-center">
                        <div class="imgVideoWrapper">
                            <img src="{{asset('images/portfolioImg.jpg')}}" alt="">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                        </div>
                    </div>
                    <span></span>
                </div>
                <div class="archivePortfolio d-flex align-items-center justify-content-between">
                    <div class="d-flex justify-content-center">
                        <div class="imgVideoWrapper">
                            <video loop  autoplay muted height="200" width="300">
                                <source src="{{asset('images/video.mp4')}}" type="video/mp4">
                            </video>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                        </div>
                    </div>
                    <span></span>
                </div>
                <div class="archivePortfolio d-flex align-items-center justify-content-between">
                    <div class="d-flex justify-content-center">
                        <div class="imgVideoWrapper">
                            <img src="{{asset('images/portfolioImg.jpg')}}" alt="">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                        </div>
                    </div>
                    <span></span>
                </div>

            </div>
        </div>
    </main>
@endsection
