@extends('layouts.app')

@section('content')
    <main>
        <div class="blogWrapper flex-column align-items-center justify-content-center">
            <div class="imageContainer">
                <div class="d-flex justify-content-center">
                    <div></div>
                    <img src="{{$blog->first_image()}}" alt="">
                </div>
            </div>
            <div></div>
            <div class="singleBlog">
                <div class="blogSlider">
                    <h3>{{ $blog->{'title_'.$lang} }}</h3>
                    <div>
                        <div>
                            <span class="modalSpan" data-toggle="modal" data-target="#blogModalSlide"></span>
                            <div class="sliderBlog">
                                @if(!empty($blog->images) && count($blog->images))
                                    @foreach($blog->images as  $image)
                                        @if($image->image_name)
                                            <div>
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
                        </div>
                        <div class="description">
                            <p>{!! $blog->{'text_'.$lang} !!}</p>
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
                            <img src="{{asset('front/images/blog3.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
