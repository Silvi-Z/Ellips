<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('front/bootstrapCSS/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/slick-1.8.1/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('front/slick-1.8.1/slick/slick-theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=1973b4f0-00a7-49c0-9e22-9baaee610410&lang=ru_RU" type="text/javascript">
    </script>
</head>
<body>
<header class="d-flex justify-content-center w-100 align-items-center">
    <section>
        <div class="row d-flex flex-row justify-content-between w-100 align-items-center">
            <a class="col navbar-brand d-flex align-items-center text-decoration-none text-dark logo"
               href="{{route('mainpage')}}">
                <img src="{{asset('front/icons/logo.svg')}}" width="30" height="30" class="d-inline-block align-top"
                     alt="">
                <span>ellips</span>
            </a>
            <div class="inline-menu d-flex col-xl-9 col-lg-10 justify-content-between">
                <nav class="d-flex align-items-center">
                    <a href="{{route('company')}}">Ընկերություն</a>
                    <a class="selectMenu">Համակարգեր / ապրանքներ
                        <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.60396 5.11608L0.164193 1.6762C-0.0547314 1.45738 -0.0547314 1.10261 0.164193 0.883896C0.382921 0.665166 0.737679 0.665166 0.95639 0.883896L4.00006 3.92766L7.04362 0.883984C7.26244 0.665255 7.61716 0.665255 7.83589 0.883984C8.0547 1.10271 8.0547 1.45747 7.83589 1.67629L4.39607 5.11617C4.28665 5.22553 4.1434 5.28016 4.00008 5.28016C3.85668 5.28016 3.71332 5.22543 3.60396 5.11608Z"
                                fill="black"/>
                        </svg>
                    </a>
                    <a href="{{route('portfolio')}}">Պորտֆոլիո</a>
                    <a href="{{route('blogs')}}">Բլոգ</a>
                </nav>
                <div class="d-flex align-items-center">
                    <button class="btn btn-dark"><a href={{route("contact")}}>Կապ մեզ հետ</a></button>
                    <div class="selectLang">
                        <div>
                            <div class="first"></div>
                            <div></div>
                            <div></div>
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
                    <a href="{{route('products')}}" class="title">
                        <h5>Ապրանքներ</h5>
                        <div class="arrow"></div>
                    </a>
                    <div class="row">
                        <ul class="col-4">
                            <li>Կոդային փականներ</li>
                            <li>Դարպասներ</li>
                            <li>Դռներ և պատուհաններ</li>
                            <li>Մետաղաորսիչներ</li>
                            <li>Ծածկեր,տաղավարներ,
                                բազրիքներ,մետաղյա կոնստրուկցիաներ
                            </li>
                            <li>Արգելափակոցներ
                                (шлагбаум)
                            </li>
                            <li>Ազդարարիչներ</li>
                            <li>Ազդարարիչներ</li>
                        </ul>
                        <ul class="col-4">
                            <li>Ճաղավանդակներ</li>
                            <li>Մարկիզաներ</li>
                            <li>Լուսացույցեր</li>
                            <li>Տեսախցիկներ</li>
                            <li>Ահազանգման համակարգեր</li>
                            <li>Չհրկիզվող պահարաններ</li>
                            <li>Շչակներ</li>
                            <li>Տվիչներ</li>
                        </ul>
                        <ul class="col-4">
                            <li>Այլ (մագնիսական կոնտակտ, քարտեր, բրիկոլներ, մալուխներ, DVRներ,պատռուլ, դրամափոխանակման
                                հանգույցներ)
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <a href="{{route('systems')}}" class="title">
                        <h5>Համակարգեր</h5>
                        <div class="arrow"></div>
                    </a>
                    <div class="row">
                        <ul class="col-4">
                            <li>Հրդեհամարման համակարգ</li>
                            <li>Անվտանգության համակարգ</li>
                            <li>Ցածրավոլտ համակարգեր,
                                տեղեկատվական ցանցեր,
                                հեռախոս,TV
                            </li>
                            <li>Տեսահսկման համակարգեր</li>
                            <li>Հերթերի կառավարման համակարգ</li>
                            <li>Սելեկտիվ անցումային համակարգ և աշխ․ժ-ի հաշվարկ</li>
                        </ul>
                        <ul class="col-4">
                            <li>Սելեկտիվ անցումային համակարգ և աշխ․ժ-ի հաշվարկ</li>
                            <li>Սելեկտիվ անցումային համակարգ և աշխ․ժ-ի հաշվարկ</li>
                            <li>Ջերմաստիճանի/խոնավություն վերահսկման համակարգ</li>
                            <li>Ճաշարանի վճարային համակարգ էլեկտրոնային քարտերով</li>
                            <li>Կշեռքներ և հաշվարկային ծրագրեր</li>
                        </ul>
                        <ul class="col-4">
                            <li>Վերելակների քարտային համակարգեր</li>
                            <li>Քնությունների ավտոմատացված համակարգ</li>
                            <li>Քնությունների ավտոմատացված համակարգ</li>
                            <li>Պարագծային անվտանգության համակարգ</li>
                            <li>Հյուրանոցների Էներգախնայողության համակարգ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="responsiveMenu">
            <ul>
                <li><a href="{{route('company')}}">Ընկերություն</a></li>
                <li><a href="{{route('systems')}}">Համակարգեր</a></li>
                <li><a href="{{route('products')}}">Ապրանքներ</a></li>
                <li><a href="{{route('portfolio')}}">Պորտֆոլիո</a></li>
                <li><a href="{{route('blogs')}}">Բլոգ</a></li>
            </ul>
            <div class="d-flex align-items-center">
                <button class="btn btn-dark">Կապ մեզ հետ</button>
                <div class="selectLang">
                    <div>
                        <div class="first"></div>
                        <div></div>
                        <div></div>
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
                <img src="{{asset('front/icons/logo.svg')}}" alt="">
                <span>ellips</span>
            </div>
        </div>
        <div class="col-lg-7 col-md col-12 contact <!--d-flex justify-content-center-->">
            <div>
                <h4>Կապ</h4>
                <div>
                    <ul>
                        <li>Երևան Նիկողայոս Տիգրանյան 27</li>
                        <li>(010) 23 01 07, (010) 23 01 08</li>
                        <li>office@sec.am</li>
                    </ul>
                    <ul>
                        <li>Երևան Նիկողայոս Տիգրանյան 27</li>
                        <li>(010) 23 01 07, (010) 23 01 08</li>
                        <li>office@sec.am</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md col follow">
            <h4>Հետևեք Մեզ</h4>
            <div>
                <img src="{{asset('front/icons/fb.svg')}}" alt="">
                <img src="{{asset('front/icons/youtube.svg')}}" alt="">
                <img src="{{asset('front/icons/google.svg')}}" alt="">
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('jquery-3.5.1.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-1.11.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/bootstrapJS/bootstrap.js') }}"></script>
<script src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js') }}"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js') }}"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('/front/slick-1.8.1/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('./front/slick-1.8.1/slick/slick.min.js') }}"></script>
<script src="{{ asset('/front/js/script.js') }}"></script>
<script src="{{ asset('/front/js/ddslick.js') }}"></script>
</body>
</html>
