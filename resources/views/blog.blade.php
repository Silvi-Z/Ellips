@extends('layouts.app')
@section('title'){{ $blog->{'title_'.$lang} }} @endsection
@section('content')
    <main>
        <div class="blogWrapper flex-column align-items-center justify-content-center">
            <div class="imageContainer">
                <div class="d-flex justify-content-center">
                    <div></div>
                    <div class="blogBigImageWrapper">
                        <img src="{{$blog->first_image()}}" alt="">
                    </div>
                </div>
            </div>
            <div></div>
            <div class="singleBlog">
                <div class="blogSlider">
                    <h3>{{ $blog->{'title_'.$lang} }}</h3>
                    <div>
                        <div class="description">
                            <p>{!! $blog->{'text_'.$lang} !!}</p>
                        </div>

                        @if(!empty($blog->images) && count($blog->images)>1)
                        <div>
                            <div class="sliderBlog">
                                    @foreach($blog->images as  $image)
                                        @if($image->image_name )
                                            @if(asset('files/'.$image->image_name) != $blog->first_image())

                                                <div class="modalSpan d-flex align-items-center" data-toggle="modal" data-target="#blogModalSlide">
                                                    <img class="modalImg" src="{{asset('files/'.$image->image_name)}}" alt="img">
                                                </div>
                                            @endif
                                        @else
                                            <div class="modalSpan d-flex align-items-center" data-toggle="modal" data-target="#blogModalSlide">
                                                <iframe width="100%" src="{{$image->video}}">
                                                </iframe>
                                            </div>
                                        @endif
                                    @endforeach
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="wrapper">
                    @if(!empty($blogs) && count($blogs))
                        @foreach($blogs as $sblog)
                            <a href="{{route('blog',['url'=>$sblog->url])}}">
                                <div class="blog d-flex align-items-center justify-content-between">
                                    <div class="d-flex justify-content-center">
                                        <div class="imgVideoWrapper">
                                            <img src="{{$sblog->first_image()}}" alt="">
                                        </div>
                                        <div class="d-flex flex-wrap ">
                                            <div>
                                                <h4>{{ $sblog->{'title_'.$lang} }}</h4>
                                            </div>
                                            <p>{{date('m.d.Y'),strtotime($sblog->updated_at)}}</p>
                                            <span class="navigateBtn"></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection
