@if(!empty($blogs) && count($blogs))
    @foreach($blogs as $blog)
        <a href="{{route('blog',['url'=>$blog->url])}}">
            <div class="blog d-flex align-items-center justify-content-between">
                <div class="d-flex justify-content-center">
                    <div class="imgVideoWrapper">
                        <img src="{{$blog->first_image()}}" alt="">
                    </div>
                    <div class="d-flex flex-wrap ">
                        <div>
                            <h4>{{ $blog->{'title_'.$lang} }}</h4>
                        </div>
                        <p>{{date('m.d.Y'),strtotime($blog->updated_at)}}</p>
                        <span class="navigateBtn"></span>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
@endif