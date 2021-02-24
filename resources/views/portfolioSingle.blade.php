@extends('layouts.app')
@section('title'){{ $portfolio->{'title_'.$lang} }} @endsection

@section('content')
    <main>
        <h1>{{ $portfolio->{'title_'.$lang} }}</h1>
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
                                        @if(asset('files/'.$image->image_name) != $portfolio->first_image())
                                            <div class="modalSpan" data-toggle="modal" data-target="#blogModalSlide">
                                                <img src="{{asset('files/'.$image->image_name)}}" alt="img">
                                            </div>
                                        @endif
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

        </div>
        @if(!empty($portfolios) && count($portfolios))
            <div class="darkSection">
                <h3>@lang('static.ARCHIVE')</h3>
                <div class="archive">

                    @foreach($portfolios as $portfolio)
                        <a @if( $portfolio->{'text_'.$lang} ) href="{{route('portfolio',['url'=>$portfolio->url])}}" @else href="javascript:void(0)" @endif >
                            <div class="archivePortfolio d-flex align-items-center justify-content-between">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="imgVideoWrapper" >
                                        <img src="{{$portfolio->first_image()}}" alt="">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h4>{{ $portfolio->{'title_'.$lang} }}</h4>
                                    </div>
                                </div>
                                @if( $portfolio->{'text_'.$lang} )
                                    <span class="navigateBtn"></span>
                                @endif
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        @endif
    </main>
@endsection
