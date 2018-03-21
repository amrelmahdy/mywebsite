$(document).ready(function() {

    var windowHeight = $(window).height();

    $('.head').height(windowHeight);

    var animationTimeout = null;


    if ($(window).scrollTop() <= 30) {
        animationTimeout = setTimeout(function () {
            $('.navbar-fixed-top').stop();
            $('.navbar-fixed-top').animate({
                'left': '15',
                'right': '15',
                'top': '30',
                'borderRadius': '0',
            }, 'fast');
        }, 50);
    }


    $(window).on('scroll', function () {

        clearTimeout(animationTimeout);

        if ($(window).scrollTop() >= 30) {
            animationTimeout = setTimeout(function () {
                $('.navbar-fixed-top').stop();
                $('.navbar-fixed-top').animate({
                    'left': '0',
                    'right': '0',
                    'top': '0',
                    'borderRadius': '0',
                }, 'fast');
            }, 50);
        } else {
            animationTimeout = setTimeout(function () {
                $('.navbar-fixed-top').stop();
                $('.navbar-fixed-top').animate({
                    'left': '15px',
                    'right': '15px',
                    'top': '30px',
                    'borderRadius': '5px',
                }, 'fast');
            }, 50);
        }


    }); // scroll


    // Trigger MixitUp

    $('#portfolio').mixItUp();

    $('.navbar-right li a').on('click', function (event) {
        console.log($(event.target).data('scroll'));
        $('html, body').animate({
            'scrollTop': $('#' + $(event.target).data('scroll')).offset().top,
        });
        $(event.target).parent().addClass('active').siblings().removeClass('active');
    });

    $('.fa-angle-up').on('click', function () {
        $('html, body').animate({
            'scrollTop': 0,
        });
    });

    $('body').scrollspy({ target: '.navbar-fixed-top' });

});