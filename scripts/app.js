$(document).ready(function() {
    $('.gallery').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });

    $(".scroll-link").click(function (e) {
        e.preventDefault();
        var pos = $(e.currentTarget.hash).offset().top;
        $('html, body').animate({
            scrollTop: pos - 100
        }, 1000);
    });

    $(window).scroll(function () {
        if ($(document).scrollTop() > 150) {
            $('#header').addClass('shrink');
        } else {
            $('#header').removeClass('shrink');
        }
    });
});