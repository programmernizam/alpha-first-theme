var $ = jQuery;
$(document).ready(function () {
    $(".slider").bxSlider({
        mode: 'fade',
        auto: true,
        speed: 1000,
        adaptiveHeight: true,
        infiniteLoop: true,
    });
});