$(window).on('load', function(){
    $('body').addClass('load');
    $('body').fadeTo('slow' , 1);
});
$(document).ready(function() {
    $('.popular-slider').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
                    {
                       breakpoint: 1200,
                       settings: {
                          slidesToShow: 2,
                          slidesToScroll: 1
                        }
                    },
                    {
                       breakpoint: 770,
                       settings: {
                          slidesToShow: 1,
                          slidesToScroll: 1
                        }
                    }
                ]
    });
    
    $('.check-ball-wrapper .ball').on('click', function(){
        $(this).find('img').attr('alt');//находим тег img, забираем атрибут alt
        if (!$('.checked-ball .desc').text()) {//проверяем поле, если оно не пустое
            $('.checked-ball .desc').text();//очищаем поле
            $('.checked-ball .desc').text($(this).find('img').attr('alt'));//вставляем значение из найденого атрибута
        } else {//если пустое 
            $('.checked-ball .desc').text($(this).find('img').attr('alt'));//вставляем значение из найденого атрибута
        }
        
        $(this).find('img').attr('src');
        if (!$('.checked-ball .img-block').find('img').attr('src', '')) {
            $('.checked-ball .img-block').find('img').attr('src', '');
            $('.checked-ball .img-block').find('img').attr('src', $(this).find('img').attr('src'));
            
        } else {
            $('.checked-ball .img-block').find('img').attr('src', $(this).find('img').attr('src'));
        }
    });



// burger-menu
$('.menu-btn').on('click', function(e) {
    if($(window).width() >= 610){
        $('.main-menu li').not(':first-child').slideToggle()
    } 
    if($(window).width() <= 610){
        $('.main-menu').toggleClass('main-menu-active');
        $('html, body').toggleClass('overflow'); 
    };
  e.preventDefault;
  $(this).toggleClass('menu-btn_active');
});


$('.main-top-wrapper .menu-block .main-menu li a').on('click', function() {
    $('.main-menu').removeClass('main-menu-active');
    $('.menu-btn').removeClass('menu-btn_active');
    $('html, body').removeClass('overflow'); 
});

//

$('.ball').on('click','img', function(){
   colorToInput( $(this), $('[data-object="ball"]') )
})

$('[data-object="ball"]').on('click','.main__form-submenu span', function(){
    var text = $(this).text();
    $('.ball img[alt=' + text + ']').click()
})

$('.img-block').on('click','img', function(){
   colorToInput( $(this),  $('[data-object="img-block"]') )
})

function colorToInput( ho, to ){
    var alt =ho.attr('alt');
    to.find('input').attr('value', alt);
}




/*
$('.main-menu li').on('click', function(e) {
    $('.menu-btn').removeClass('main-menu-active');
  e.preventDefault;
  $(this).toggleClass('menu-btn_active');
});*/
// burger-menu end



// при разрешении 760 добавляется класс к valemi - это
    $(window).on('load resize', function () {
        if($(window).width() <= 900){
            
            
            $('.advan-slider').not('.slick-initialized').slick({
                dots: false,
                arrows: true,
                infinite: true,
                speed: 300,
                slidesToShow: 2,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 2048,
                        settings: "unslick"
                    },
                    {
                       breakpoint: 900,
                       settings: {
                          slidesToShow: 2,
                          slidesToScroll: 1
                        }
                    },
                    {
                       breakpoint: 770,
                       settings: {
                          slidesToShow: 1,
                          slidesToScroll: 1
                        }
                    }
                ]
            });
            $('.clients-carousel').not('.slick-initialized').slick({
                dots: false,
                arrows: true,
                infinite: true,
                speed: 300,
                slidesToShow: 2,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 2048,
                        settings: "unslick"
                    },
                    {
                       breakpoint: 900,
                       settings: {
                          slidesToShow: 2,
                          slidesToScroll: 1
                    }},
                    {
                       breakpoint: 600,
                       settings: {
                          slidesToShow: 1,
                          slidesToScroll: 1
                    }
                }
                    ]
                });
        }
        
    });
// при разрешении 760 добавляется класс к valemi - это



// select style

  $(".main__form-select").on("click", function() {
    $(this).closest(".main__form-select-wrap").find(".main__form-submenu").slideToggle(0);
  });

  

  $(".main__form-submenu").on("click",'span', function() {

    $(this).closest('.main__form-select-wrap').find('.main__form-select').attr('value',($(this).text()));
    $(this).parent().slideUp(0);
  });

  // select style end

// popup

/* модальное окно попап заказа */
$('.btn-close_view').click(function(e) {
    e.preventDefault();
    //do other stuff when a click happens
});
$('.btn-view').click(function(e) {
    e.preventDefault();
    //do other stuff when a click happens
});

    $(".btn-view").click (function (){
            $(".modal-overlay-order").fadeIn();
            $('html, body').css('overflow-y', 'hidden'); 
        });
        $(".btn-close_view").click (function (){
            $(".modal-overlay-order").fadeOut();
            $('html, body').css('overflow-y', 'auto'); 
        });

$(document).mouseup(function (e) {
    var myOrders = $(".modal-overlay-order");
    if (myOrders.has(e.target).length === 0){
        
        myOrders.fadeOut();
        // $('html, body').css('overflow-y', 'auto');
    }
});
/* конец модальное окно попап просмотр заказа */
/* модальное окно попап оплата */

    $(".btn-view-pay").click (function (){
            $(".modal-overlay-orderPay").fadeIn();
            $('html, body').css('overflow-y', 'hidden'); 
        });
        $(".btn-close_view").click (function (){
            $(".modal-overlay-orderPay").fadeOut();
            $('html, body').css('overflow-y', 'auto'); 
        });

$(document).mouseup(function (e) {
    var myPay = $(".modal-overlay");
    if (myPay.has(e.target).length === 0){
        $('html, body').css('overflow-y', 'auto'); 
        myPay.fadeOut();
    }
});
/* конец модальное окно попап оплата заказа */
/* модальное окно попап оплата */

    $(".btn-view-hill").click (function (){
            $(".modal-overlay-order-hill").fadeIn();
            $('html, body').css('overflow-y', 'hidden'); 
        });
        $(".btn-close_view").click (function (){
            $(".modal-overlay-order-hill").fadeOut();
            $('html, body').css('overflow-y', 'auto'); 
        });

$(document).mouseup(function (e) {
    var myPay = $(".modal-overlay-order-hill");
    if (myPay.has(e.target).length === 0){
        // $('html, body').css('overflow-y', 'auto'); 
        myPay.fadeOut();
    }
});
/* конец модальное окно попап оплата заказа */
/* модальное окно попап оплата */

    $(".btn-view-call").click (function (){
            $(".modal-overlay-order-call").fadeIn();
            $('html, body').css('overflow-y', 'hidden'); 
        });
        $(".btn-close_view").click (function (){
            $(".modal-overlay-order-call").fadeOut();
            $('html, body').css('overflow-y', 'auto'); 
        });

$(document).mouseup(function (e) {
    var myPay = $(".modal-overlay-order-call");
    if (myPay.has(e.target).length === 0){
        // $('html, body').css('overflow-y', 'auto'); 
        myPay.fadeOut();
    }
});
/* конец модальное окно попап оплата заказа */
// popup end


});