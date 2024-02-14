jQuery(document).ready(function($) {
    var lenis = new Lenis();
    var $window = $(window);
    var winHeight = $window.height();
    var winWidth = $window.width();
    var $container = $('.container').first();
    var containerLeft = $container[0].getBoundingClientRect().left;

    $('header .wp-block-navigation__responsive-container').css({'padding': '0 ' + containerLeft + 'px'});



    // $('.rk-select2').select2();

    $('.rk-retreat').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3
    });


    $('.rk-room-images').slick({
        slidesToShow: 1,
        dots: false,
        arrows: false,
        draggable: false,
    });

    $('.home-sliders-1').slick({
        slidesToShow: 1,
        dots: false,
        arrows: true,
        draggable: true,
    });

    $('.rk-room').each(function(i, el){
        var $el = $(el);

        var lightboxDescription = GLightbox({
            selector: '.rk-room-' + i + ' .rk-room-image-link',
        });
    });



    var $scrollWidth = $('.rk-scroll-width');

    function scrollWidthOnScroll() {

        if (winWidth <= 768) return;

        $scrollWidth.each(function(i,e){
            var $e = $(e);
            var eRect = e.getBoundingClientRect();
            var eRectTop = eRect.top;
            var eRectBottom = eRect.bottom;
            var eRectHeight = eRect.height;



            if (eRectTop <= winHeight && eRectTop > winHeight / 2 ) {
                var progress = (2 * eRectTop - winHeight) / winHeight;
                // console.info(progress);
                var margin = 80 * progress;

                $e.css({'margin': '0 ' + margin + 'px'});
            }

            if (eRectBottom > 0 && eRectBottom <= winHeight / 2 ) {
                var progress = 1 - (2 * eRectBottom / winHeight);
                console.info(progress);
                var margin = 80 * progress;

                $e.css({'margin': '0 ' + margin + 'px'});
            }
        })
    }

    function onScroll(e) {
        // stickyMenuOnScroll();
        scrollWidthOnScroll();
    }

    function onResize() {
        winHeight = $window.height();
        winWidth = $window.width();
    }

    function raf(time) {
        lenis.raf(time)
        requestAnimationFrame(raf)
    }

    requestAnimationFrame(raf)

    onScroll();
    onResize();

    lenis.on('scroll', onScroll);
    // $window.on('scroll', onScroll);
    $window.on('resize', onResize);
});
