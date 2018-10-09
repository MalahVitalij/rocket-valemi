<?php
global $fpid;
$address = get_field('address', $fpid);
$phone = get_field('phone', $fpid);
$email = get_field('email', $fpid);
$pools = get_field('pool_sizes', options);
$pools_types = get_field('types', options);
$privacy = get_field('privacy', $fpid);
$header_under_recive_pool = get_field('header_under_recive_pool', $fpid);
$bubbles = get_field('bubbles', options);
$gorka_price = get_field('gorka_price', options);
?>
        <footer class="container-fluid footer">
            <section class="contacts">
                <div class="container">
                    <div class="sec-title sec-p">Контакты</div>
                    <div class="contacts-wrapper">
                        <div class="contact-block">
                            <div class="title">Наш адрес:</div>
                            <div class="desc"><?=$address?></div>
                        </div>
                        <div class="contact-block">
                            <a href="tel:<?=preg_replace('/[^0-9]/', '', $phone);?>" class="phone"><?=$phone?></a>
                        </div>
                        <div class="contact-block">
                            <div class="title">Наша электронная почта:</div>
                            <a href="mail:<?=$email?>"><?=$email?></a>
                        </div>
                    </div>
                    <a href="<?=$privacy?>" class="politics">Политика конфиденциальности</a>
                    <div class="ft-line"></div>
                </div>
            </section>
        </footer>
        <svg width="0" height="0">
            <defs>
                <clipPath id="clip-triangle" clipPathUnits="objectBoundingBox">
                    <polygon points="0.1 0, 1 0, 1 1, 0.1 1, 0 0.5" />
                </clipPath>
            </defs>
        </svg>

            <div class="modal-overlay modal-overlay-order">     
                <div class="main-block popup-wrap">
                    <div class="form-wrapper styled-form popup-make-order">
                        <div class="form-hd">Сделать<br/><span>заказ</span></div>
                        <form action="order_pool_big" class="validating" autocomplete="off">
                            <div class="form-block name">
                                <input type="text" name="name" placeholder="Ваше имя" required pattern="[^0-9]+$" />
                            </div>
                            <div class="form-block phone">
                                <input type="text" name="phone" placeholder="Ваш телефон" required pattern="^[ 0-9]+$"/>
                            </div> 
                            <div class="form-block city">
                                <input type="text" name="city" placeholder="Ваш город" required pattern="[^0-9]+$" />
                            </div>
                            <div class="form-block price">
                                <div>Цена:</div>
                                <div class="prhtml"><?php price_value($pools[0]['price'], $pools[0]['sale_price'])?></div>
                                <div>руб.</div>
                            </div>
                            <button type="submit" class="styled-btn1">Заказать бассейн</button>
                        </form>
                    </div>
                    <a href="#" class="btn-close_view"><img src="<?=get_template_directory_uri()?>/img/close-btn-popup.png" alt="img"></a>
                    <div class="clearfix"></div>
                </div>
            </div>
            
            <div class="modal-overlay modal-overlay-order-call">  
                <!-- <div class="popup-wrap-bg"> -->
                    <div class="main-block popup-wrap">
                    <div class="form-wrapper styled-form popup-make-order">
                        <div class="form-hd">Заказать<br/><span>звонок</span></div>
                        <form class="validating" action="zakaz_zvonka">
                            <div class="form-block name">
                                <input type="text" placeholder="Ваше имя" name="name" required pattern="[^0-9]+$" />
                            </div>
                            <div class="form-block phone">
                                <input type="text" placeholder="Ваш телефон" name="phone" required pattern="^[ 0-9]+$"/>
                            </div>
                            <button type="submit" class="styled-btn1">Заказать звонок</button>
                            <div class="form-subtitle"><?=$header_under_recive_pool?></div>
                            <a href="<?=$privacy?>" class="form-pol">Политика конфиденциальности</a>
                        </form>
                    </div>
                    <a href="#" class="btn-close_view"><img src="<?=get_template_directory_uri()?>/img/close-btn-popup.png" alt="img"></a>
                   <!-- <div class="my-wishes-item_popap"><span>Товар добавлен в корзину</span></div> -->
                    <div class="clearfix"></div>
                    </div>
                <!-- </div> -->
            </div>
            
            <div class="modal-overlay modal-overlay-order-pool">     
                <div class="main-block popup-wrap">
                    <div class="form-wrapper styled-form popup-make-order">
                        <div class="form-hd">Сделать<br/><span>заказ</span></div>
                        <form action="order_pool" class="validating">
                            <div class="form-block name">
                                <input type="text" placeholder="Ваше имя" name="name" required pattern="[^0-9]+$" />
                            </div>
                            <div class="form-block phone">
                                <input type="text" placeholder="Ваш телефон" name="phone" required pattern="^[ 0-9]+$"/>
                            </div> 
                            <div class="form-block city">
                                <input type="text" placeholder="Ваш город" name="city" required pattern="[^0-9]+$" />
                            </div>
                            <div class="form-block promo">
                                <input type="text" placeholder="Ваш ПРОМОКОД">
                            </div>
                            <button class="styled-btn1 apply__promo">применить промокод</button>
                            <div class="form-block price">
                                <div>Цена от:</div>
                                <div><?php price_value($pools[0]['price'], $pools[0]['sale_price'])?></div>
                                <div>руб.</div>
                            </div>
                            <button type="submit" class="styled-btn1">Заказать бассейн</button>
                        </form>
                    </div>
                    <a href="#" class="btn-close_view"><img src="<?=get_template_directory_uri()?>/img/close-btn-popup.png" alt="img"></a>
                    <div class="clearfix"></div>
                </div>
            </div>
            
            <div class="modal-overlay modal-overlay-order-hill">     
                <div class="main-block popup-wrap">
                    <div class="form-wrapper styled-form popup-make-order">
                        <div class="form-hd">Сделать<br/><span>заказ</span></div>
                        <form class="validating" action="order_hill">
                            <div class="form-block name">
                                <input type="text" placeholder="Ваше имя" name="name" required pattern="[^0-9]+$" />
                            </div>
                            <div class="form-block phone">
                                <input type="text" placeholder="Ваш телефон" name="phone" required pattern="^[ 0-9]+$"/>
                            </div> 
                            <div class="form-block city">
                                <input type="text" placeholder="Ваш город" name="city" required pattern="[^0-9]+$" />
                            </div>
                            <div class="form-block promo">
                                <input type="text" placeholder="Ваш ПРОМОКОД">
                                <button class="styled-btn1 apply__promo">применить промокод</button>
                            </div>
                            <div class="form-block price">
                                <div>Цена от:</div>
                                <div><?php the_field('gorka_price', options)?></div>
                                <div>руб.</div>
                            </div>
                            <button type="submit" class="styled-btn1">Заказать горку</button>
                        </form>
                    </div>
                    <a href="<?=$privacy?>" class="btn-close_view"><img src="<?=get_template_directory_uri()?>/img/close-btn-popup.png" alt="img"></a>
                    <div class="clearfix"></div>
                </div>
            </div>
            
            <div class="modal-overlay modal-overlay-orderPay">     
                <div class="main-block popup-wrap">
                    <div class="form-wrapper styled-form popup-make-order">
                        <div class="form-hd">оплатить<br/><span>заказ</span></div>
                        <form class="paypal" method="get" autocomplete="off">
                            <div class="form-block name">
                                <input type="text" placeholder="ФИО" required pattern="[^0-9]+$" />
                            </div>
                            <div class="form-block phone">
                                <input type="text" placeholder="Ваш телефон" required pattern="^[ 0-9]+$"/>
                            </div> 
                            <div class="form-block city">
                                <input type="text" placeholder="Ваш город" required pattern="[^0-9]+$" />
                            </div>
                            <div class="form-block">
                                <div class="form-block-name">Выбрать цвет бассейна:</div>
                                <span class="main__form-select-wrap form-block">
                                    <input class="main__form-select" readonly="" type="text" name="pool" placeholder="<?=$pools_types[0]['color_name']?>" value="<?=$pools_types[0]['color_name']?>">
                                    <span class="main__form-submenu" style="display: none;">
                                        <?php foreach($pools_types as $pool){?>
                                            <span><?=$pool['color_name']?></span>
                                        <?php } ?>
                                    </span> 
                                </span>
                            </div>
                            <div class="form-block">
                                <div class="form-block-name">Выбрать комплект шаров:</div>
                                <span class="main__form-select-wrap form-block">
                                    <input class="main__form-select" readonly="" type="text" placeholder="<?=$bubbles[0]['title']?>" value="<?=$bubbles[0]['title']?>">
                                    <span class="main__form-submenu" style="display: none;">
                                        <?php foreach($bubbles as $bubble){?>
                                            <span><?=$bubble['title']?></span>
                                        <?php } ?>
                                    </span>
                                </span>
                            </div>
                            <div class="form-block">
                                <div class="form-block-name">Выбрать размер бассейна:</div>
                                <?php $i=5; foreach ($pools as $pool) {?>
                                    <input type="radio" name="size" class="radio" id="size<?=$i?>" <?=($i==5)?'checked':'';?> data-price="<?php price_value($pool['price'], $pool['sale_price'])?>"/>
                                    <label for="size<?=$i?>"><?=$pool['size']?> см</label>
                                <?php $i++;}?>
                            </div>
                            <div class="form-block check-modal">
                                <input type="checkbox" id="check-modal" data-price="<?=$gorka_price?>">
                                <label for="check-modal">Горка нужна</label>
                            </div>
                            <div class="form-block promo">
                                <input type="text" name="promocode" class="promocode" placeholder="Ваш ПРОМОКОД" />
                                <button class="styled-btn1 apply__promo">применить промокод</button>
                            </div>
                            <div class="form-block price">
                                <div>Цена от:</div>
                                <div class='price-change'><?php price_value($pools[0]['price'], $pools[0]['sale_price'])?></div>
                                <input type="hidden" name="order-price" class="order-price" value="<?php price_value($pools[0]['price'], $pools[0]['sale_price'])?>">
                                <input type="hidden" data-name="price" value="<?php price_value($pools[0]['price'], $pools[0]['sale_price'])?>">
                                <input type="hidden" data-name="sale">
                                <div>руб.</div>
                            </div>
                            <button type="submit" class="styled-btn1">оплатить</button>
                        </form>
                    </div>
                    <a href="<?=$privacy?>" class="btn-close_view"><img src="<?=get_template_directory_uri()?>/img/close-btn-popup.png" alt="img"></a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_cart">
                <input type="hidden" name="upload" value="1">
                <input type="hidden" name="business" value="malah.vitalij-facilitator@gmail.com">
                <input type="hidden" name="item_name_1" value="Бассейн - цвет хаки">
                <input type="hidden" name="amount_1" value="5100">
                <input type="hidden" name="item_name_2" value="Шары - цвет синий">
                <input type="hidden" name="amount_2" value="0">
                <input type="hidden" name="item_name_3" value="Горка">
                <input type="hidden" name="amount_3" value="6500">
                <input type="hidden" name="currency_code" value="RUB">
            </form>           

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="<?=get_template_directory_uri()?>/js/slick.js"></script>
        <script src="<?=get_template_directory_uri()?>/js/bcode.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>