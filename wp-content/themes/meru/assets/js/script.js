jQuery(document).ready(function($) {
    var $window = $(window);
    var $container = $('.container').first();
    var containerLeft = $container[0].getBoundingClientRect().left;

    $('header .wp-block-navigation__responsive-container').css({'padding': '0 ' + containerLeft + 'px'});



    // $('.rk-select2').select2();





});
