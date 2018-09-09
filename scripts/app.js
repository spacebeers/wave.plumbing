(function () {
    'use strict';

    var section = document.querySelectorAll(".spy");
    var sections = {};
    var i = 0;

    Array.prototype.forEach.call(section, function (e) {
        sections[e.id] = e.offsetTop;
    });

    window.onscroll = function () {
        var scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;

        for (i in sections) {
            if (sections[i] <= scrollPosition) {
                document.querySelector('.active').setAttribute('class', ' ');
                document.querySelector('a[href*=' + i + ']').setAttribute('class', 'active');
            }
        }
    };

    var slider = tns({
        container: '.gallery',
        items: 1,
        slideBy: 'page',
        autoplay: false,
        lazyload: true,
        controls: false,
        responsive: {
            320: {
                items: 2
            },
            800: {
                disable: true
            }
        }
    });
})();
