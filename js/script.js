
$(document).ready(function () {
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

    $(window).on('scroll', function () {
        var wScroll = $(this).scrollTop();
        wScroll > 1 ? $('#navbar').addClass('fixed-nav') : $('#navbar').removeClass('fixed-nav');
    });

    var trigger = $('#hamburger');
    trigger.on('click',function () {
        trigger.toggleClass('is-open');
        $('.navbar-nav').toggleClass('open')
    });
});