var swiper = new Swiper('#swiper-container_1', {
    slidesPerView: 2,
    autoplay: {
        delay: 2000
    },
    direction: 'horizontal',
    navigation: {
        nextEl: '#swiper-button-next_1',
        prevEl: '#swiper-button-prev_1',
    },
    breakpoints: {
        1024: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 45
        },
        640: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 45
        }
    }
});
var swiper_1 = new Swiper('#swiper-container_2', {
    slidesPerView: 4,
    slidesPerGroup: 2,
    spaceBetween: 20,
    autoplay: {
        delay: 2000
    },
    direction: 'horizontal',
    navigation: {
        nextEl: '#swiper-button-next_2',
        prevEl: '#swiper-button-prev_2',
    },
    breakpoints: {
        1024: {
            slidesPerView: 2,
            slidesPerGroup: 2,
            spaceBetween: 45
        },
        640: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 45
        }
    }
});
var swiper_2 = new Swiper('#swiper-container_3', {
    slidesPerView: 4,
    slidesPerGroup: 2,
    spaceBetween: 20,
    autoplay: {
        delay: 2000
    },
    direction: 'horizontal',
    navigation: {
        nextEl: '#swiper-button-next_3',
        prevEl: '#swiper-button-prev_3',
    },
    breakpoints: {
        1024: {
            slidesPerView: 2,
            slidesPerGroup: 2,
            spaceBetween: 45
        },
        640: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 45
        }
    }

});
var swiper_3 = new Swiper('#swiper-container_4', {
    slidesPerView: 4,
    slidesPerGroup: 2,
    spaceBetween: 20,
    autoplay: {
        delay: 2000
    },
    direction: 'horizontal',
    navigation: {
        nextEl: '#swiper-button-next_4',
        prevEl: '#swiper-button-prev_4',
    },
    breakpoints: {
        1024: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 45
        },
        640: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 45
        }
    }
});

var swiper_5 = new Swiper('#slider_3', {
    slidesPerView: 3,
    autoplay: {
        delay: 2000
    },
    direction: 'horizontal',
    navigation: {
        nextEl: '#slider_3_next',
        prevEl: '#slider_3_prev',
    },
    breakpoints: {
        1024: {
            slidesPerView: 3,
            slidesPerGroup: 3,
        },
        640: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 40
        }
    }
});
var swiper_6 = new Swiper('#swiper-container_5', {
    slidesPerView: 4,
    spaceBetween: 20,
    autoplay: {
        delay: 2000
    },
    direction: 'horizontal',
    navigation: {
        nextEl: '#swiper-button-next_5',
        prevEl: '#swiper-button-prev_5',
    },
    breakpoints: {
        1024: {
            slidesPerView: 2,
            slidesPerGroup: 2,
            spaceBetween: 20
        },

        640: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 45
        }
    }

});
var swiper_big = new Swiper('#big_swiper', {
    slidesPerView: 1,
    autoplay: {
        delay: 2000
    },
    direction: 'horizontal',
    navigation: {
        nextEl: '#big_swiper_next',
        prevEl: '.swiper-button-prev_big',
    },
});


//mobile

$('.open__mobile__menu').click(function() {
    $('.mobile-menu').slideToggle()
})
$('.mobile-menu__close').click(function() {
    $('.mobile-menu').slideToggle()
})

$('.open-filters').click(function() {
    $('.select-brown').slideToggle()
    $('.open-filters').slideToggle()
})
var values = new Array()
$('.select-brown__category').click(function() {
    $(this).toggleClass("chosen")
})

$('.open-hits').click(function() {
    $('#hits').css({'visibility': 'visible', 'height': 'auto'})
    $('.open-hits').toggle()
    $('.close-hits').toggle()
})
$('.close-hits').click(function() {
    $('#hits').css({'visibility': 'hidden', 'height': '0'})
    $('.open-hits').toggle()
    $('.close-hits').toggle()
})

$('.open-new').click(function() {
    $('#new').css({'visibility': 'visible', 'height': 'auto'})
    $('.open-new').toggle()
    $('.close-new').toggle()
})
$('.close-new').click(function() {
    $('#new').css({'visibility': 'hidden', 'height': '0'})
    $('.open-new').toggle()
    $('.close-new').toggle()
})



var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    slidesPerView: 3,
    loop: true,
    freeMode: true,
    loopedSlides: 5, //looped slides should be the same
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    breakpoints: {
        800: {
            autoplay: {
                delay: 4000,
            }
        },
        640: {

            slidesPerView: 2

        }
    },

});
var galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
    loop: true,
    loopedSlides: 5, //looped slides should be the same
    navigation: {
        nextEl: '#swiper-button-next_gallery',
        prevEl: '#swiper-button-prev_gallery',
    },
    thumbs: {
        swiper: galleryThumbs,
    },
    breakpoints: {
        800: {
            autoplay: {
                delay: 4000,
            }
        }
    },
});
