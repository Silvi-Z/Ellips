<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="../../../public/front/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/front/slick-1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../../../public/front/slick-1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="../../../public/front/css/style.css">
</head>
<body>
<header class="d-flex justify-content-center w-100 align-items-center">
    <section>
        <div class="row d-flex flex-row justify-content-between w-100 align-items-center">
            <a class="col navbar-brand d-flex align-items-center text-decoration-none text-dark" href="/index.php">
                <img src="../../../public/front/icons/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                <span>ellips</span>
            </a>
            <div class="inline-menu d-flex col-9 justify-content-between">
                <nav class="d-flex align-items-center">
                    <a href="../company.blade.php">Ընկերություն</a>
                    <a href="../product/products.blade.php">Համակարգեր / ապրանքներ
                        <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.60396 5.11608L0.164193 1.6762C-0.0547314 1.45738 -0.0547314 1.10261 0.164193 0.883896C0.382921 0.665166 0.737679 0.665166 0.95639 0.883896L4.00006 3.92766L7.04362 0.883984C7.26244 0.665255 7.61716 0.665255 7.83589 0.883984C8.0547 1.10271 8.0547 1.45747 7.83589 1.67629L4.39607 5.11617C4.28665 5.22553 4.1434 5.28016 4.00008 5.28016C3.85668 5.28016 3.71332 5.22543 3.60396 5.11608Z"
                                fill="black"/>
                        </svg>
                    </a>
                    <a href="../portfolio.blade.php">Պորտֆոլիո</a>
                    <a href="../blog.blade.php">Բլոգ</a>
                </nav>
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
            <div class="toggleMenu d-none col-1 justify-content-center"></div>
        </div>
    </section>
</header>

@yield('content')

<footer>
    <div class="footerLogo">
        <div>
            <img src="../../../public/front/icons/logo.svg" alt="">
            <span>ellips</span>
        </div>
    </div>
    <div class="contact">
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
    <div class="follow">
        <h4>Հետևեք Մեզ</h4>
        <div>
            <img src="../../../public/front/icons/fb.svg" alt="">
            <img src="../../../public/front/icons/youtube.svg" alt="">
            <img src="../../../public/front/icons/google.svg" alt="">
        </div>
    </div>
</footer>
<script src="{{ asset('jquery-3.5.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-1.11.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
<script src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js') }}"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js') }}"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('../../../public/front/slick-1.8.1/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('../../../public/front/slick-1.8.1/slick/slick.min.js') }}"></script>
<script src="{{ asset('../../../public/front/js/script.js') }}"></script>
<script src="{{ asset('../../../public/front/js/ddslick.js') }}"></script>
</body>
</html>
