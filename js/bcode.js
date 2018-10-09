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
                       breakpoint: 1270,
                       settings: {
                          slidesToShow: 2,
                          slidesToScroll: 1
                        }
                    },
                    {
                       breakpoint: 755,
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
        $('.main-menu').toggleClass('hidden-li');
    } 
    if($(window).width() < 610 ){
        // $('.menu-btn').removeClass('menu-btn_active');
        $('.main-menu').removeClass('hidden-li');
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

$( window ).resize( function() {

    if($(window).width() > 610 && $('.menu-btn').hasClass('menu-btn_active')){
        console.log("dfsf")
        $('.menu-btn').removeClass('menu-btn_active');
        $('.main-menu').addClass('hidden-li');
    } else{
        // $('.main-menu').addClass('hidden-li');
        // 
    };

    if($(window).width() < 610 && $('.main-menu').hasClass('main-menu-active')){
        $('.main-menu').removeClass('main-menu-active');
        $('.menu-btn').removeClass('menu-btn_active');
    } else{
        $('.main-menu').addClass('hidden-li');
        /*$('.main-menu').removeClass('hidden-li');
        $('.menu-btn').removeClass('menu-btn_active');*/
    };
});



// цвета шариков и басейнов в инпут

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

// цвета шариков и басейнов в инпут конец


/*
$('.main-menu li').on('click', function(e) {
    $('.menu-btn').removeClass('main-menu-active');
  e.preventDefault;
  $(this).toggleClass('menu-btn_active');
});*/
// burger-menu end



// при разрешении 760 добавляется класс к valemi - это
    $(window).on('load resize', function () {
        if($(window).width() <= 980){
            
            
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
                       breakpoint: 980,
                       settings: {
                          slidesToShow: 2,
                          slidesToScroll: 1
                        }
                    },
                    {
                       breakpoint: 755,
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

$('.catalog-form-mobile-btn').click(function(e) {
    e.preventDefault();
    //do other stuff when a click happens
});

    $(".catalog-form-mobile-btn").click (function (){
        $(".modal-overlay-order").fadeIn();
        $('html, body').css('overflow-y', 'hidden'); 
    });

    $(".btn-view").click (function (){
        let modal = $(".modal-overlay-order"),
            form = $(this).closest('form');
            price = form.find('input[name=order-price]').val();
            information = form.serialize();
            form.reset();
        modal.fadeIn();
        modal.find('form input[name=information]').remove();
        modal.find('form').append(
            $('<input>', {
                type: 'hidden',
                name: 'information',
                val: information
            })
        );
        modal.find('form div.prhtml').text(price);
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

    $(".btn-view-pool").click (function (){
        $(".modal-overlay-order-pool").fadeIn();
        $('html, body').css('overflow-y', 'hidden'); 
    });
    $(".btn-close_view").click (function (){
        $(".modal-overlay-order-pool").fadeOut();
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
    $(".radio").click(function(){
        let form = $(this).closest('form'),
            sale = form.find('input[data-name=sale]').val();

        selected_size_price = $('input[name=size]:checked', form).data('price');
        gorka = form.find('input:checkbox');

        if (gorka.is(':checked')) {
            gorka = gorka.data('price');
            all_amount = parseInt(selected_size_price) + parseInt(gorka);
        } else {
            all_amount = parseInt(selected_size_price);
        }

        if(sale != 0){
            all_amount = parseInt(all_amount) - (parseInt(all_amount) / 100 * parseInt(sale));
        }

        $(this).closest("form").find(".price-change").text(all_amount);
        $(this).closest("form").find("input[name='order-price']").text(all_amount);
        $(this).closest("form").find("input[name='order-price']").val(all_amount);
    });


    // Form submit

    var forms = [].slice.call( document.body.querySelectorAll('form.validating') );
    forms.forEach(function(form){
        form.addEventListener('submit', function(e){
            e.preventDefault();
            let data = new FormData(),
                info = $(this).serialize();

            $.ajax({
                method:"POST",
                url:ajaxurl,
                data: { action: $(form).attr('action'), data:info},
                success: function (r){
                    form.reset();
                    var myPay = $(".modal-overlay");
                    myPay.fadeOut();
                    $('html, body').css('overflow-y', 'auto'); 
                }
            });
            
        })
    })

    $('.styled-btn1.apply__promo').on('click', function(e){
        e.preventDefault();
        let promo = $(this).closest('form').find('input:text.promocode').val(),
         variable = $(this).closest('form').find('input:text.promocode'),
             form = $(this).closest('form');

        selected_size_price = $('input[name=size]:checked', form).data('price');
        gorka = form.find('input:checkbox');

        if (gorka.is(':checked')){
            gorka = gorka.data('price');
            all_amount = parseInt(selected_size_price) + parseInt(gorka);
        }else{
            all_amount = parseInt(selected_size_price);
        }

        if (promo == 0) {
            variable.closest("form").find(".price-change").text(all_amount);
            variable.closest("form").find("input[name='order-price']").text(all_amount);
            variable.closest("form").find("input[name='order-price']").val(all_amount);
            variable.closest("form").find("input[data-name='sale']").val('');
        }

        $.ajax({
            method: "POST",
            url: ajaxurl,
            data: { action: 'promocode', promocode: promo },
            success: function (r) {

                result = JSON.parse(r);

                    variable.closest("form").find(".price-change").text(all_amount);
                    variable.closest("form").find("input[name='order-price']").text(all_amount);
                    variable.closest("form").find("input[name='order-price']").val(all_amount);
                    variable.closest("form").find("input[data-name='sale']").val('');

                if (result.status) {
                    let calc = all_amount - (all_amount / 100 * result.percent);
                    //set values no promo
                    variable.closest("form").find(".price-change").text(all_amount);
                    variable.closest("form").find("input[name='order-price']").text(all_amount);
                    variable.closest("form").find("input[name='order-price']").val(all_amount);
                    variable.closest("form").find("input[data-name='sale']").val('');
                    //add discount
                    variable.closest("form").find(".price-change").text(calc);
                    variable.closest("form").find("input[name=order-price]").val(calc);
                    variable.closest("form").find("input[data-name=sale]").val(result.percent);
                }
            }
        })
    })

    $('#check-modal, #check, #check_3').on('click', function(e) {
        let price = $(this).data('price'),
            form = $(this).closest("form")
            discount = form.find("input[data-name='sale']").val(),
            amount = form.find("input[name=order-price]").val();
        if(discount != null){
            price = price - (price / 100 * discount);
        }
        if($(this).prop('checked')){
            result = parseInt(price) + parseInt(amount);
        } else {
            result = parseInt(amount) - parseInt(price);
        }

        form.find(".price-change").text(result);
        form.find("input[name=order-price]").text(result);
        form.find("input[name=order-price]").val(result);

    })

    $('form.paypal').on('submit', function(e){
        e.preventDefault();
        console.log($(this));
    });


// $(document).bind("mouseup touchend" function (e) {
//     var myPay = $(".modal-overlay-order-call");
//     if (myPay.has(e.target).length === 0){
//         // $('html, body').css('overflow-y', 'auto'); 
//         myPay.fadeOut();
//     }
// });




/*
на всплывающий попап
$(".btn-wishes_popap").click (function PopUpShow(){
    $(this).closest('.my-wishes-item').find(".my-wishes-item_popap").fadeIn('slow');
    setTimeout( function() { $(".my-wishes-item_popap").fadeOut('slow'); }, 1000);
});*/
    
});

