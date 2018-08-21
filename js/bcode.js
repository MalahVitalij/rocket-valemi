$(window).on('load', function(){
    $('body').addClass('load');
    $('body').fadeTo('slow' , 1);
});
$(document).ready(function() {
    $('.clients-carousel').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
    });
});