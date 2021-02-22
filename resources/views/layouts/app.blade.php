<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('front/bootstrapCSS/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/slick-1.8.1/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('front/slick-1.8.1/slick/slick-theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-1.11.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-migrate-1.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/bootstrapJS/bootstrap.js') }}"></script>
    <script src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js') }}"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js') }}"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('/front/slick-1.8.1/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/front/slick-1.8.1/slick/slick.min.js') }}"></script>

    <script src="{{ asset('/front/js/ddslick.js') }}"></script>
    <script src="{{ asset('/front/js/script.js') }}"></script>
    <script src="{{ asset('/front/js/pagination.js') }}"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=1973b4f0-00a7-49c0-9e22-9baaee610410&lang=ru_RU" type="text/javascript">
    </script>
</head>
<body>
<header class="d-flex justify-content-center w-100 align-items-center justify-content-center">
    <section class="d-flex flex-column align-items-center">
        <div class="row d-flex flex-row justify-content-between w-100 align-items-center">
            <a class="col navbar-brand d-flex align-items-center text-decoration-none text-dark logo"
               href="{{route('mainpage')}}">
                <img src="{{asset('front/icons/logo.svg')}}" width="30" height="30" class="d-inline-block align-top"
                     alt="">
                <span>ellips</span>
            </a>
            <div class="inline-menu d-flex col-xl-9 col-lg-10 justify-content-between">
                <nav class="d-flex align-items-center">
                    <a href="{{route('company')}}">@lang('static.Company')</a>
                    <a class="selectMenu">@lang('static.Products / Systems')
                        <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M3.60396 5.11608L0.164193 1.6762C-0.0547314 1.45738 -0.0547314 1.10261 0.164193 0.883896C0.382921 0.665166 0.737679 0.665166 0.95639 0.883896L4.00006 3.92766L7.04362 0.883984C7.26244 0.665255 7.61716 0.665255 7.83589 0.883984C8.0547 1.10271 8.0547 1.45747 7.83589 1.67629L4.39607 5.11617C4.28665 5.22553 4.1434 5.28016 4.00008 5.28016C3.85668 5.28016 3.71332 5.22543 3.60396 5.11608Z"
                                    fill="black"/>
                        </svg>
                    </a>
                    <a href="{{route('portfolios')}}">@lang('static.Portfolio')</a>
                    <a href="{{route('blogs')}}">@lang('static.Blog')</a>
                </nav>
                <div class="d-flex align-items-center">
                    <a href={{route("contact")}}>
                        <button class="btn btn-dark">@lang('static.Contact us')</button>
                    </a>
                    <div class="selectLang">
                        <div>
                            <div data-id="hy" class="setLang hy @if(app()->getLocale() == 'hy' ) first @endif"></div>
                            <div data-id="en" class="setLang en @if(app()->getLocale() == 'en' ) first @endif"></div>
                            <div data-id="ru" class="setLang ru @if(app()->getLocale() == 'ru' ) first @endif"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="toggleMenu d-none col-1 justify-content-center"></div>
        </div>
        <div class="subMenuWrapper">
            <div class="subMenu">
                <br>
                <div>
                    <a href="{{route('categories')}}" class="title">
                        <h5>@lang('static.Products')</h5>
                        <div class="arrow"></div>
                    </a>
                    <div class="row">
                        @if(!empty($categories))

                            <ul class="col-4">
                                @foreach($categories as $catgory)
                                    @if($loop->index % 3 == 0 )
                                        <li>
                                            <a href="{{route('category',['url'=>$catgory->url])}}">{{ $catgory->{'title_'.$lang} }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <ul class="col-4">
                                @foreach($categories as $catgory)
                                    @if($loop->index % 3 == 1 )
                                        <li>
                                            <a href="{{route('category',['url'=>$catgory->url])}}">{{ $catgory->{'title_'.$lang} }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <ul class="col-4">
                                @foreach($categories as $catgory)
                                    @if($loop->index % 3 == 2 )
                                        <li>
                                            <a href="{{route('category',['url'=>$catgory->url])}}">{{ $catgory->{'title_'.$lang} }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>


                        @endif

                    </div>
                </div>
                <div>
                    <a href="{{route('systems')}}" class="title">
                        <h5>@lang('static.Systems')</h5>
                        <div class="arrow"></div>
                    </a>
                    <div class="row">
                        @if(!empty($systems))
                            <ul class="col-4">
                                @foreach($systems as $system)
                                    @if($loop->index%3 == 0 )
                                        <li>
                                            <a href="{{route('system',['url'=>$system->url])}}">{{ $system->{'title_'.$lang} }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <ul class="col-4">
                                @foreach($systems as $system)
                                    @if($loop->index%3 == 1 )
                                        <li>
                                            <a href="{{route('system',['url'=>$system->url])}}">{{ $system->{'title_'.$lang} }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <ul class="col-4">
                                @foreach($systems as $system)
                                    @if($loop->index%3 == 2 )
                                        <li>
                                            <a href="{{route('system',['url'=>$system->url])}}">{{ $system->{'title_'.$lang} }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>

                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="responsiveMenu">
            <ul>
                <li><a href="{{route('company')}}">@lang('static.Company')</a></li>
                <li><a href="{{route('systems')}}">@lang('static.Systems')</a></li>
                <li><a href="{{route('categories')}}">@lang('static.Products')</a></li>
                <li><a href="{{route('portfolios')}}">@lang('static.Portfolio')</a></li>
                <li><a href="{{route('blogs')}}">@lang('static.Blog')</a></li>
            </ul>
            <div class="d-flex align-items-center">
                <button class="btn btn-dark"><a href="{{route('contact')}}">@lang('static.Contact us')</a></button>
                <div class="selectLang">
                    <div>
                        <div data-id="hy" class="hy first"></div>
                        <div data-id="en" class="en"></div>
                        <div data-id="ru" class="ru"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>

@yield('content')

<footer>
    <div  class="row">
        <div class="col-lg-2 col-md col footerLogo">
            <div>
                <a class="col navbar-brand d-flex align-items-center text-decoration-none text-dark logo"
                   href="{{route('mainpage')}}">
                    <img src="{{asset('front/icons/logo.svg')}}" width="30" height="30" class="d-inline-block align-top"
                         alt="">
                    <span>ellips</span>
                </a>
            </div>
        </div>
        <div class="col-lg-7 col-md col-12 contact <!--d-flex justify-content-center-->">
            <div>
                <h4>Կապ</h4>
                <div>
                    <ul>
                        <li>@lang('static.Yerjan Nikoghayos Tigranyan 27')</li>
                        <li>(010) 23 01 07, (010) 23 01 08</li>
                        <li>office@sec.am</li>
                    </ul>
                    <ul>
                        <li>@lang('static.Gyumri Haghtanak Avenue 42/9')</li>
                        <li>(096) 63 61 03</li>
                        <li>ellips.gyumri@sec.am</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md col follow">
            <h4>@lang('static.Follow Us!')</h4>
            <div class="social">
                <a target="_blank" href="https://www.facebook.com/www.sec.am">
                    <div></div>
                </a><a target="_blank" href="https://www.youtube.com/channel/UCFMpy6JYN7D_-Rzjkbp-Crg">
                    <div></div>
                </a><a target="_blank" href="https://www.google.com/maps/place/ELLIPS+GA/@40.213124,44.521059,15z/data=!4m5!3m4!1s0x0:0xb57ecc12190ddc0f!8m2!3d40.213124!4d44.521059">
                    <div></div>
                </a>
            </div>
        </div>
    </div>
</footer>
@yield('script')
</body>
</html>
