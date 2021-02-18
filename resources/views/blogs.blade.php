@extends('layouts.app')

@section('content')
    <main class="blogsPage">
        <div class="h1Title">@lang('static.Blog')</div>
        <div class="blogsWrapper">
            <div class="wrapper">
                <div class="all_blogs">
                    @if(!empty($blogs) && count($blogs))
                        @foreach($blogs as $blog)
                            <a href="{{route('blog',['url'=>$blog->url])}}">
                                <div class="blog d-flex align-items-center justify-content-between">
                                    <div class="d-flex justify-content-center">
                                        <div class="imgVideoWrapper">
                                            <img src="{{$blog->first_image()}}" alt="">
                                        </div>
                                        <div class="d-flex flex-wrap w-100">
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
                </div>
                @if($blogs->total() > 5)
                    <button class="button see_more_blogs" data-page="2">@lang('static.See more')</button>
                @endif
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script>
        $(".see_more_blogs").click(function () {
            var page = Number($(this).attr('data-page'))
            $.ajax({url: '{{route('getBlogs')}}', data:{page:page}, success: function(result){

                    $('.all_blogs').append(result.html)
                    if(page*5 >=  result.total){
                        $(".see_more_blogs").remove()
                    }else{
                        page += 1;
                        $(".see_more_blogs").attr('data-page',page);
                    }
                }});
        })
    </script>
@endsection
