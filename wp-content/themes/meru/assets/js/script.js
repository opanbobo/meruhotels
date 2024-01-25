jQuery(document).ready(function($) {
    var $window = $(window);
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
        dots: true,
        arrows: false,
        draggable: false,
    });

    $('.rk-room').each(function(i, el){
        var $el = $(el);

        var lightboxDescription = GLightbox({
            selector: '.rk-room-' + i + ' .rk-room-image-link',
        });
    });



});
