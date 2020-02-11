(function () {
    'use strict';
    var i = 0;
    var header = document.querySelector("header");

    window.onscroll = function () {
        var scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;

        if (scrollPosition > 150) {
            header.classList.add('stuck');
        } else {
            header.classList.remove('stuck');
        }
    };

    var lazyLoadInstance = new LazyLoad({
        elements_selector: ".lazy"
    });

    var nav = document.querySelector('#nav');
    nav.addEventListener('click', function(e) {
        header.classList.add('open')
    })

    var close = document.querySelector('#close');
    close.addEventListener('click', function (e) {
        header.classList.remove('open')
    })

    var links = document.querySelectorAll('nav a')

    for (i = 0; i < links.length; ++i) {
        links[i].addEventListener('click', function (e) {
            header.classList.remove('open')
        })
    }

    var slider = tns({
        container: '.gallery',
        items: 1,
        slideBy: 'page',
        autoplay: false,
        lazyload: true,
        controls: false,
        responsive: {
            640: {
                items: 2,
                disable: false
            },
            800: {
                disable: true
            }
        }
    });
})();
