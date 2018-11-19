<?php global $fpid; ?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?=wp_title();?></title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/css/slick.min.css" />
        <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/css/fonts.css" />
        <!-- <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" /> -->
        <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/css/media.css" />
        <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> -->
        <?php wp_head(); ?>
        <script>
            ajaxurl = '<?=admin_url("admin-ajax.php")?>';
        </script>
    </head>
    <body>
    <?php
    
    $instagram = get_field('instaram', $fpid);
    $phone = get_field('phone', $fpid);
    $header_big_title = get_field('header_big_title', $fpid);
    $header_small_title = get_field('header_small_title', $fpid);
    $header_under_recive_pool = get_field('header_under_recive_pool', $fpid);
    $privacy = get_field('privacy', $fpid);
    
    $pools = get_field('pool_sizes', options);

    ?>
        <header id="header" class="container-fluid header">
            <!---->
            <section class="top-line">
                <div class="container">
                    <div class="main-top-wrapper">
                        <div class="logo-block">
                            <a href="<?=home_url()?>"><img src="<?=get_template_directory_uri()?>/img/main-logo.png" alt="логотип компании" /></a>
                        </div>
                        <div class="inst-block">
                            <a href="<?=$instagram['url']?>" target="<?=$instagram['target']?>"><img src="<?=get_template_directory_uri()?>/img/inst-icon.png" alt="инстаграм" /><span>Мы в Инстраграм</span></a>
                        </div>
                        <div class="menu-block">
                            <div>
                                <ul class="main-menu hidden-li">
                                    <li><a href="<?=home_url()?>#catalog">каталог</a></li>
                                    <li><a href="<?=home_url()?>#paydel">доставка и оплата</a></li>
                                    <li><a href="<?=home_url()?>#reviews">отзывы</a></li>
                                </ul>
                            </div>
                            <a href="#" class="menu-btn">
                                <span></span>
                            </a>
                        </div>
                        <div class="phone-block">
                            <a href="tel:<?=preg_replace('/[^0-9]/', '', $phone);?>"><img src="<?=get_template_directory_uri()?>/img/phone-icon.png" alt="телефон" /><?=$phone?> </a>
                            <button class="styled-bnt modal-btn btn-view-call">Заказать звонок</button>
                        </div>
                    </div>
                </div>
            </section>
            <!--баннер-->
            <section class="main-banner">
                <div class="container">
                    <div class="main-wrapper">
                        <!--описание на баннере-->
                        <div class="main-block banner-description">
                            <div class="banner-desc">
                                <div class="title"><?=$header_big_title?></div>
                                <div class="desc"><?=$header_small_title?></div>
                            </div>
                            <!--преимущества на баннере-->
                            <div class="banner-advantages">
                                <div class="advan-block">
                                    <div class="icon-block"><img src="<?=get_template_directory_uri()?>/img/mb-adv-icon1.png" alt="Собственное производство" /></div>
                                    <div class="desc-block">
                                        <p>Собственное</p>
                                        <p>производство</p>
                                    </div>
                                </div>
                                <div class="advan-block">
                                    <div class="icon-block"><img src="<?=get_template_directory_uri()?>/img/mb-adv-icon2.png" alt="Доставка по всему миру" /></div>
                                    <div class="desc-block">
                                        <p>Доставка</p>
                                        <p>по всему миру</p>
                                    </div>
                                </div>
                                <div class="advan-block">
                                    <div class="icon-block"><img src="<?=get_template_directory_uri()?>/img/mb-adv-icon3.png" alt="Выбор звезд" /></div>
                                    <div class="desc-block">
                                        <p>Выбор</p>
                                        <p>звезд</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--форма на баннере-->
                        <div class="main-block banner-form">
                            <div class="form-wrapper styled-form">
                                <div class="form-hd">Оставить <br/><span>заявку</span></div>
                                <form action="order_pool" autocomplete="off" class="validating">
                                    <div class="form-block name">
                                        <input type="text" placeholder="Ваше имя" name="name" required pattern="[^0-9]+$"/>
                                    </div>
                                    <div class="form-block phone">
                                        <input type="text" placeholder="Ваш телефон" name="phone" required pattern="^[ 0-9]+$" />
                                    </div> 
                                    <div class="form-block city">
                                        <input type="text" placeholder="Ваш город"  name="city" required  pattern="[^0-9]+$"/>
                                    </div>
                                    <div class="form-block promo">
                                        <input type="text" class="promocode" name="promocode" data-type="" placeholder="Ваш ПРОМОКОД" />
                                    </div>
                                    <button class="styled-btn1 apply__promo">применить промокод</button>
                                    <div class="form-block">
                                        <div class="form-block-name">Выбрать размер бассейна:</div>
                                        <?php $i=11; foreach ($pools as $pool) {?>
                                            <input type="radio" name="size" class="radio" id="size<?=$i?>" <?=($i==11)?'checked':'';?> value="<?=$pool['size']?>" data-price="<?php price_value($pool['price'], $pool['sale_price'])?>"/>
                                            <label for="size<?=$i?>"><?=$pool['size']?> см</label>
                                        <?php $i++;}?>
                                    </div>
                                    <div class="form-block price">
                                        <div class="base-price"></div>
                                        <div class="price-change"><?php price_value($pools[0]['price'], $pools[0]['sale_price'])?></div>
                                        <input type="hidden" name="order-price" class="order-price" value="<?php price_value($pools[0]['price'], $pools[0]['sale_price'])?>">
                                        <input type="hidden" data-name="price" value="<?php price_value($pools[0]['price'], $pools[0]['sale_price'])?>">
                                        <input type="hidden" data-name="sale" data-type="">
                                        <div>руб.</div>
                                    </div>
                                    <button type="submit" class="styled-btn1">Заказать бассейн</button>
                                </form>
                                <div class="form-subtitle"><?=$header_under_recive_pool?></div>
                                <a href="<?=$privacy?>" class="form-pol">Политика конфиденциальности</a>
                            </div>
                            <div class="clearfix"></div>
                            <button type="button" class="styled-btn2 btn-view-pay">Оплатить</button>
                        </div>
                        <!--кнопки-->
                        <div class="wrap-header-btn">
                            <button class="styled-btn1 btn__order-pool">Заказать бассейн</button>
                            <button type="submit" class="styled-btn1 btn-view">Заказать бассейн</button>
                            <button type="button" class="styled-btn2 btn-view-pay">Оплатить</button>
                        </div>
                        
                        <div class="mb-ball ball1"><img src="<?=get_template_directory_uri()?>/img/mb-ball1.png" alt="ball1" /></div>
                        <div class="mb-ball ball2"><img src="<?=get_template_directory_uri()?>/img/mb-ball2.png" alt="ball2" /></div>
                        <div class="mb-ball ball3"><img src="<?=get_template_directory_uri()?>/img/mb-ball3.png" alt="ball3" /></div>
                    </div>
                </div>
            </section>
        </header>