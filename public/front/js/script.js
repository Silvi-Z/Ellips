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
        infinite: false,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
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
        dots: true,
    });

    $('.sliderPortfolio').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        cssEase: 'linear',
        dots: true,
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
            locationCheck(button, selectButton[index].getAttribute('data-select'))
            // console.log(selectButton[0].getAttribute('data-select'));
            // button.addEventListener('click', (e) => {
            //     console.log(e.target.sibling());
            //     button.classList.toggle('activeButton')
            // })
        })
    }

    function locationCheck(button, type) {
        if (window.location.pathname.includes(type)) {
            button.classList.add('activeButton')
        } else {
            button.classList.remove('activeButton')
        }
    }

    $('.imgVideo').length > 0 && slideCount($('.imgVideo'));

    $('.sliderBlog').length > 0 && slideCount($('.sliderBlog'));

    $('.singleProduct').length > 0 && slideCount($('.singleProduct'));

    $('.imgVideo').on("afterChange", () => slideCount($('.imgVideo')));

    $('.singleProduct').on("afterChange", () => slideCount($('.singleProduct')));

    $('.sliderBlog').on("afterChange", () => slideCount($('.sliderBlog')));

    $('.services').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        // cssEase: 'ease-in-out',
        swipeToSlide: false,
        arrows: false,
        infinite: false,
        // letiableWidth: true,
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
            // breakpoint: 1500,
            // settings: {
            //     slidesToShow: 2,
            // }
        },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows:true,
                    slidesToShow: 1,
                }
            }],

    });


    $('.company').slick({
        // items: 4,
        // loop:true,
        slidesToShow: 5,
        autoplay: true,
        infinite: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        arrows: false,
        autoplaySpeed: 0,
        speed: 3000,
        // margin:10,
        // autoplay:true,
        // infinite:true,
        // autoplayTimeout:1000,
        cssEase: 'linear',
        // autoplayHoverPause:true
        // autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 1500,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 1200,
            settings: {
                // initialSlide: 5,
                slidesToShow: 3
            }
        }, {
            breakpoint: 768,
            settings: {
                // initialSlide: 5,
                slidesToShow: 4
            }
        }, {
            breakpoint: 550,
            settings: {
                // initialSlide: 5,
                slidesToShow: 3
            }
        }, {
            breakpoint: 400,
            settings: {
                // initialSlide: 5,
                slidesToShow: 2
            }
        }]
    });

    // $('.company').slick({
//     slidesToShow: 4,
//     slidesToScroll: 4,
//     autoplay: true,
//     infinite: true,
//     // speed: 1000,
//     cssEase: 'linear',
//     pauseOnFocus: false,
//     pauseOnHover: false,
//     pauseOnDotsHover: false,
//     arrows: false,
//
// })

    $('.systemsSlide').slick({
        slidesToShow: 3,
        // slidesToScroll: 2,
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
                arrows: false,
            }
        },
        ]
    })

    $('.licenses').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: false,
        variableWidth: true,
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

    // const prev = document.querySelector('.slick-prev')
