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
    };
  e.preventDefault;
  $(this).toggleClass('menu-btn_active');
});
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
            $('html, body').css('overflowY', 'hidden'); 
        });
        $(".btn-close_view").click (function (){
            $(".modal-overlay-order").fadeOut();
            $('html, body').css('overflowY', 'auto'); 
        });

$(document).mouseup(function (e) {
    var myOrders = $(".modal-overlay-order");
    if (myOrders.has(e.target).length === 0){
        $('html, body').css('overflowY', 'auto'); 
        myOrders.fadeOut();
    }
});
/* конец модальное окно попап просмотр заказа */
/* модальное окно попап оплата */

    $(".btn-view-pay").click (function (){
            $(".modal-overlay-orderPay").fadeIn();
            $('html, body').css('overflowY', 'hidden'); 
        });
        $(".btn-close_view").click (function (){
            $(".modal-overlay-orderPay").fadeOut();
            $('html, body').css('overflowY', 'auto'); 
        });

$(document).mouseup(function (e) {
    var myPay = $(".modal-overlay-orderPay");
    if (myPay.has(e.target).length === 0){
        $('html, body').css('overflowY', 'auto'); 
        myPay.fadeOut();
    }
});
/* конец модальное окно попап оплата заказа */
/* модальное окно попап оплата */

    $(".btn-view-hill").click (function (){
            $(".modal-overlay-order-hill").fadeIn();
            $('html, body').css('overflowY', 'hidden'); 
        });
        $(".btn-close_view").click (function (){
            $(".modal-overlay-order-hill").fadeOut();
            $('html, body').css('overflowY', 'auto'); 
        });

$(document).mouseup(function (e) {
    var myPay = $(".modal-overlay-order-hill");
    if (myPay.has(e.target).length === 0){
        $('html, body').css('overflowY', 'auto'); 
        myPay.fadeOut();
    }
});
/* конец модальное окно попап оплата заказа */
// popup end


});