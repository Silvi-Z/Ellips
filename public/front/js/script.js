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
            // letiableWidth: true,
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

    // $('.imagesSlide').slick({
    //     speed: 1000,
    //     slidesToShow: 1,
    //     autoplay: true,
    //     infinite: true,
    //     accessibility:false,
    //     swipe: false,
    //     pauseOnFocus: false,
    //     pauseOnHover: false,
    //     pauseOnDotsHover: false,
    //     arrows: false,
    //     // letiableWidth: true,
    //     cssEase: 'ease-in-out',
    //     responsive: [
    //         {
    //             breakpoint: 768,
    //             settings: {
    //                 arrows: false,
    //                 swipe: true,
    //             }
    //         }
    //     ]
    // });
    // $('.imagesSmallSlide').slick({
    //     speed: 1000,
    //     slidesToShow: 1,
    //     autoplay: true,
    //     initialSlide: 1,
    //     accessibility:false,
    //     arrows: false,
    //     swipe: false,
    //     infinite: true,
    //     pauseOnFocus: false,
    //     pauseOnHover: false,
    //     pauseOnDotsHover: false,
    //     letiableWidth: true,
    //     cssEase: 'ease-in-out',
    // });

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
        dots: $('.sliderBlog .slick-slide').length > 1 ? true : false,
    });

    function slideCount(slider) {
        let currentSlide = slider.slick('slickCurrentSlide') + 1;
        let slideCount = slider.slick("getSlick").slideCount;
        let p = $(".slick-dots")[0]
        p.innerHTML = currentSlide + '/' + slideCount;
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

    // if ($('.brand-toggle ~ .dropdown-menu .dropdown-item.activeDropdown').length > 0){
    //     $('.brand-toggle').html($('.brand-toggle ~ .dropdown-menu .dropdown-item.activeDropdown').html())
    // }
    activeDropdown($('.brand-toggle ~ .dropdown-menu .dropdown-item.activeDropdown'), $('.brand-toggle'))
    activeDropdown($('.system-toggle ~ .dropdown-menu .dropdown-item.activeDropdown'), $('.system-toggle'))
    function activeDropdown(active, title){
        if (active.length > 0){
            title.html(active.html())
        }
    }

    $('.services').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        swipeToSlide: false,
        arrows: false,
        infinite: false,
        responsive: [{
            breakpoint: 1500,
            settings: {
                slidesToShow: 3,
            }
        },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
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
        slidesToShow: 3,
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
    if ($('.company .companySlideWrapper').length < 5){
        $('.company').css('justify-content', 'center')
    }


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
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: false,
        swipeToSlide: true,
        arrows: false,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
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
    function openModal(openElement, modal){
        openElement.forEach(item => {
            item.addEventListener('click', () => {
                $('.modalOpen')[0].src = item.children[0].src
            })
        })
    }

    window.onresize=()=> licensesMargin();

    function licensesMargin(){
        if ($('.licensesTitle').length > 0){
            let lastValue = $('.licensesTitle')[0].offsetLeft;
            let newValue;
            let marginLeft = $('.licensesSlideWrapper:first-of-type').css('marginLeft')
            newValue = $('.licensesTitle')[0].offsetLeft;
            let marginLeftNumber = Number(marginLeft.substring(0, marginLeft.length - 2))
            newValue = Math.abs((marginLeftNumber + lastValue - lastValue + newValue))
            $('.licensesSlideWrapper:first-of-type').css('marginLeft', newValue + 'px')
        }
    }
    licensesMargin()




    // if ($('.pagination .page-item').length > 6){
    //     let element = document.createElement('li')
    //     let child = document.createElement('a')
    //         // <a className="page-link" href="http://elips.local/category/werw?brand_id=2&amp;system_id=1&amp;page=1">1</a>
    //     child.classList.add("page-link")
    //     element.classList.add('page-item')
    //     console.log(child);
    //     child.innerHTML = '...'
    //     element.appendChild(child)
    //     // element.classList.add('page-item')
    //     // document.querySelectorAll('.pagination .page-item:first-child')[0].nextElementSibling.appendChild(element);
    //     $('.pagination')[0].insertBefore(element, $('.pagination')[0].children[1]);
    //
    //     // $('.pagination').splice(1, 0, element)
    //     console.log(document.querySelectorAll('.pagination .page-item'))
    //     // console.log($('.pagination')[0].children[2]);
    // }

        // console.log('lastValue', lastValue);
        // console.log('first', $('.licensesSlideWrapper:first-of-type')[0].offsetLeft);
        // console.log('first', $('.licensesTitle')[0].offsetLeft);
        // console.log($('.licensesSlideWrapper:first-of-type')[0].offsetLeft + $('.licensesTitle')[0].offsetLeft);
        // console.log('newValue', newValue);
        // console.log($('.licensesSlideWrapper:first-of-type')[0].offsetLeft + $('.licensesTitle')[0].offsetLeft);
        // console.log($('.licensesSlideWrapper:first-of-type').css('marginLeft'));

        // console.log($('.licensesSlideWrapper:first-of-type')[0].offsetLeft);

    // }

    // document.querySelector('.modalImg').addEventListener('click', showModal)
    // // function showImage() {
    //    function showModal(){
    //        let input = this;
    //        //     let imgAlt = input.getAttribute("alt");
    //        // console.log(imgAlt);
    //        //     $("#theModal h4.modal-title").html(imgAlt);
    //        let img = this;
    //        let imageHeight = input.height;
    //        // console.dir(input);
    //        let imagWidth = input.width;
    //        let NewimgWidth = imagWidth * 2;
    //        let NewImgHeight = imageHeight * 2;
    //        let picSrc = input.getAttribute("src");
    //        document.querySelector("#picSrc img").setAttribute('src', picSrc);
    //        document.querySelector("div.modal-dialog").style.width = NewimgWidth + 'px';
    //        document.querySelector("#picSrc img").style.width = NewimgWidth + 'px';
    //        document.querySelector("#picSrc img").style.height = NewImgHeight + 'px';
    //
    //            $("#theModal").modal("show");
    //        console.log(NewimgWidth);
    //        console.log(document.querySelector(".modal-dialog").style.width);
    //    }
    //     let MyHtml = '<div id="theModal" class="modal fade">' +
    //         ' <div class="modal-dialog ">' +
    //         '<div class="modal-content">' +
    //         ' <div class="modal-header">' +
    //         '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>' +
    //         '<h4 class="modal-title">Hello!</h4>' +
    //         '</div>' +
    //         '<div class="modal-body" id="picSrc">' +
    //         '  <img  not-to-enlarge="true" class="img-responsive" + src=""alt="...">' +
    //         '</div>' +
    //         '<div class="modal-footer">' +
    //         '<button type="button" class="btn btn-default" data-dismiss="modal">' +
    //         'Close' +
    //         '</button>' +
    //         '</div>' +
    //         '</div>' +
    //         '</div>' +
    //         '</div>';
    //     $("div.body-content").append(MyHtml);
    // $("img[not-to-enlarge!=true]").click(showModal);
    // $("img[not-to-enlarge!=true]").css("cursor", "pointer");
    // // };
    // $('#myModal').on('shown.bs.modal', function () {
    //     $('#myInput').trigger('focus')
    // })

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
                console.log($('.searchButton')[0]);
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

    elements.forEach((e
    ) => {
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
                // console.log(select.childNodes[index].classList.remove('first'));
                setTimeout(() => {
                    e.classList.toggle('openSelect')
                }, 70)
                e.addEventListener('click', () => {
                    console.log($(e)[0]);
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

