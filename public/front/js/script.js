$(document).ready(function () {

    $('.heroSlider').each(function (num, elem) {
        elem = $(elem);
        elem.slick({
            speed: 1000,
            autoplay: true,
            infinite: true,
            accessibility: false,
            swipe: false,
            pauseOnFocus: false,
            pauseOnHover: false,
            initialSlide: num === 2 ? 1 : 0,
            pauseOnDotsHover: false,
            arrows: false,
            cssEase: 'ease-in-out',
            responsive: [
                {
                    breakpoint: 940,
                    settings: {
                        swipe: true,
                    }
                }
            ]
        });
    });

    $('.singleProduct').slick({
        slidesToShow: 1,
        infinite: true,
        slidesToScroll: 1,
        arrows: true,
        dots: $('.singleProduct .slick-slide').length > 1 ? true : false,
    });

    $('.imgVideo').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        cssEase: 'linear',
        fade: true,
        dots: true,
    });

    $('.sliderPortfolio').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        cssEase: 'linear',
        dots: $('.sliderPortfolio .slick-slide').length > 1 ? true : false,
    });

    $('.sliderBlog').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        cssEase: 'linear',
        dots: $('.sliderBlog .modalSpan').length > 1 ? true : false,
    });

    function slideCount(slider) {
        let currentSlide = slider.slick('slickCurrentSlide') + 1;
        let slideCount = slider.slick("getSlick").slideCount;
        let p = $(".sliderBlog .slick-dots")
        p.html(currentSlide + '/' + slideCount);
    }

    if ($('.selectButtons').length) {
        const selectButton = $('.selectButtons')[0].children;
        Array.from(selectButton).forEach((button, index) => {
            locationCheck(button, selectButton[index].getAttribute('data-select'), index)
            button.addEventListener('click', (e) => {
                locationCheck(e.target, e.target.getAttribute('data-select'), index)
            })
        })
    }

    function locationCheck(button, type, i) {
        // console.log(button);
        // let it = [type.includes(' ') ? type.split(' ')[i] : type]
        // console.log(it);
        // if (it.some =()=>{ window.location.pathname.split('/')[1] }) {
        //     button.classList.add('activeButton')
        //     console.dir(button);
        //     console.log(button.parentNode.childNodes);
        //     // button.sibling.classList.remove('activeButton')
        // }
    }

    $('.imgVideo').length > 0 && slideCount($('.imgVideo'));

    $('.sliderBlog').length > 0 && $('.sliderBlog .slick-slide').length > 1 && slideCount($('.sliderBlog'));

    $('.singleProduct').length > 0 && slideCount($('.singleProduct'));

    $('.imgVideo').on("afterChange", () => slideCount($('.imgVideo')));

    $('.singleProduct').on("afterChange", () => slideCount($('.singleProduct')));

    $('.sliderBlog').on("afterChange", () => slideCount($('.sliderBlog')));

    activeDropdown($('.brand-toggle ~ .dropdown-menu .dropdown-item.activeDropdown'), $('.brand-toggle'))
    activeDropdown($('.system-toggle ~ .dropdown-menu .dropdown-item.activeDropdown'), $('.system-toggle'))
    activeDropdown($('.system-toggle ~ .dropdown-menu .dropdown-item.activeDropdown'), $('.system-toggle'))

    function activeDropdown(active, title) {
        if (active.length > 0) {
            title.html(active.html())
        }
    }

    $('.services').slick({
        slidesToShow: $('.services .serviceWrapper').length < 4 ? $('.services .serviceWrapper').length : 4,
        variableWidth: true,
        slidesToScroll: 1,
        swipeToSlide: false,
        arrows: false,
        infinite: false,
        responsive: [{
            breakpoint: 1700,
            settings: {
                slidesToShow: $('.services .serviceWrapper').length < 3 ? $('.services .serviceWrapper').length : 3,
            }
        },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: $('.services .serviceWrapper').length < 2 ? $('.services .serviceWrapper').length : 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            }],
    });

    $('.moreServicesSlide').slick({
        slidesToShow: $('.moreServicesSlide .moreService').length < 3 ? $('.moreServicesSlide .moreService').length : 3,
        arrows: false,
        infinite: false,
        responsive: [{
            breakpoint: 850,
            settings: {
                arrows: true,
                slidesToShow: 1,
            }
        },
        ]
    });

    $('.company').slick({
        slidesToShow: $('.company .companySlideWrapper').length < 5 ? $('.company .companySlideWrapper').length : 5,
        autoplay: true,
        infinite: true,
        swipe: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        arrows: false,
        autoplaySpeed: 0,
        speed: 3000,
        cssEase: 'linear',
        responsive: [{
            breakpoint: 1500,
            settings: {
                slidesToShow: $('.company .companySlideWrapper').length < 4 ? $('.company .companySlideWrapper').length : 4
            }
        }, {
            breakpoint: 1200,
            settings: {
                slidesToShow: $('.company .companySlideWrapper').length < 3 ? $('.company .companySlideWrapper').length : 3
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: $('.company .companySlideWrapper').length < 4 ? $('.company .companySlideWrapper').length : 4
            }
        }, {
            breakpoint: 550,
            settings: {
                slidesToShow: $('.company .companySlideWrapper').length < 3 ? $('.company .companySlideWrapper').length : 3
            }
        }, {
            breakpoint: 400,
            settings: {
                slidesToShow: $('.company .companySlideWrapper').length < 2 ? $('.company .companySlideWrapper').length : 2
            }
        }]
    });

    function centeredSliders(slides, slider, count) {
        (slides.length < count) && slider.css('justify-content', 'center')
    }

    centeredSliders($('.company .companySlideWrapper'), $('.company'), 5)
    centeredSliders($('.licenses .licensesSlideWrapper'), $('.licenses'), 5)
    centeredSliders($('.services .serviceWrapper'), $('.services'), 4)

    if ($('.systemsSlide .product').length > 3 || $('.systemsSlide .product').length > 1 && window.innerWidth < 768) {
        $('.systemsSlide').slick({
            slidesToShow: 3,
            infinite: true,
            arrows: true,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 850,
                settings: {
                    slidesToShow: 1,
                }
            },
            ]
        })
    }

    $('.licenses').slick({
        slidesToShow: $('.licenses .licensesSlideWrapper').length < 5 ? $('.licenses .licensesSlideWrapper').length : 5,
        slidesToScroll: 1,
        infinite: false,
        swipeToSlide: true,
        arrows: false,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: $('.licenses .licensesSlideWrapper').length < 3 ? $('.licenses .licensesSlideWrapper').length : 3,
            }
        }, {
            breakpoint: 850,
            settings: {
                slidesToShow: 1,
            }
        },
        ]
    })


    document.querySelectorAll('.modalSpan').forEach(item => {
        item.addEventListener('click', () => {
            $('.modalOpen')[0].src = item.children[0].src
        })
    })
    // $('.blogSlider span').addEventListener('click', ()=>{
    //     $('.modalOpen')[0].src = item.children[0].src
    // })
    // function openModal(openElement, modal) {
    //     openElement.forEach(item => {
    //         item.addEventListener('click', () => {
    //             $('.modalOpen')[0].src = item.children[0].src
    //         })
    //     })
    // }
    window.onresize=()=> licensesMargin();

    let lastValue = $('.licensesTitle')[0] && $('.licensesTitle')[0].offsetLeft;
    let newValue;
    let marginLeft = $('.licensesSlideWrapper:first-of-type').css('marginLeft')

    function licensesMargin(){
        if ($('.licensesTitle')[0] && window.innerWidth > 1024){
            newValue = $('.licensesTitle')[0].offsetLeft;
            let marginLeftNumber = Number(marginLeft.substring(0, marginLeft.length - 2))
            newValue = Math.abs((marginLeftNumber + lastValue - lastValue + newValue))
            $('.licensesSlideWrapper:first-of-type').css('marginLeft', newValue + 'px')
        }
    }
    licensesMargin()

    $('.bigImgVideo').slick({
        // slidesToShow: 5,
        // slidesToScroll: 2,
        infinite: false,
        swipeToSlide: true,
        arrows: false,
    })

    document.querySelectorAll('.searchInput').forEach(item => {
        item.addEventListener('keyup', (e) => {
            if (e.target.value.length > 0) {
                $('.searchButton')[0].classList.add('opacity')
            } else {
                $('.searchButton')[0].classList.remove('opacity')
            }
        })
    })

    $('.selectMenu')[0].addEventListener('click', () => {
        const menu = $('.subMenuWrapper')[0].classList;
        const header = $('header')[0].classList;
        const section = $('header section')[0].classList;
        menu.toggle('d-flex');
        header.toggle('whiteBackground')
        section.toggle('whiteBackground')
    })

    const elements = document.querySelectorAll(".experienceCount");


    // window.onscroll=()=>{
    //     console.log(elements[0].getBoundingClientRect().top + (elements[0].clientHeight*2));
    //     console.log('clientHeight',elements[0].clientHeight);
    //     console.log(window.scrollY);
    // }
    elements.forEach((e) => {
        const finalCount = Number(e.getAttribute('data-number'));
        let counter = 0;
        const timer = setInterval(() => {
            if (counter === finalCount) {
                e.innerHTML = counter + '+';
                clearInterval(timer)
            } else {
                counter++;
                e.innerHTML = counter + '+';
            }
        }, 0.1)
    })

    const lang = [
        {
            text: "Facebook",
            value: 1,
            selected: false,
            description: "Description with Facebook",
            imageSrc: "https://i.imgur.com/XkuTj3B.png"
        },
        {
            text: "Twitter",
            value: 2,
            selected: false,
            description: "Description with Twitter",
            imageSrc: "https://i.imgur.com/8ScLNnk.png"
        },
        {
            text: "LinkedIn",
            value: 3,
            selected: true,
            description: "Description with LinkedIn",
            imageSrc: "https://i.imgur.com/aDNdibj.png"
        },
    ];

    const select = document.querySelector('.selectLang').children[0];

    select.addEventListener('click', function () {
        select.childNodes.forEach((e, index) => {
            if (e.nodeName === 'DIV') {
                select.classList.toggle('selectClass')
                setTimeout(() => {
                    e.classList.toggle('openSelect')
                }, 70)
                e.addEventListener('click', () => {
                    // $(e).siblings().removeClass('first').addClass('last');
                    // $(e).addClass('first').removeClass('last')
                })
            }
        })
    })

    window.addEventListener('scroll', () => {
        if ($('.singleProduct').length > 0 && window.innerWidth > 1200) {
            if ($('.singleProduct')[0].getBoundingClientRect().top < 100 && $('.singleInfo')[0].scrollHeight - 80 > $('.singleProduct')[0].clientWidth) {
                $('.singleProduct')[0].classList.add('fixed');
                if ($('.singleInfo')[0].clientHeight - Math.abs($('.singleInfo')[0].getBoundingClientRect().top) < $('.singleProduct')[0].scrollHeight) {
                    $('.singleProduct')[0].classList.remove('fixed');
                    $('.singleProduct')[0].classList.add('abs');
                } else if ($('.singleInfo')[0].getBoundingClientRect().top < 0) {
                    $('.singleProduct')[0].classList.add('fixed');
                    $('.singleProduct')[0].classList.remove('abs');
                } else {
                    $('.singleProduct')[0].classList.remove('fixed');
                    $('.singleProduct')[0].classList.remove('abs');
                }
            }
        } else if ($('.singleProduct').length > 0 && window.innerWidth < 1200) {
            $('.singleProduct')[0].classList.remove('fixed');
            $('.singleProduct')[0].classList.remove('abs');
        }
    })

    function responsiveMenu() {
        if (window.innerWidth <= 1090) {
            $('.subMenuWrapper')[0].classList.remove('d-flex')
            $('header')[0].classList.remove('whiteBackground')
            $('.inline-menu')[0].classList.add('d-none')
            $('.toggleMenu')[0].classList.remove('d-none')
            $('.toggleMenu')[0].classList.add('d-flex')
        } else {
            $('header')[0].classList.remove('headerFix')
            $('body')[0].classList.remove('overflow')
            $('.responsiveMenu')[0].classList.remove('d-flex')
            $('.inline-menu')[0].classList.remove('d-none')
            $('.toggleMenu')[0].classList.add('d-none')
            $('.toggleMenu')[0].classList.remove('d-flex')
        }
    }

    responsiveMenu()

    window.addEventListener('resize', responsiveMenu)

    document.querySelector('.toggleMenu').addEventListener('click', (e) => {
            e.target.classList.toggle('open');
            $('.responsiveMenu')[0].classList.toggle('d-flex')
            $('header')[0].classList.toggle('headerFix')
            $('body')[0].classList.toggle('overflow')
        }
    )

    window.addEventListener('scroll', circleAnimation)

    function circleAnimation() {
        if (document.querySelector('.circles')) {
            console.log('sdfsdfsdf');
            const top = document.querySelector('.circles').getBoundingClientRect().top
            const redCircle = document.querySelector('.redCircle')
            const transparentCircle = document.querySelector('.transparentCircle')
            const blueCircle = document.querySelector('.blueCircle')

            if (top > 0 && top <= window.innerHeight - 200) {
                redCircle.classList.add('redCirclePosition')
                transparentCircle.classList.add('transparentCirclePosition')
                blueCircle.classList.add('blueCirclePosition')
            } else if (window.scrollY >= document.querySelector('.circles').offsetTop - 1000) {
                $('.redCircle')[0].classList.add('redCirclePosition')
                $('.transparentCircle')[0].classList.add('transparentCirclePosition')
                $('.blueCircle')[0].classList.add('blueCirclePosition')
            }
        }
    }

    circleAnimation()

    ymaps.ready(init);

    function init() {
        if ($('#map').length > 0) {
            let coords = [40.213236, 44.520613]
            let myMap = new ymaps.Map("map", {
                center: coords,
                zoom: 18,
                controls: ['zoomControl'],
            });
            myMap.behaviors.disable('scrollZoom');
            let placemark = new ymaps.Placemark((coords), {}, {
                iconContentOffset: [150, 150],
                iconImageSize: [150, 150],
                iconColor: '#FE0C11',
            });
            myMap.geoObjects.add(placemark);

            document.querySelectorAll('.showMap').forEach(item => {
                item.addEventListener('click', e => {
                    ymaps.geocode(e.target.nextElementSibling.innerHTML).then(function (res) {
                        let coordinates = res.geoObjects.get(0).geometry.getCoordinates();
                        coords = coordinates;
                        placemark = new ymaps.Placemark(coordinates);
                        myMap.geoObjects.add(placemark);

                        myMap.setCenter(coords, 18, {
                            center: coords,
                            checkZoomRange: true,
                            duration: 0,
                        })
                        window.scrollTo(0, document.body.scrollHeight);
                    });

                })
            })
        }
    }

    document.querySelectorAll('.dots div').forEach(item => {
        item.addEventListener('click', () => {
            if (item.classList.contains('next')) {
                $('.imagesSmallSlide').slick("slickNext")
                $('.imagesSlide').slick("slickNext")
                $('.textSlide').slick("slickNext")
            } else if (item.classList.contains('prev')) {
                $('.imagesSmallSlide').slick("slickPrev")
                $('.imagesSlide').slick("slickPrev")
                $('.textSlide').slick("slickPrev")
            }
        })
    });
    $('.imagesSlide').on('swipe', function (event, slick, direction) {
        if (direction === 'left') {
            $('.textSlide').slick("slickNext")
        } else {
            $('.textSlide').slick("slickPrev")
        }

        // left
    });

    let didScroll;
    let lastScrollTop = 0;
    let delta = 5;
    let navbarHeight = $('header').outerHeight();

    $(window).scroll(function (event) {
        didScroll = true;
    });

    setInterval(function () {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        let st = $(this).scrollTop();
        if (Math.abs(lastScrollTop - st) <= delta)
            return;
        if (st > lastScrollTop && st > navbarHeight) {
            $('header section').removeClass('nav-down').addClass('nav-up');
        } else if (st + $(window).height() < $(document).height()) {
            $('header section').removeClass('nav-up').addClass('nav-down');
        }
        if (st === 0) {
            $('header section')[0].classList.remove('nav-up');
            $('header section')[0].classList.remove('nav-down');
        }
        lastScrollTop = st;
    }

    $(document).on('click', ".openSelect", function () {
        console.log(1000)
        window.location.href = '/locale/' + $(this).data('id')

    })
});

