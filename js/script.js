$(document).ready(function() {
    // scrollspy
    $('body').scrollspy({ target: '#navbar' });

    // Smooth scroll
    $("#navbar a[href^='#']").on('click', function(e) {
        e.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(this.hash).offset().top
        }, 600);
        trigger.toggleClass('is-open');
        $('.navbar-nav').toggleClass('open')
    });


    // fix navbar on scroll
    $(window).on('scroll', function() {
        var wScroll = $(this).scrollTop();
        wScroll > 1 ? $('#navbar').addClass('fixed-nav') : $('#navbar').removeClass('fixed-nav');
    });

    // toggle mobile nav
    var trigger = $('#hamburger');
    trigger.on('click', function() {
        trigger.toggleClass('is-open');
        $('.navbar-nav').toggleClass('open')
    });

    // fix carousel direction issues
    $("#home-carousel").on("touchstart", function(event) {
        var xClick = event.originalEvent.touches[0].pageX;
        $(this).on("touchmove", function(event) {
            var xMove = event.originalEvent.touches[0].pageX;

            if (Math.floor(xClick - xMove) > 5) {
                $(this).carousel('prev');
            } else if (Math.floor(xClick - xMove) < -5) {
                $(this).carousel('next');
            }
        });
        $("#home-carousel").on("touchend", function() {
            $(this).off("touchmove");
        });
    });

    // optimize pricing slider
    $('.swiper-slide').on('click', function() {
        if ($(this).hasClass('swiper-slide-next')) {
            swiper.slideTo(swiper.activeIndex + 1);
        } else if ($(this).hasClass('swiper-slide-prev')) {
            swiper.slideTo(swiper.activeIndex - 1);
        }
    });
    swiper.slideTo(1);

});


// Swiper.JS Configurations
var swiper = new Swiper(".swiper-container", {
    effect: "coverflow",
    grabCursor: false,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 20,
        stretch: 0,
        depth: 200,
        modifier: 1,
        slideShadows: false
    },
    breakpoints: {
        576: {
            coverflowEffect: {
                rotate: 20,
                stretch: 0,
                depth: 650,
                modifier: 1,
                slideShadows: false
            },
        }
    },
    pagination: {
        el: ".swiper-pagination"
    },
});

