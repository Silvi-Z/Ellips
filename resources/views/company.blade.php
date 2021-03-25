@extends('layouts.app')
@section('title') @lang('static.Company') @endsection
@section('content')
    {{--    $licenses = json_decode(file_get_contents("licenses.json"),true);--}}
    <main class="companyPage">
        <div class="pageTitle">
            <h1>@lang('static.Company')</h1>
        </div>
        <div class="background">
            <div class="wrapper">
                <div class="aboutCompany">
                    <p>{!! $about?$about->{'company_'.$lang}:'' !!}</p>
                    <div>
                        <span>@lang('static.WHO ARE WE')</span>
                        <p>{!! $about?$about->{'text_'.$lang}:'' !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="licensesWrapper">
            <div class="licensesTitle">@lang('static.CERTIFICATES')</div>
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
            <div class="historyParagraph">
                <p>{!! $about?$about->{'text_2_'.$lang}:'' !!}</p>
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
                                    <p>{{ $history->{'text_'.$lang} }}
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
