$(document).ready(function () {
    $('.imagesSlide').slick({
        speed: 1000,
        autoplay: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        cssEase: 'ease-in-out',
        responsive: [{
            breakpoint: 1400,
            settings: {
                arrows: false,
            }
        }]
    });
    $('.imgVideo').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        cssEase: 'linear',
        fade: true,
        dots:true,
        responsive: [{
            breakpoint: 1400,
            settings: {
            }
        }]
    });

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
        // variableWidth: true,
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

    $('.company').slick({
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

// })
    $('.systemsSlide').slick({
        slidesToShow: 5,
        slidesToScroll: 2,
        infinite: false,
        swipeToSlide: true,
        arrows: false,
    })
    $('.licenses').slick({
        slidesToShow: 5,
        slidesToScroll: 2,
        infinite: false,
        swipeToSlide: true,
        arrows: false,
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

    const elem = select.children;

// for (let i = 0; i < elem.length; i++) {
//     const value = elem[i].classList.value;
//     elem[i].addEventListener('click', () => {
//         if (value.includes('openSelect') && value.includes('first')) {
//             console.log(elem[i]);
//         }
//     })
// }
    function responsiveMenu() {
        const toggleMenu = document.querySelector('.toggleMenu').classList;
        const inlineMenu = document.querySelector('.inline-menu').classList;
        if (window.innerWidth <= 1024) {
            inlineMenu.add('d-none')
            toggleMenu.remove('d-none')
            toggleMenu.add('d-flex')
        }
        else {
            inlineMenu.remove('d-none')
            toggleMenu.add('d-none')
            toggleMenu.remove('d-flex')
        }
    }

    responsiveMenu()
    window.addEventListener('resize', responsiveMenu)
    document.querySelector('.toggleMenu').addEventListener('click', (e) => {
        e.target.classList.toggle('open')
    })
    window.addEventListener('scroll',  ()=> {
        if (document.querySelector('.circles')){
            const top = document.querySelector('.circles').getBoundingClientRect().top
            const redCircle = document.querySelector('.redCircle')
            const transparentCircle = document.querySelector('.transparentCircle')
            const blueCircle = document.querySelector('.blueCircle')
            if (top > 0 && top <= window.innerHeight - 100) {
                redCircle.classList.add('redCirclePosition')
                transparentCircle.classList.add('transparentCirclePosition')
                blueCircle.classList.add('blueCirclePosition')

                console.log("height", window.innerHeight);
                console.log("element", document.querySelector('.circles').getBoundingClientRect().top)
            } else {

            }
        }
    })

})

