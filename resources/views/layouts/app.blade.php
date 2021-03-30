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
    <link rel="stylesheet" href="{{asset('front/css/fontawesome-free-5.15.2-web/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/slick-1.8.1/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('front/slick-1.8.1/slick/slick-theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <link rel="shortcut icon" type="image/jpg" href="{{asset('front/icons/favicon.png')}}"/>
    <script src="{{asset("front/js/jquery-3.5.1.min.js")}}"></script>
    <script src="{{asset("front/js/popper.min.js")}}"></script>
    <script type="text/javascript" src="{{ asset('front/bootstrapJS/bootstrap.min.js') }}"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js') }}"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('/front/slick-1.8.1/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/front/slick-1.8.1/slick/slick.min.js') }}"></script>
    <script src="{{ asset('/front/js/ddslick.js') }}"></script>
    <script src="{{ asset('/front/js/script.js') }}"></script>
    <script src="{{ asset('/front/js/pagination.js') }}"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=1973b4f0-00a7-49c0-9e22-9baaee610410&lang=ru_RU"
            type="text/javascript">
    </script>
    @yield('css')
</head>
<body>
<header class="d-flex justify-content-center w-100 align-items-center">
    <section class="d-flex flex-column align-items-center justify-content-center">
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
                    <a href="{{route('categories')}}" class="selectMenu">@lang('static.Products / Systems')
                        <svg class="toggleArrow" width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                        <div class="arrow">
                            <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.60396 5.11608L0.164193 1.6762C-0.0547314 1.45738 -0.0547314 1.10261 0.164193 0.883896C0.382921 0.665166 0.737679 0.665166 0.95639 0.883896L4.00006 3.92766L7.04362 0.883984C7.26244 0.665255 7.61716 0.665255 7.83589 0.883984C8.0547 1.10271 8.0547 1.45747 7.83589 1.67629L4.39607 5.11617C4.28665 5.22553 4.1434 5.28016 4.00008 5.28016C3.85668 5.28016 3.71332 5.22543 3.60396 5.11608Z" fill="black"/>
                            </svg>
                        </div>
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
                        <div class="arrow">
                            <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.60396 5.11608L0.164193 1.6762C-0.0547314 1.45738 -0.0547314 1.10261 0.164193 0.883896C0.382921 0.665166 0.737679 0.665166 0.95639 0.883896L4.00006 3.92766L7.04362 0.883984C7.26244 0.665255 7.61716 0.665255 7.83589 0.883984C8.0547 1.10271 8.0547 1.45747 7.83589 1.67629L4.39607 5.11617C4.28665 5.22553 4.1434 5.28016 4.00008 5.28016C3.85668 5.28016 3.71332 5.22543 3.60396 5.11608Z" fill="black"/>
                            </svg>
                        </div>
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
                <li><a href="{{route('categories')}}">@lang('static.Products')</a></li>
                <li><a href="{{route('systems')}}">@lang('static.Systems')</a></li>
                <li><a href="{{route('portfolios')}}">@lang('static.Portfolio')</a></li>
                <li><a href="{{route('blogs')}}">@lang('static.Blog')</a></li>
            </ul>
            <div class="d-flex align-items-center">
                <button class="btn btn-dark"><a href="{{route('contact')}}">@lang('static.Contact us')</a></button>
                <div class="selectLang">
                    <div>
                        <div data-id="hy" class="setLang hy @if(app()->getLocale() == 'hy' ) first @endif"></div>
                        <div data-id="en" class="setLang en @if(app()->getLocale() == 'en' ) first @endif"></div>
                        <div data-id="ru" class="setLang ru @if(app()->getLocale() == 'ru' ) first @endif"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>

@yield('content')

@if(session()->has('alert-success'))
    <section class="modalWrapper">
        <div class="successMessageModal">
            <span class="closeModal"></span>
            <div class="successMessage">{{session()->get('alert-success')}}</div>
        </div>
    </section>
