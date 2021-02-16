@extends('layouts.app')

@section('content')
    <main>
        <div class="h1Title">@lang('static.Portfolio')</div>
        <div class="portfolioPage">
            <div class="portfolio">
                <div class="portfolioBigImg row">
                    @if(!empty($top_portfolios) && count($top_portfolios))
                        @foreach($top_portfolios as $top_portfolio)
                            @if($loop->index == 0)
                                <div class="col-12">
                                    <a href="{{route("portfolio",['url'=>$top_portfolio->url])}}">
                                        <div class="portfolioBigImgContainer">
                                            <img src="{{$top_portfolio->first_image()}}" alt="">
                                        </div>
                                        <h3>{{ $top_portfolio->{'title_'.$lang} }}</h3>
                                        <p>{{ $top_portfolio->{'small_text_'.$lang} }}</p>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
                <div class="portfolioSmallImages row">


                    @if(!empty($top_portfolios) && count($top_portfolios))
                        @foreach($top_portfolios as $top_portfolio)
                            @if($loop->index > 0)
                                <div class="col-12 col-md-6">
                                    <a href="{{route("portfolio",['url'=>$top_portfolio->url])}}">
                                    <div class="portfolioContainer">
                                        <img src="{{$top_portfolio->first_image()}}" alt="">
                                    </div>
                                    <h3>{{ $top_portfolio->{'title_'.$lang} }}</h3>
                                    <p>{{ $top_portfolio->{'small_text_'.$lang} }}</p>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    @endif

                </div>
                <!--                <button class="button">Պորտֆոլիո</button>-->
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
                                    <div class="imgVideoWrapper">
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
    </main>
@endsection
