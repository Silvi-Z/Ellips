@extends('layouts.app')

@section('content')
    {{--    $licenses = json_decode(file_get_contents("licenses.json"),true);--}}
    <main class="companyPage">
        <div class="h1Title">@lang('static.Company')</div>
        <div class="background">
            <div class="wrapper">
                <div class="aboutCompany">
                    <p>
                        {!! $about->{'company_'.$lang} !!}
                    </p>
                    <div>
                        <span>ՈՎ ԵՆՔ ՄԵՆՔ</span>
                        <p>{!! $about->{'text_'.$lang} !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="licensesWrapper">
            <div class="licensesTitle">ՍԵՐՏԻՖԻԿԱՏՆԵՐ</div>
            <div class="licenses">

                @if(!empty($certificates) && count($certificates))
                    @foreach($certificates as $certificat)
                        <div class="licensesSlideWrapper">
                            <div>{{$certificat->number}}</div>
                            <div>{{ $certificat->{'title_'.$lang} }}</div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        @include('ourExperience')
        <div class="companies">
            <div class="ourPartners">@lang('static.OUR PARTNERS')</div>
            @include('companies')
        </div>
        @if(!empty($histories) && count($histories))

            <div class="darkSection companiesHistory">
                <h3>@lang('static.HISTORY')</h3>
                <div class="wrapper container">
                    @foreach($histories as $history)
                        @if($loop->index%2 == 0)
                            <div class="history row">
                                <div class="col-xl-6 col-12">
                                    <p>{{ $history->{'text_'.$lang} }}
                                    </p>
                                </div>
                                <div class="col-xl-6 col-12 companyImage">
                                    <img src="{{asset('files/'.$history->image)}}" alt="">
                                </div>
                            </div>
                        @else
                            <div class="history row">
                                <div class="col-xl-6 col-12 companyImage">
                                    <img src="{{asset('front/images/historyImg1.jpg')}}" alt="">
                                </div>
                                <div class="col-xl-6 col-12">
                                    <p>1976 թ.-ին Պոլիտեխնիկական ինստիտուտի ուսանող 22-ամյա Գուրգենը ձեռք է բերում
                                        Phakard H8
                                        մակնիշի ավտոմեքենա և
                                        10 տարի շարունակ սեփական ուժերով վերանորոգելուց հետո այն վաճառում է գերմանացի մի
                                        գնորդի:
                                        1989թ. Էր, Սովետական
                                        Միության մութ ու ցուրտ տարիները, երբ Գուրգենի փոքր եղբայրը՝ Ալեքսանը, Ռուսաստանի
                                        դաշնությունում պաշտպանում է
                                        գիտական ատենախոսությունը, վերադառնում հայրենիք և եղբոր հետ որոշում հիմնել
                                        ավտոմատ դարպասների
                                        արտադրություն:
                                        Մեքենայի վաճառքից վաստակած ամբողջ հասույթով բազմազավակ ընտանիքի տղաները
                                        վարձակալում են 216
                                        ք/մ մակերեսով ծածկ,
                                        կառուցում պատերը, գնո
                                        ւմ տարբեր հաստատություններից դուրս գրված հաստոցները, վերանորոգում դրանք և սկսում
                                        արտադրությունը:
                                    </p>
                                </div>

                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endif
    </main>
@endsection
