@extends('layouts.app')

@section('content')
    <main>
        <div class="h1Title">ԿԵՆԴԱՆԱԲԱՆԱԿԱՆ ԱՅԳԻ</div>
        <div class="portfolioPage singlePortfolio">
            <div>
                <img src="{{asset("front/images/portfolioBigImg.png")}}" alt="">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5>ՊԱՏՎԻՐԱՏՈՒ</h5>
                    <p>«Էլիտ Պլազա» բիզնես կենտրոն</p>
                </div>
                <div class="col-md-6">
                    <h5>ԱՇԽԱՏԱՆՔ</h5>
                    <p>ԱՆՎՏԱՆԳՈՒԹՅԱՆ ՀԱՄԱԿԱՐԳԻ ՆԱԽԱԳԾՈՒՄ ԵՎ ՏԵՂԱԴՐՈՒՄ</p>
                </div>
                <div class="col-md-12 description">
                    <h5>ՆԿԱՐԱԳԻՐ</h5>
                    <p>Հակահրդեհային ահազանգման համակարգ հետևյալ պարամետրերով
                        Գլխավոր վահանակ- ORENA OZH 4800E ահալոգա հասցեային 4 շղթա
                        Շղթայի ընդարձակիչներ- 192 հասցեի համար 4 հատ
                        Մուտքային մոդուլներ -անալոգային սարքեր միացնելու համար, 2 հասցե
                        Ելքային մոդուլներ -անալոգային շչակներ և այլ սարքեր կառավարելու համար 1 հասցե
                        Ծխի, ջերմության և ջրի հոսքի տվիչներ, ինչպես նաև ձեռքի ազդարարիչներ հասցեային
                        Անընդմեջ սնուցման սարքավորում 27 վոլտ 34 ամպեր ժամ ունակությամբ
                        Հրդեհամարման համակարգ հետևյալ պարամետրերով
                        Հիմնական, ռեզերվային և օժանդակ պոմպերից կազմված պոմպակայան
                        Պոմպակայանի կառավարման վահանակ
                        Բաշխիչ կայան -4 ուղղություն
                        Խողովակաշարեր, փականներ և ավտոմատ ջրցան կափույրներ
                        Օդափոխության սարքավորումների կառավարման համակարգ
                        2 հատ խաչաձև փոխկապակցված ռելեային վահանակ
                        Անցումային համակարգ հետևյալ պարամետրերով
                        Դռների կառավարման 48 սարք- (արտադրությունը՝ Էլլիպս ՋիԷյ)
                        Մուտքային հանգույցներ հակահրդեհային համակարգին միանալու համար (արտադրությունը՝ Էլլիպս ՋիԷյ)
                        Էլեկտրոմագնիսական փականներ անընդմեջ սնուցման սարքերով - (արտդրությունը՝ Էլլիպս ՋիԷյ)
                        Համակարգիչ ծրագրային ապահովումով - (արտադրությունը՝ Էլլիպս ՋիԷյ</p>
                    <div class="sliderPortfolio">
                        <div>
                            <img src="{{asset("front/images/portfolio2.jpg")}}" alt="">
                        </div>
                        <div>
                            <img src="{{asset("front/images/portfolio2.jpg")}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade " id="bportfolioModalSlide" tabindex="-1" role="dialog"
                 aria-labelledby="bportfolioModalSlide"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </div>
                        <div class="modal-body">
                            <img src="{{asset("front/images/portfolio2.jpg")}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="darkSection">
            <h3>ԱՐԽԻՎ</h3>
            <div class="archive">
                <div class="archivePortfolio d-flex align-items-center justify-content-between">
                    <div class="d-flex justify-content-center">
                        <div class="imgVideoWrapper">
                            <img src="{{asset('front/images/portfolioSecondSmallImg.png')}}" alt="">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                        </div>
                    </div>
                    <span class="navigateBtn"></span>
                </div>
                <div class="archivePortfolio d-flex align-items-center justify-content-between">
                    <div class="d-flex justify-content-center">
                        <div class="imgVideoWrapper">
                            <img src="{{asset('front/images/portfolioFirstSmallImg.png')}}" alt="">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                        </div>
                    </div>
                    <span class="navigateBtn"></span>
                </div>
                <div class="archivePortfolio d-flex align-items-center justify-content-between">
                    <div class="d-flex justify-content-center">
                        <div class="imgVideoWrapper">
                            <img src="{{asset('front/images/portfolioSecondSmallImg.png')}}" alt="">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                        </div>
                    </div>
                    <span class="navigateBtn"></span>
                </div>
                <div class="archivePortfolio d-flex align-items-center justify-content-between">
                    <div class="d-flex justify-content-center">
                        <div class="imgVideoWrapper">
                            <video loop autoplay muted height="200" width="300">
                                <source src="{{asset('front/images/video.mp4')}}" type="video/mp4">
                            </video>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                        </div>
                    </div>
                    <span class="navigateBtn"></span>
                </div>
                <div class="archivePortfolio d-flex align-items-center justify-content-between">
                    <div class="d-flex justify-content-center">
                        <div class="imgVideoWrapper">
                            <img src="{{asset('front/images/portfolioSecondSmallImg.png')}}" alt="">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h4>Անվտանգության համակարգի ամենախոշոր ձեռքբերումները 2020 թվականին</h4>
                        </div>
                    </div>
                    <span class="navigateBtn"></span>
                </div>
            </div>
        </div>
    </main>
@endsection