@endif
<footer>
    <div class="row">
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
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="hoverIcon" d="M40 20.0605C40 9.01367 31.0469 0.0605469 20 0.0605469C8.95312 0.0605469 0 9.01367 0 20.0605C0 31.1074 8.95312 40.0605 20 40.0605C20.1172 40.0605 20.2344 40.0605 20.3516 40.0527V24.4902H16.0547V19.4824H20.3516V15.7949C20.3516 11.5215 22.9609 9.19336 26.7734 9.19336C28.6016 9.19336 30.1719 9.32617 30.625 9.38867V13.8574H28C25.9297 13.8574 25.5234 14.8418 25.5234 16.2871V19.4746H30.4844L29.8359 24.4824H25.5234V39.2871C33.8828 36.8887 40 29.1934 40 20.0605Z" fill="#7A8086"/>
                    </svg>
                </a><a target="_blank" href="https://www.youtube.com/channel/UCFMpy6JYN7D_-Rzjkbp-Crg">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="hoverIcon" d="M10.5068 21.537H12.0925V30.1193H13.5927V21.537H15.2078V20.1313H10.5068V21.537Z" fill="#7A8086"/>
                        <path class="hoverIcon" d="M23.1913 22.5856C22.6954 22.5856 22.2325 22.8565 21.7976 23.3926V20.1304H20.4492V30.1187H21.7976V29.3977C22.2489 29.9546 22.7113 30.2214 23.1913 30.2214C23.7278 30.2214 24.0887 29.9391 24.2688 29.385C24.3592 29.0695 24.4054 28.574 24.4054 27.8853V24.9218C24.4054 24.2171 24.3592 23.7253 24.2688 23.4261C24.0891 22.868 23.7274 22.5856 23.1913 22.5856ZM23.0563 27.9908C23.0563 28.6636 22.859 28.995 22.4695 28.995C22.2481 28.995 22.0226 28.889 21.7971 28.6632V24.1275C22.0226 23.9045 22.2481 23.7989 22.4695 23.7989C22.8586 23.7989 23.0563 24.1435 23.0563 24.8146V27.9908Z" fill="#7A8086"/>
                        <path class="hoverIcon" d="M17.9336 28.3638C17.6345 28.7866 17.3517 28.9948 17.0808 28.9948C16.9008 28.9948 16.7981 28.8889 16.7653 28.6793C16.753 28.636 16.753 28.4715 16.753 28.1556V22.6763H15.4043V28.5603C15.4043 29.0861 15.4497 29.4413 15.5234 29.6672C15.6588 30.0445 15.9584 30.2212 16.3921 30.2212C16.8885 30.2212 17.3975 29.9217 17.9336 29.3071V30.1189H19.2832V22.6763H17.9336V28.3638Z" fill="#7A8086"/>
                        <path class="hoverIcon" d="M19.0911 15.8014C19.5301 15.8014 19.7409 15.4532 19.7409 14.7575V11.5939C19.7409 10.8979 19.5301 10.5513 19.0911 10.5513C18.6516 10.5513 18.4404 10.8983 18.4404 11.5939V14.7575C18.4404 15.4536 18.6516 15.8014 19.0911 15.8014Z" fill="#7A8086"/>
                        <path class="hoverIcon" d="M20 0.0605469C8.95427 0.0605469 0 9.01482 0 20.0605C0 31.1063 8.95427 40.0605 20 40.0605C31.0457 40.0605 40 31.1063 40 20.0605C40 9.01482 31.0457 0.0605469 20 0.0605469ZM22.2245 9.41502H23.5834V14.9524C23.5834 15.272 23.5834 15.4377 23.5998 15.4823C23.6297 15.6935 23.7369 15.8015 23.9194 15.8015C24.1919 15.8015 24.478 15.5904 24.7804 15.1636V9.41502H26.143V16.9358H24.7804V16.1158C24.2377 16.7378 23.7205 17.0394 23.2233 17.0394C22.7847 17.0394 22.4818 16.8614 22.3452 16.4808C22.2699 16.2529 22.2245 15.8932 22.2245 15.3624V9.41502ZM17.0774 11.8674C17.0774 11.0633 17.2141 10.4757 17.5038 10.0955C17.8807 9.58116 18.4115 9.32418 19.0907 9.32418C19.7733 9.32418 20.3036 9.58116 20.6805 10.0955C20.9661 10.4753 21.1028 11.0633 21.1028 11.8674V14.5011C21.1028 15.3006 20.9661 15.8936 20.6805 16.2697C20.3036 16.7828 19.7733 17.0394 19.0907 17.0394C18.4115 17.0394 17.8807 16.7828 17.5038 16.2697C17.2141 15.8936 17.0774 15.3002 17.0774 14.5011V11.8674ZM13.433 6.84356L14.506 10.8067L15.5368 6.84356H17.0652L15.2471 12.8487V16.9363H13.7363V12.8487C13.5992 12.1244 13.2968 11.0633 12.8119 9.65564C12.4935 8.71896 12.1616 7.77942 11.8433 6.84356H13.433ZM30.7666 30.776C30.4933 31.9623 29.5231 32.838 28.3548 32.9686C25.5873 33.2775 22.7879 33.2792 19.9988 33.2775C17.2108 33.2792 14.4098 33.2775 11.6432 32.9686C10.4749 32.838 9.50425 31.9627 9.23171 30.776C8.84256 29.0864 8.84256 27.2413 8.84256 25.5014C8.84256 23.7614 8.84747 21.9167 9.23621 20.2267C9.50916 19.04 10.479 18.1643 11.6473 18.0342C14.4143 17.7252 17.2149 17.7236 20.0037 17.7252C22.7916 17.7236 25.5922 17.7252 28.3593 18.0342C29.5276 18.1647 30.4982 19.04 30.772 20.2267C31.1599 21.9167 31.1574 23.7614 31.1574 25.5014C31.1574 27.2413 31.1558 29.0864 30.7666 30.776Z" fill="#7A8086"/>
                        <path class="hoverIcon" d="M27.4868 22.5854C26.7969 22.5854 26.2612 22.8387 25.8717 23.3482C25.5856 23.7247 25.4551 24.3066 25.4551 25.1017V27.7087C25.4551 28.4997 25.6012 29.0857 25.8884 29.4585C26.2776 29.9667 26.8149 30.2208 27.5203 30.2208C28.2246 30.2208 28.7774 29.9545 29.1506 29.4139C29.3143 29.1749 29.4207 28.9044 29.4657 28.6057C29.4784 28.4707 29.4944 28.1715 29.4944 27.7365V27.5405H28.119C28.119 28.0807 28.1014 28.3806 28.0896 28.4539C28.0126 28.8144 27.8187 28.9945 27.4868 28.9945C27.0236 28.9945 26.7969 28.6507 26.7969 27.9624V26.6423H29.4944V25.1008C29.4944 24.3058 29.3597 23.7239 29.077 23.3474C28.7001 22.8392 28.1636 22.5854 27.4868 22.5854ZM28.1464 25.5203H26.7977V24.8316C26.7977 24.1433 27.024 23.7992 27.4745 23.7992C27.9206 23.7992 28.1464 24.1437 28.1464 24.8316V25.5203Z" fill="#7A8086"/>
                    </svg>

                </a><a target="_blank"
                       href="https://www.google.com/maps/place/ELLIPS+GA/@40.213124,44.521059,15z/data=!4m5!3m4!1s0x0:0xb57ecc12190ddc0f!8m2!3d40.213124!4d44.521059">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="hoverIcon" d="M20.7592 13.8382C20.7592 11.0658 19.1064 6.75439 15.9199 6.75439C14.9182 6.75439 13.8448 7.25445 13.2286 8.02498C12.5746 8.8348 12.3848 9.87092 12.3848 10.8751C12.3848 13.4531 13.8816 17.7256 17.1872 17.7256C18.1468 17.7256 19.1809 17.2661 19.7988 16.6494C20.6823 15.761 20.7592 14.5318 20.7592 13.8382Z" fill="#7A8086"/>
                        <path class="hoverIcon" d="M18.6832 23.9638C18.3771 23.9253 18.1848 23.9253 17.801 23.9253C17.4544 23.9253 15.3793 24.001 13.7666 24.5436C12.922 24.8497 10.4639 25.7745 10.4639 28.5076C10.4639 31.2419 13.1147 33.2073 17.2248 33.2073C20.9138 33.2073 22.8735 31.4322 22.8735 29.0486C22.8731 27.0791 21.6054 26.0433 18.6832 23.9638Z" fill="#7A8086"/>
                        <path class="hoverIcon" d="M20 0.0605469C8.95427 0.0605469 0 9.01482 0 20.0605C0 31.1063 8.95427 40.0605 20 40.0605C31.0457 40.0605 40 31.1063 40 20.0605C40 9.01482 31.0457 0.0605469 20 0.0605469ZM15.3408 34.8206C9.769 34.8206 7.08133 32.1657 7.08133 29.3148C7.08133 27.9296 7.77166 25.9675 10.0387 24.6191C12.4194 23.1558 15.6485 22.9647 17.3782 22.8456C16.8385 22.1532 16.2259 21.422 16.2259 20.2287C16.2259 19.5752 16.4182 19.1898 16.6081 18.7274C16.185 18.7666 15.7643 18.8043 15.3796 18.8043C11.3088 18.8043 9.00379 15.7606 9.00379 12.7582C9.00379 10.9897 9.80951 9.02464 11.4611 7.60019C13.652 5.79067 16.6457 5.29963 18.722 5.29963H26.2916L23.7934 6.86934H21.4134C22.2965 7.60019 24.1379 9.14003 24.1379 12.0675C24.1379 14.9144 22.5264 16.2656 20.9138 17.5345C20.4133 18.0342 19.8367 18.5731 19.8367 19.4214C19.8367 20.2664 20.4137 20.728 20.8352 21.0774L22.2195 22.1528C23.9104 23.5765 25.4474 24.8859 25.4465 27.5449C25.4461 31.1652 21.9478 34.8206 15.3408 34.8206ZM31.9202 19.59V23.4627H30.019V19.59H26.1753V17.6679H30.019V13.8189H31.9202V17.6679H35.7823V19.59H31.9202Z" fill="#7A8086"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>
@yield('script')
</body>
</html>
