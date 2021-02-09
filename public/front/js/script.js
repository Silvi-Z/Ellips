$(document).ready(function () {
    $('.imagesSlide').slick({
        speed: 1000,
        slidesToShow: 1,
        autoplay: true,
        infinite: true,
        arrows: true,
        swipe: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        letiableWidth: true,
        cssEase: 'ease-in-out',
        responsive: [{
            breakpoint: 1400,
            settings: {
                // arrows: false,
            }
        },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    swipe: true,
                }
            }
        ]
    });
    $('.imagesSmallSlide').slick({
        speed: 1000,
        slidesToShow: 1,
        autoplay: true,
        initialSlide: 1,
        arrows: false,
        swipe: false,
        infinite: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        letiableWidth: true,
        cssEase: 'ease-in-out',
        responsive: [{
            breakpoint: 1400,
            settings: {
                arrows: false,
            }
        }]
    });

    $('.singleProduct').slick({
        slidesToShow: 1,
        infinite: true,
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
        Array.from(selectButton).forEach((button) => {
            button.addEventListener('click', (e) => {
                button.classList.toggle('activeButton')
            })
        })
    }

    $('.imgVideo').length > 0 && slideCount($('.imgVideo'));

    $('.sliderBlog').length > 0 && slideCount($('.sliderBlog'));

    $('.singleProduct').length > 0 && slideCount($('.singleProduct'));

    $('.imgVideo').on("afterChange", () => slideCount($('.imgVideo')));

    $('.singleProduct').on("afterChange", () => slideCount($('.singleProduct')));

    $('.sliderBlog').on("afterChange", () => slideCount($('.sliderBlog')));


    $('.imagesSlide').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        const p = document.querySelector("p")
        let text = slick.$slideTrack.prevObject[nextSlide].childNodes[1].getAttribute('data-text');
        p.innerHTML = text;
        p.classList.add('animation')
        setTimeout(e => {
            p.classList.remove("animation")
        }, 1500)
    });

    // $(document).ready(function () {
    //     console.log('dsfs');
    $('.dropdown-menu').dropdown();
    // });

    $('.services').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        // cssEase: 'ease-in-out',
        // swipeToSlide: true,
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

    $('.companye').slick({
        // items: 4,
        // loop:true,
        slidesToShow: 4,
        autoplay: true,
        infinite: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        arrows: false,
        autoplaySpeed: 0,
        speed: 2000,
        // margin:10,
        // autoplay:true,
        // infinite:true,
        // autoplayTimeout:1000,
        cssEase: 'linear',
        // autoplayHoverPause:true
        // autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 650,
            settings: {
                initialSlide: 2,
                slidesToShow: 1
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
        slidesToScroll: 2,
        infinite: false,
        swipeToSlide: true,
        arrows: false,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3
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

    // if (window.scrollY >= document.querySelector('.circles').offsetTop){
    //     $('.redCircle')[0].classList.add('redCirclePosition')
    //     $('.transparentCircle')[0].classList.add('transparentCirclePosition')
    //     $('.blueCircle')[0].classList.add('blueCirclePosition')
    // }

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
    $('.newCompany').slick({
        slidesToShow: 5,
        autoplaySpeed: 0,
        speed: 1000,
        // slidesToScroll: 2,
        infinite: true,
        // autoplay:true,
        arrows: false,
    })
    console.log($('.productDescription').height());

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

    seeAllText($('.systemDescription'), '413')
    seeAllText($('.productDescription'), '215')

    $('.selectMenu')[0].addEventListener('click', () => {
        console.log('dsfgsd');
        const menu = $('.subMenuWrapper')[0].classList;
        const header = $('header')[0].classList;
        menu.toggle('d-flex');
        header.toggle('whiteBackground')
    })

    const elements = document.querySelectorAll("h2");
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
        select.childNodes.forEach(e => {
            if (e.nodeName === 'DIV') {
                select.classList.toggle('selectClass')
                setTimeout(() => {
                    e.classList.toggle('openSelect')
                }, 70)
            }
        })
    })

    function responsiveMenu() {
        console.log(window.innerWidth);
        if (window.innerWidth <= 1090) {
            console.log('tgyer');
            $('.responsiveMenu')[0].classList.remove('d-flex')
            $('.toggleMenu')[0].classList.remove('open')
            $('.subMenuWrapper')[0].classList.remove('d-flex')
            $('header')[0].classList.remove('whiteBackground')
            $('.inline-menu')[0].classList.add('d-none')
            $('.toggleMenu')[0].classList.remove('d-none')
            $('.toggleMenu')[0].classList.add('d-flex')
        } else {
            console.log('sdfd');
            $('.inline-menu')[0].classList.remove('d-none')
            $('.toggleMenu')[0].classList.add('d-none')
            $('.toggleMenu')[0].classList.remove('d-flex')
        }
    }

    responsiveMenu()
    window.addEventListener('resize', responsiveMenu)

    document.querySelector('.toggleMenu').addEventListener('click', (e) => {
        console.log(window.innerWidth);
        e.target.classList.toggle('open');
        $('.responsiveMenu')[0].classList.toggle('d-flex')
    })

    window.addEventListener('scroll', () => {
        if (document.querySelector('.circles')) {
            const top = document.querySelector('.circles').getBoundingClientRect().top
            const redCircle = document.querySelector('.redCircle')
            const transparentCircle = document.querySelector('.transparentCircle')
            const blueCircle = document.querySelector('.blueCircle')
            if (top > 0 && top <= window.innerHeight - 100) {
                redCircle.classList.add('redCirclePosition')
                transparentCircle.classList.add('transparentCirclePosition')
                blueCircle.classList.add('blueCirclePosition')
            }
        }
    })

    ymaps.ready(init);

    function init() {
        let coords = [40.177200, 44.503490]
        let myMap = new ymaps.Map("map", {
            center: coords,
            zoom: 7
        });
        ymaps.geocode('Նիկողայոս Տիգրանյան 27').then(function (res) {
            let coordinates = res.geoObjects.get(0).geometry.getCoordinates();
            coords = coordinates
            let placemark = new ymaps.Placemark(coordinates);
            myMap.geoObjects.add(placemark);
        });

        ymaps.geocode('Հաղթանակի պողոտա 42/9').then(function (res) {
            let coordinates = res.geoObjects.get(0).geometry.getCoordinates();
            coords = coordinates
            let placemark = new ymaps.Placemark(coordinates);
            myMap.geoObjects.add(placemark);
        });


    }


    let videos = document.getElementsByClassName("youtube");

    for (let i = 0; i < videos.length; i++) {

        let youtube = videos[i];
        let img = document.createElement("img");
        img.setAttribute("src", "http://i.ytimg.com/vi/" + youtube.id + "/hqdefault.jpg");
        img.setAttribute("class", "thumb");

        let circle = document.createElement("div");
        circle.setAttribute("class", "circle");

        youtube.appendChild(img);
        youtube.appendChild(circle);

        youtube.onclick = function () {
            let iframe = document.createElement("iframe");
            iframe.setAttribute("src", "https://www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1&border=0&wmode=opaque&enablejsapi=1");
            iframe.style.width = this.style.width;
            iframe.style.height = this.style.height;
            this.parentNode.replaceChild(iframe, this);

        };
    }

    //
    // $('.homePageTitle')[0].addEventListener('click', ()=>{
    //     $('.imagesSmallSlide').slick("slickNext")
    // })
    // console.log($('.imagesSmallSlide')[0].slickNext());


    // [0]


    document.querySelectorAll('.imagesSlide .slick-arrow').forEach(item => {
        item.addEventListener('click', () => {
            if (item.classList.contains('slick-next')) {
                $('.imagesSmallSlide').slick("slickNext")
            } else if (item.classList.contains('slick-prev')) {
                $('.imagesSmallSlide').slick("slickPrev")
            }
        })
    });
});

