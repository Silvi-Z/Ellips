@if(!empty($top_portfolios) && count($top_portfolios))
    @foreach($top_portfolios as $top_portfolio)

            <div class="col-12 col-md-6">
                <a href="{{route("portfolio",['url'=>$top_portfolio->url])}}">
                    <div class="portfolioContainer">
                        <img src="{{$top_portfolio->first_image()}}" alt="">
                    </div>
                    <h3>{{ $top_portfolio->{'title_'.$lang} }}</h3>
                    <p>{{ $top_portfolio->{'small_text_'.$lang} }}</p>
                </a>
            </div>
    @endforeach
@endif