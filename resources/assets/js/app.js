require('./bootstrap.js');
require('slick-carousel');

$(document).ready(function () {
    $(".carousel").slick({
        arrows: false,
        dots: true
    });

    $(window).click(function () {
        if ($("#app").hasClass('active') || $("#hamburger-menu").hasClass('is-active')) {
            $("#app").removeClass('active');
            $("#hamburger-menu").removeClass('is-active');
        }
    });

    $("#hamburger-menu").click(function (event) {
        $("#app").toggleClass('active');
        $("#hamburger-menu").toggleClass('is-active');

        event.stopPropagation();
    });
});