// if(prev){
//     prev.addEventListener("mousemove", parallax);
//     prev.addEventListener("mouseleave", remove);
// }
// function remove() {
//     prev.style.removeProperty('transform')
// }
// function parallax(e) {
//     const r = this.getBoundingClientRect()
//     // let _depth2 = `${400 - (_mouseX - _w) * 0.6}% , ${10 - (_mouseY - _h) * 0.6}%`;
//     // if (elem[i].getBoundingClientRect().height > 30) {
//     //     elem[i].style.transform = `translate(${_depth2})`;
//     //     // elem[i].style.left+=_mouseX
//     //     // elem[i].style.top+=_mouseY
//     // }else {
//     prev.style.transform = `translate(${e.clientX - (r.left + Math.floor(r.width))}px, ${e.clientY - (r.top + Math.floor(r.height))}px) `;
//     // prev.style.setProperty('--x', e.clientX - (r.left + Math.floor(r.width / 2)))
//     // prev.style.setProperty('--y', e.clientY - (r.top + Math.floor(r.height / 2)))
//     // }
//     // }
// }
    // document.querySelector('.img').addEventListener('click', showModal)
    // function showImage() {
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
    // };
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
    // $('.newCompany').slick({
    //     slidesToShow: 5,
    //     autoplaySpeed: 0,
    //     speed: 1000,
    //     // slidesToScroll: 2,
    //     infinite: true,
    //     // autoplay:true,
    //     arrows: false,
    // })
    //
    // $('.imagesSlide').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    //     console.log(slick);
    //     const p = document.querySelector("p")
    //     let text = slick.$slideTrack.prevObject[nextSlide].childNodes[1].getAttribute('data-text');
    //     p.innerHTML = text;
    //     p.classList.add('animation')
    //     $('.bigSlide p')[0].classList.add('animation')
    //     setTimeout(e => {
    //         p.classList.remove("animation")
    //         $('.bigSlide p')[0].classList.remove('animation')
    //     }, 1700)
    // });

    // $(document).ready(function () {
    //     console.log('dsfs');
    // $('.dropdown-menu').dropdown();

    // });

    function seeAllText(element, height) {
        if (element.height() >= height) {
            console.log('sdfvs');
            let seeText = element[0].nextElementSibling
            console.log(element[0].nextElementSibling);
            seeText.classList.add('d-block')
            seeText.addEventListener('click', () => {
                element[0].classList.add('fitContent');
                element[0].classList.add('pointEvent')
            })
        }
    }


    document.querySelectorAll('.searchInput').forEach(item => {
        item.addEventListener('keyup', (e)=>{
            if (e.target.value.length === 3){
                alert(e.target.getAttribute('data-name'))
            }
        })
    })
    // $('.searchInput').forEach(console.log(e.target));
    // seeAllText($('.systemDescription'), '413')
    // seeAllText($('.productDescription'), '215')

    $('.selectMenu')[0].addEventListener('click', () => {
        console.log('sdfsdf');
        const menu = $('.subMenuWrapper')[0].classList;
        const header = $('header')[0].classList;
        menu.toggle('d-flex');
        header.toggle('whiteBackground')
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
        console.log(select);
        select.childNodes.forEach(e => {
            if (e.nodeName === 'DIV') {
                select.classList.toggle('selectClass')
                setTimeout(() => {
                    console.log(e);
                    e.classList.toggle('openSelect')
                }, 70)
                e.addEventListener('click', ()=>{
                    e.target.classList.add('first')
                })
            }
        })
    })

    window.addEventListener('scroll', ()=> {
        if ($('.singleProduct').length > 0) {
            if ($('.singleProduct')[0].getBoundingClientRect().top < 100) {
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
        }
    })

    function responsiveMenu() {
        if (window.innerWidth <= 1090) {
            // $('.responsiveMenu')[0].classList.remove('d-flex')
            // $('.toggleMenu')[0].classList.remove('open')
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

    function circleAnimation(){
        if (document.querySelector('.circles')) {
            const top = document.querySelector('.circles').getBoundingClientRect().top
            const redCircle = document.querySelector('.redCircle')
            const transparentCircle = document.querySelector('.transparentCircle')
            const blueCircle = document.querySelector('.blueCircle')

            if (top > 0 && top <= window.innerHeight - 200) {
                // console.log('innerHeight', window.innerHeight - 100);
                // console.log('top', top);
                redCircle.classList.add('redCirclePosition')
                transparentCircle.classList.add('transparentCirclePosition')
                blueCircle.classList.add('blueCirclePosition')
            } else if (window.scrollY >= document.querySelector('.circles').offsetTop - 1000) {
                console.log('dsfsd');
                $('.redCircle')[0].classList.add('redCirclePosition')
                $('.transparentCircle')[0].classList.add('transparentCirclePosition')
                $('.blueCircle')[0].classList.add('blueCirclePosition')
            }
        }
    }
    circleAnimation()
    ymaps.ready(init);

    function init() {
        let coords = [40.213236, 44.520613]
        let myMap = new ymaps.Map("map", {
            center: coords,
            zoom: 18,
            // iconColor:black,
            controls: ['zoomControl'],

        });
        myMap.behaviors.disable('scrollZoom');
        let placemark = new ymaps.Placemark((coords),{}, {
            iconContentOffset: [150, 150],
            iconImageSize: [150, 150],
            iconColor:'#FE0C11',
        });
        myMap.geoObjects.add(placemark);
        console.log(myMap);

        document.querySelectorAll('.showMap').forEach(item=>{
            item.addEventListener('click', e => {
                ymaps.geocode(e.target.nextElementSibling.innerHTML).then(function (res) {
                    let coordinates = res.geoObjects.get(0).geometry.getCoordinates();
                    coords = coordinates;
                    placemark = new ymaps.Placemark(coordinates);
                    myMap.geoObjects.add(placemark);

                    // myMap = new ymaps.Map("map", {
                    //     center: coords,
                    //     zoom: 15
                    // });

                    myMap.setCenter(coords, 18, {
                        center: coords,
                        checkZoomRange: true,
                        duration: 0,
                    })
                    console.log(coords);
                    window.scrollTo(0,document.body.scrollHeight);
                    // myMap.events.add('boundschange', function(e){
                    //     console.log(e);
                    //     if (e.get('newZoom') !== e.get('oldZoom')) {
                    //         console.log('zoomchange')
                    //     }
                    // })
                    // myMap = new ymaps.Map("map", {
                    //     center: coords,
                    //     zoom: 15
                    // });
                    // myMap = new ymaps.Map.center(coords)
                    // myMap = new ymaps.Map.zoom(15)
                        // zoom: 15
                    // });
                    // console.log(myMap);
                });

            })
        })

        //
        // ymaps.geocode('Հաղթանակի պողոտա 42/9').then(function (res) {
        //     let coordinates = res.geoObjects.get(0).geometry.getCoordinates();
        //     coords = coordinates
        //     let placemark = new ymaps.Placemark(coordinates);
        //     myMap.geoObjects.add(placemark);
        // });


    }




    let videos = document.getElementsByClassName("youtube");

    for (let i = 0; i < videos.length; i++) {

        let youtube = videos[i];
        // let img = document.createElement("img");
        // img.setAttribute("src", "http://i.ytimg.com/vi/" + youtube.id + "/hqdefault.jpg");
        // img.setAttribute("class", "thumb");

        // let circle = document.createElement("div");
        // circle.setAttribute("class", "circle");

        // youtube.appendChild(img);
        // youtube.appendChild(circle);
        // youtube.onclick = function () {
        // console.log(this)
        let iframe = document.createElement("iframe");
        iframe.setAttribute("src", "https://www.youtube.com/embed/" + youtube.id + "?autoplay=1&controls=0&border=0&iv_load_policy=1&modestbranding=1");
        iframe.style.width = getComputedStyle(youtube).width;
        iframe.style.height = getComputedStyle(youtube).height;
        youtube.appendChild(iframe);
        iframe.setAttribute('allow', 'autoplay')
        // iframe.setAttribute('frameborder', '0')
        iframe.setAttribute('autoplay', true)


        // };
        // let tag = document.createElement('script');
        // tag.src = "https://www.youtube.com/player_api";
        // let firstScriptTag = document.getElementsByTagName('script')[0];
        // firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        //
        // // Replace the 'ytplayer' element with an <iframe> and
        // // YouTube player after the API code downloads.
        // let player;
        // function onYouTubePlayerAPIReady() {
        //     player = new YT.Player('ytplayer', {
        //         height: '360',
        //         width: '640',
        //         videoId: 'M7lc1UVf-VE'
        //     });
        // }
    }

    //
    // $('.homePageTitle')[0].addEventListener('click', ()=>{
    //     $('.imagesSmallSlide').slick("slickNext")
    // })
    // console.log($('.imagesSmallSlide')[0].slickNext());

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
    // $('.imagesSlide').on('swipe', function (event, slick, direction) {
    //     direction === 'left' ? $('.textSlide').slick("slickNext") : $('.textSlide').slick("slickPrev");
    //     // $('.textSlide')
    // });

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
        if(st === 0){
            $('header section')[0].classList.remove('nav-up');
            $('header section')[0].classList.remove('nav-down');
        }
        lastScrollTop = st;
    }

});

