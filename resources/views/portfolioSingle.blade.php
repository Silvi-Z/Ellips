@extends('layouts.app')

@section('content')
    <main>
        <div class="h1Title">{{ $portfolio->{'title_'.$lang} }}</div>
        <div class="portfolioPage singlePortfolio">
            <div>
                <img src="{{$portfolio->first_image()}}" alt="">
            </div>
            <div class="row">
                <div class="col-md-12 description">
                    <h5>@lang('static.DESCRIPTION')</h5>
                    <div class="portfolioInfo">
                        <div class="sliderPortfolio">
                            @if(!empty($portfolio->images) && count($portfolio->images))
                                @foreach($portfolio->images as  $image)
                                    @if($image->image_name)
                                        <div class="modalSpan" data-toggle="modal" data-target="#blogModalSlide">
                                            <img src="{{asset('files/'.$image->image_name)}}" alt="img">
                                        </div>
                                    @else
                                        <div>
                                            <iframe width="100%"
                                                    src="{{$image->video}}?autoplay=0&showinfo=0&controls=0">
                                            </iframe>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        {!! $portfolio->{'text_'.$lang} !!}
                    </div>

                </div>
            </div>
            <div class="modal fade " id="portfolioModalSlide" tabindex="-1" role="dialog"
                 aria-labelledby="portfolioModalSlide"
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
        @if(!empty($portfolios) && count($portfolios))
            <div class="darkSection">
                <h3>@lang('static.ARCHIVE')</h3>
                <div class="archive">

                    @foreach($portfolios as $portfolio)
                        <a href="{{route('portfolio',['url'=>$portfolio->url])}}">
                            <div class="archivePortfolio d-flex align-items-center justify-content-between">
                                <div class="d-flex justify-content-center">
                                    <div class="imgVideoWrapper" >
                                        <img src="{{$portfolio->first_image()}}" alt="">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h4>{{ $portfolio->{'title_'.$lang} }}</h4>
                                    </div>
                                </div>
                                <span class="navigateBtn"></span>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        @endif

        <div class="modal fade " id="blogModalSlide" tabindex="-1" role="dialog" aria-labelledby="blogModalSlide"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </div>
                    <div class="modal-body">
                        <img class="modalOpen" src="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
