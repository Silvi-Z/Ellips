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
                        <div>
                            <span></span>
                            <div class="sliderBlog">
                                @if(!empty($blog->images) && count($blog->images))
                                    @foreach($blog->images as  $image)
                                        @if($image->image_name)
                                            <div class="modalSpan" data-toggle="modal" data-target="#blogModalSlide">
                                                <img class="modalImg" src="{{asset('files/'.$image->image_name)}}" alt="img">
                                            </div>
                                        @else
                                            <div class="modalSpan" data-toggle="modal" data-target="#blogModalSlide">
                                                <iframe width="100%" src="{{$image->video}}">
                                                </iframe>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
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
                </div>
            </div>
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
        </div>
    </main>
@endsection
