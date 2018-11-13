$(window).on('load', function(){
    $('body').addClass('load');
    $('body').fadeTo('slow' , 1);
});
$(document).ready(function() {

    $(window).on("resize load", function () {
        console.log($(window).width());
    });
   

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
        let modal = $(".modal-overlay-order"),
            form = $(this).closest('form');
        price = form.find('input[name=order-price]').val();
        information = form.serialize();
        form[0].reset();
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
    $(".btn-view").click (function (){
        let modal = $(".modal-overlay-order"),
            form = $(this).closest('form');
            price = form.find('input[name=order-price]').val();
            information = form.serialize();
             console.log(form);
            form[0].reset();
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
    $(".btn__order-pool").click(function() {
        $(".modal-overlay-orderPull").fadeIn();
        $('html, body').css('overflow-y', 'hidden'); 
    });
    $(".btn-close_view").click (function (){
        $(".modal-overlay-orderPay").fadeOut();
        $('html, body').css('overflow-y', 'auto'); 
    });
     $(".btn-close_view").click (function (){
        $(".modal-overlay-orderPull").fadeOut();
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
        let price = $(this).data('price'),
            size = $(this).data('size'),
            target = $(".modal-overlay-order-pool");

            target.find('input[name=size]').remove();
            target.find('input[name=price]').remove();

        target.fadeIn();
        target.find('form').append(
            $('<input>', {
                type: 'hidden',
                name: 'size',
                val: size
            })
        );
        target.find('.price-change').text(price);
        target.find('.order-price').val(price);
        target.find('input[data-name=price]').val(price);
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

     $(".btn-close_view").click(function() {
        $(".modal-overlay-order-success").fadeOut();
        $('html, body').css('overflow-y', 'auto');
     });

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
                    price = $(form).find('input[name=size]:checked').data('price');
                    $(form).find('input[name=order-price]').val(price);
                    $(form).find('input[name=order-price]').text(price);
                    $(form).find('.price-change').text(price);
                    $(".modal-overlay-order-success").fadeIn();
                    $('html, body').css('overflow-y', 'hidden');

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
        if (selected_size_price == null){
            selected_size_price = form.find('input[data-name="price"]').val();
        }
        gorka = form.find('input:checkbox');

        if (gorka.is(':checked')){
            gorka = gorka.data('price');
            if (gorka != null){
                all_amount = parseInt(selected_size_price) + parseInt(gorka);
            } else {
                all_amount = parseInt(selected_size_price);
            }
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
        form = $(this);
        serialized_data = $(this).serialize();

        sale = form.find('input[data-name=sale]').val();
        pool = $("[name=pool]", form);
        babbles = $("[name='babbles']", form);
        size = $("[name='size']:checked", form);
        promocode = $("[name='promocode']", form);
        pay_form = $('form.web_pay');
        form_type = pay_form.data('type');

        yandex_str = '';
        item_name_4 = null;
        $.ajax({
            method: "POST",
            url: ajaxurl,
            data: { action: 'paypal_order', data: serialized_data },
            success: function (r) {

                //calculate pool info
                //pool_info - информация о бассейне
                //price_1 - цена за бассейн
                pool_info = 'Бассейн : Размер - ' + size.val() + 'см. Цвет - ' + pool.val();
                if (sale != null) {
                    price_1 = size.data('price') - (size.data('price') / 100 * sale);
                }

                //add babbles info
                //pool_info - информация о шариках
                babbles_info = 'Шарики : Цвет - ' + babbles.val();

                //add promocode if added
                //pool_info - информация о проимокоде
                if (promocode.val() != '') {
                    item_name_3 = $('<input>', { type: 'hidden', name: 'item_name_3', val: 'Промокод: ' + promocode.val()}); 
                    amount_3 = $('<input>', { type: 'hidden', name: 'amount_3', val: '0' }); 
                }

                //calculate with gorka if added
                //pool_info - информация о горке
                //price_3 - цена за горку
                if (form.find('input[name=gorka]').is(':checked')) {

                    gorka = $("[name='gorka']", form);
                    price_3 = gorka.data('price');

                    if (sale != null) {
                        price_3 = price_3 - (price_3 / 100 * sale);
                    }

                    item_name_4 = $('<input>', { type: 'hidden', name: 'item_name_4', val: 'Горка' });
                    amount_4 = $('<input>', { type: 'hidden', name: 'amount_4', val: price_3 });
                    
                }

                switch (form_type) {
                    case 0:

                        item_name_1 = $('<input>', { type: 'hidden', name: 'item_name_1', val: pool_info }); pay_form.append(item_name_1);
                        amount_1 = $('<input>', { type: 'hidden', name: 'amount_1', val: price_1 }); pay_form.append(amount_1);


                        item_name_2 = $('<input>', { type: 'hidden', name: 'item_name_2', val: babbles_info }); pay_form.append(item_name_2);
                        amount_2 = $('<input>', { type: 'hidden', name: 'amount_2', val: '0' }); pay_form.append(amount_2);

                        if (promocode.val() != '') {
                            pay_form.append(item_name_3);
                            pay_form.append(amount_3); 
                        };

                        if (form.find('input[name=gorka]').is(':checked')) {
                            pay_form.append(item_name_4);
                            pay_form.append(amount_4);
                        };

                        pay_form.submit();

                        break;
                    case 1:

                        yandex_str = pool_info + '. Цена - ' + price_1;
                        yandex_str = yandex_str + '. ' + babbles_info;
                        if (promocode.val() != '') {
                            yandex_str = yandex_str + '. Промокод : ' + promocode.val();
                        }
                        if (form.find('input[name=gorka]').is(':checked')) {
                            yandex_str = yandex_str + '. Горка : Цена ' + price_3;
                        }

                        yandex_sum = price_1;
                        if (form.find('input[name=gorka]').is(':checked')) {
                            yandex_sum = yandex_sum + price_3;
                        }

                        pay_form.append($('<input>', { type: 'hidden', name: 'sum', val: yandex_sum }));
                        pay_form.append($('<input>', { type: 'hidden', name: 'comment', val: yandex_str }));

                        pay_form.submit();

                        break;
                    case 2:

                        fields = pay_form.find('#pay_fields');

                        fields[0].innerHTML = '';

                        Items = new Array();

                        Items.push({
                            "Name": pool_info,
                            "Price": price_1 + '00',
                            "Amount": price_1 + '00',
                            "Quantity": 1.00,
                            "Tax": "none"
                        })

                        if (form.find('input[name=gorka]').is(':checked')) {
                            Items.push({
                                "Name": 'Горка : Цена ' + price_3,
                                "Price": price_3 + '00',
                                "Amount": price_3 + '00',
                                "Quantity": 1.00,
                                "Tax": "none"
                            })
                        }


                        description = babbles_info;
                        if (promocode.val() != '') {
                            description = description + 'Промокод : ' + promocode.val();
                        }


                        tinkov_sum = price_1;
                        if (form.find('input[name=gorka]').is(':checked')) {
                            tinkov_sum = tinkov_sum + price_3;
                        }
                        tinkov_sum = tinkov_sum;

                        receipt = {
                            "Email": 'valemi@mail.ru',
                            "Name": $("[name=name]", form).val(),
                            "Phone": $("[name=phone]", form).val(),
                            "Taxation": "osn",
                            "Items": Items
                        }
                        
                        fields.append($('<input>', { type: 'hidden', name: 'amount', val: tinkov_sum }));
                        fields.append($('<input>', { type: 'hidden', name: 'description', val: description }));
                        fields.append($('<input>', { type: 'hidden', name: 'name', val: $("[name=name]", form).val()}));
                        fields.append($('<input>', { type: 'hidden', name: 'phone', val: $("[name=phone]", form).val()}));
                        fields.append($('<input>', { type: 'hidden', name: 'receipt', val: JSON.stringify(receipt)}));

                        pay_form.submit();

                        break;
                    default:
                        console.log('error');
                }

            }
        });
        


    });

 $('a[href*="#"]').click(function() {
      var target = $(this.hash);
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
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

