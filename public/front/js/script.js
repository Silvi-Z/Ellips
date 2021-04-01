$(document).ready(function () {
    let newValue;
    let didScroll;
    let delta = 5;
    let lastScrollTop = 0;
    const header = $('header')[0].classList;
    let navbarHeight = $('header').outerHeight();
    const menu = $('.subMenuWrapper')[0].classList;
    const section = $('header section')[0].classList;
    const toggleArrow = $('.toggleArrow')[0].classList;
    const select = document.querySelectorAll('.selectLang');
    const licensesTitle = document.querySelector('.licensesTitle');
    let lastValue = licensesTitle && licensesTitle.offsetLeft;
    const closeModal = document.querySelector('.closeModal') && document.querySelector('.closeModal');
    let marginLeft = licensesTitle && document.querySelector('.licensesSlideWrapper:first-of-type').offsetLeft;

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

    $('.licenses').slick({
        slidesToShow: $('.licenses .licensesSlideWrapper').length < 5 ? $('.licenses .licensesSlideWrapper').length : 5,
        // autoplay: true,
        infinite: false,
        // pauseOnFocus: true,
        arrow:true,
        // pauseOnHover: false,
        // pauseOnDotsHover: false,
        arrows: true,
        swipe:true,
        // autoplaySpeed: 0,
        // speed: 3000,
        // cssEase: 'linear',
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: $('.licenses .licensesSlideWrapper').length < 3 ? $('.licenses .licensesSlideWrapper').length : 3,
            }
        }, {
            breakpoint: 850,
            settings: {
                slidesToShow: $('.licenses .licensesSlideWrapper').length < 2 ? $('.licenses .licensesSlideWrapper').length : 2,
            }
        },
            {
                breakpoint: 450,
                settings: {
                    slidesToShow: 1,
                }
            },

        ]
    });

    $('.services').slick({
        slidesToShow: $('.services .serviceWrapper').length < 4 ? $('.services .serviceWrapper').length : 4,
        slidesToScroll: 1,
        pauseOnDotsHover:false,
        swipeToSlide: false,
        arrows: true,
        pauseOnFocus:true,
        autoplay:true,
        autoplaySpeed:3000,
        infinite: true,
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

    $('.singleProduct').slick({
        slidesToShow: 1,
        infinite: true,
        slidesToScroll: 1,
        arrows: true,
        dots: $('.singleProduct .singleProductSlide').length > 1 ? true : false,
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

    $('.imgVideo').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        cssEase: 'linear',
        fade: true,
        dots: true,
    });

    $('.sliderBlog').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        cssEase: 'linear',
        dots: $('.sliderBlog .modalSpan').length > 1 ? true : false,
    });

    $('.sliderPortfolio').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        cssEase: 'linear',
        dots: $('.sliderPortfolio .modalSpan').length > 1 ? true : false,
    });

    $('.imgVideo').length > 0 && slideCount($('.imgVideo'));

    $('.imgVideo').on("afterChange", () => slideCount($('.imgVideo')));

    $('.sliderPortfolio').length > 0 && slideCount($('.sliderPortfolio'));

    $('.sliderBlog').on("afterChange", () => slideCount($('.sliderBlog')));

    $('.singleProduct').on("afterChange", () => slideCount($('.singleProduct')));

    $('.sliderPortfolio').on("afterChange", () => slideCount($('.sliderPortfolio')));

    $('.singleProduct .singleProductSlide').length > 1 && slideCount($('.singleProduct'));

    $('.sliderBlog').length > 0 && $('.sliderBlog .slick-slide').length > 1 && slideCount($('.sliderBlog'));

    document.querySelectorAll('.moreServicesSlide .moreService').length > 3 && document.querySelectorAll('.moreServicesSlide')[0].classList.add('grab');

    activeDropdown(document.querySelectorAll('.brand-toggle ~ .dropdown-menu .dropdown-item'), $('.brand-toggle'))

    activeDropdown(document.querySelectorAll('.system-toggle ~ .dropdown-menu .dropdown-item'), $('.system-toggle'))

    activeDropdown(document.querySelectorAll('.system-toggle ~ .dropdown-menu .dropdown-item'), $('.system-toggle'))

    function slideCount(slider) {
        let currentSlide = slider.slick('slickCurrentSlide') + 1;
        let slideCount = slider.slick("getSlick").slideCount;
        let p = $(".slick-dots")[0]
        p && (p.innerHTML = currentSlide + '/' + slideCount)
    }

    if ($('.selectButtons')) {
        $('.selectButtons a').each(function () {
            if ($(this)[0].href === window.location.href) {
                $(this).parent().addClass('activeButton')
                $(this).parent().siblings().removeClass('activeButton')
            }
        })
    }

    function addCursor(slide, itemSlides, count){
        itemSlides.length > count && slide.classList.add('grab');
    }
    addCursor(document.querySelectorAll('.moreServicesSlide')[0] , document.querySelectorAll('.moreServicesSlide .moreService'), 3)


    function activeDropdown(active, title) {
        active.forEach((e) => {
            if (e.href === location.href) {
                title[0].innerHTML = e.innerHTML
            }
        })
    }

    function centeredSliders(slides, slider, count) {
        (slides.length < count) && slider.css('justify-content', 'center')
        !(slider[0] == $('.company')[0]) && addCursor(slider[0], slides, count)
    }

    centeredSliders($('.services .serviceWrapper'), $('.services'), 4)

    centeredSliders($('.company .companySlideWrapper'), $('.company'), 5)

    centeredSliders($('.licenses .licensesSlideWrapper'), $('.licenses'), 5)

    // if ($('.systemsSlide .product').length > 3 || $('.systemsSlide .product').length > 1 && window.innerWidth < 768) {
        $('.systemsSlide').slick({
            slidesToShow: $('.systemsSlide .product').length < 6 ? $('.systemsSlide .product').length : 6,
            infinite: true,
            arrows: true,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                }
            },{
                breakpoint: 500,
                settings: {
                    slidesToShow: 2,
                }
            },
            ]
        })
    $('.productSlide').slick({
            slidesToShow: $('.productSlide .product').length < 6 ? $('.productSlide .product').length : 6,
            infinite: true,
            arrows: true,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                }
            },{
                breakpoint: 500,
                settings: {
                    slidesToShow: 2,
                }
            },
            ]
        })
    // }

    document.querySelectorAll('.modalSpan').forEach( (e) =>{
            if (window.innerWidth > 1000 ){
                e.addEventListener('click', function (element) {
                    document.querySelector('#portfolioModalSlide').classList.add('show')
                    document.querySelector('.modal-backdrop') && document.querySelector('.modal-backdrop').classList.add('show')
                    document.querySelector('body').classList.add('modal-open')
                    $('.modalOpen')[0].setAttribute('src', e.firstElementChild.getAttribute('src'))
                })
            }else{
                e.removeAttribute('data-target')
            }
        })

    // window.onresize = () => licensesMargin();

    document.querySelectorAll('.searchInput').forEach(item => {
        item.addEventListener('keyup', (e) => {
            if (e.target.value.length > 0) {
                $('.searchButton')[0].classList.add('opacity')
            } else {
                $('.searchButton')[0].classList.remove('opacity')
            }
        })
    })

    function closeSubMenu(element){
        element.addEventListener('mouseleave', () => {
            toggleArrow.remove('transform');
            menu.remove('d-flex');
            header.remove('whiteBackground');
            section.remove('whiteBackground');
        })
    }
    function openSubMenu(element){
        element.addEventListener('mouseover', () => {
            toggleArrow.add('transform');
            menu.add('d-flex');
            header.add('whiteBackground');
            section.add('whiteBackground');
        })
    }
    closeSubMenu($('.selectMenu')[0])
    openSubMenu($('.selectMenu')[0])
    closeSubMenu($('.subMenuWrapper')[0])
    openSubMenu($('.subMenuWrapper')[0])

    swipeSlide($('.imagesSlide'), $('.textSlide'))
    swipeSlide($('.textSlide'), $('.imagesSlide'))

    select.forEach((item) => {
        const languageElements = item.firstElementChild.childNodes
        item.firstElementChild.addEventListener('click', (e) => {
            e.stopPropagation()
            e.currentTarget.classList.add('selectClass')
            languageElements.forEach((element, index) => {
                if (index % 2 === 1) {
                    setTimeout(() => {
                        element.classList.add('openSelect')
                    }, 70)
                }
            })
        })
        languageElements.forEach((element, index) => {
            if (index % 2 === 1) {
                element.addEventListener('click', (e) => {
                    if (item.firstElementChild.classList.contains('selectClass')) {
                        e.stopPropagation()
                        const id = e.target.getAttribute('data-id')
                        window.location.href = '/locale/' + id
                    }
                })
            }
        })

    })

    closeModal && closeModal.addEventListener('click', () =>
    document.querySelector('.modalWrapper').classList.add('d-none'))
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
    document.querySelector('body').addEventListener('click', (e) => {
        select.forEach((item) => {
            item.children[0].childNodes.forEach((e, index) => {
                if (e.nodeName === 'DIV') {
                    item.children[0].classList.remove('selectClass')
                    setTimeout(() => {
                        e.classList.remove('openSelect')
                    }, 70)
                }
            })
        })
    })
    document.querySelector('.toggleMenu').addEventListener('click', (e) => {
        e.target.classList.toggle('open');
        $('.responsiveMenu')[0].classList.toggle('d-flex')
        $('header')[0].classList.toggle('headerFix')
        $('body')[0].classList.toggle('overflow')
    })

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

    function circleAnimation() {
        if (document.querySelector('.circles')) {
            const top = document.querySelector('.circles').getBoundingClientRect().top
            const redCircle = document.querySelector('.redCircle')
            const transparentCircle = document.querySelector('.transparentCircle')
            const blueCircle = document.querySelector('.blueCircle')
            const elements = document.querySelectorAll(".experienceCount");
            if (top > 0 && top <= window.innerHeight - 50) {
                elements.forEach((e) => {
                    const finalCount = Number(e.getAttribute('data-number'));
                    let counter = 0;
                    const timer = setInterval(() => {
                        if (counter === finalCount) {
                            e.innerHTML = counter + '+';
                            clearInterval(timer)
                        } else if (e.innerHTML !== finalCount + '+') {
                            counter++;
                            e.innerHTML = counter + '+';
                        }
                    }, 0.1)
                })
                redCircle.classList.add('redCirclePosition')
                transparentCircle.classList.add('transparentCirclePosition')
                blueCircle.classList.add('blueCirclePosition')
            } else if (window.scrollY >= document.querySelector('.circles').offsetTop) {
                $('.redCircle')[0].classList.add('redCirclePosition')
                $('.transparentCircle')[0].classList.add('transparentCirclePosition')
                $('.blueCircle')[0].classList.add('blueCirclePosition')
                elements.forEach((e) => {
                    const finalCount = Number(e.getAttribute('data-number'));
                    e.innerHTML = finalCount + '+'
                })

            }
        }
    }
    circleAnimation()

    // function licensesMargin() {
    //     if (licensesTitle && window.innerWidth > 1024) {
    //         newValue = licensesTitle.offsetLeft;
    //         newValue = Math.abs((marginLeft + lastValue - lastValue + newValue));
    //         document.querySelector('.licensesSlideWrapper:first-of-type').style.marginLeft = newValue + 'px';
    //     }
    // }
    // licensesMargin()

    function swipeSlide(slide, otherSlide) {
        slide.on('swipe', function (event, slick, direction) {
            if (event.cancelable) {
                event.preventDefault();
                event.stopPropagation();
            }
            if (direction === 'left') {
                otherSlide.slick("slickNext")
            } else {
                otherSlide.slick("slickPrev")
            }
        });

    }

    window.addEventListener('resize',()=>{
        responsiveMenu()
    })
    window.addEventListener('scroll', () => {
        circleAnimation()
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

    ymaps.ready(init);

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

    document.querySelectorAll('.singleProductPage .singleProductSlide').forEach(e => {
        if (e.firstElementChild.tagName === 'IFRAME'){
            e.classList.add('black')
            e.firstElementChild.classList.add('height')
        }
    })

    function addBackground(elements){
        elements.forEach(e => {
            if (e.firstElementChild.tagName === 'IFRAME'){
                e.classList.add('black')
                e.firstElementChild.classList.add('height')
            }
        })
    }
    addBackground(document.querySelectorAll('.singleProductPage .singleProductSlide'))
    addBackground(document.querySelectorAll('.modalSpan'))

    const productImages = document.querySelectorAll('.productImage')
    const products = document.querySelectorAll('.product')

    function calcHeight(){
        productImages && productImages.forEach((e, index)=>{
            e.style.height = products[index].clientWidth - 10 + 'px';
        })
    }
    calcHeight()
    window.addEventListener('resize', ()=>{
        calcHeight()
    })
});
