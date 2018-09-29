<?php 

global $fpid;

$title = get_field('block_5_title', $fpid);
$desc = get_field('block_5_desc', $fpid);
$text = get_field('block_5_text', $fpid);
$pools = get_field('types', options);
$bubbles = get_field('bubbles', options);

$bubbles_6 = array_slice($bubbles, 0, 6);
$bubbles_last = array_slice($bubbles, 6, count($bubbles));

?>
<!--цветовая гамма-->
<section class="main-colors-scheme" id="catalog">
    <div class="container">
    <div class="section-side-title left-side p-side">Большой выбор</div>
    <div class="sec-title sec-p"><?=$title?></div>
    <div class="sec-subtitle"><?=$desc?></div>
    <div class="scheme-wrapper">
        <div class="colors-wrapper">
                <div class="pull-wrapper">
                    <div class="pull-bg"><img src="<?=get_template_directory_uri()?>/img/pull-bg.png" alt="Бассейн" /></div>
                    <div class="block-title">Цвет сухого бассейна:</div>
                    <div class="pull-color">
                        <?php foreach($pools as $pool){?>
                        
                            <div class="color">
                                <div class="img-block"><img src="<?=$pool['image']['sizes']['pool_size']?>" alt="<?=$pool['color_name']?>" /></div>
                                <div class="title"><?=$pool['color_name']?></div>
                            </div>
                        
                        <?php } ?>
                    </div>
                    <div class="color-ball ball1"><img src="<?=get_template_directory_uri()?>/img/pull-ball1.png" alt="ball1" /></div>
                    <div class="color-ball ball2"><img src="<?=get_template_directory_uri()?>/img/pull-ball2.png" alt="ball2" /></div>
                    <div class="color-ball ball3"><img src="<?=get_template_directory_uri()?>/img/pull-ball3.png" alt="ball3" /></div>
                    <div class="color-ball ball4"><img src="<?=get_template_directory_uri()?>/img/pull-ball4.png" alt="ball4" /></div>
                    <div class="color-ball ball5"><img src="<?=get_template_directory_uri()?>/img/pull-ball5.png" alt="ball5" /></div>
                </div>
                
        </div>
        <div class="wrap-balls">
                <div class="balls-wrapper">
                    <div class="check-ball">
                        <div class="block-title">Цвет шариков:</div>
                        <div class="block-desc">Вы можете воспользоваться одним из предложенных комплектов шаров или же собрать комплект самим!</div>
                        <div class="check-ball-wrapper">
                        <?php foreach($bubbles_6 as $bubble){?>
                            <div class="ball"><img src="<?=$bubble['image']['sizes']['bubble']?>" alt="<?=$bubble['title']?>" /></div>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="checked-ball">
                        <div class="img-block"><img src="<?=$bubbles[0]['image']['sizes']['bubble']?>" alt="<?=$bubbles[0]['title']?>" /></div>
                        <div class="desc"><?=$bubbles[0]['title']?></div>
                    </div>
                </div>
                <div class="bottom check-ball-wrapper">
                    <?php foreach($bubbles_last as $bubble){?>
                        <div class="ball"><img src="<?=$bubble['image']['sizes']['bubble']?>" alt="<?=$bubble['title']?>" /></div>
                    <?php } ?>
                </div>
                <div class="bottom check-ball-wrapper-760">
                    <div class="check-ball-760">
                        <?php foreach($bubbles as $bubble){?>
                            <div class="ball"><img src="<?=$bubble['image']['sizes']['bubble']?>" alt="<?=$bubble['title']?>" /></div>
                        <?php } ?>
                    </div>
                </div>
        </div>

        <div class="wrap-balls-form">
                
                <div class="form-wrapper ">
                    <div class="form-hd">Сделать<span>заказ</span></div>
                    <form class="form-760">
                        <div class="form-block-wrap form-block-wrap-1">
                        <div class="form-block">                                        
                            <div class="form-block-name">Выбрать размер бассейна:</div>
                            <input type="radio" name="size" class="radio" id="size3" checked="" data-price="4343">
                            <label for="size3">90 см</label>
                            <input type="radio" name="size" class="radio" id="size4" data-price="2222">
                            <label for="size4">120 см</label>
                        </div>
                        <div class="form-block">
                            <div class="form-block-name">Выбрать цвет бассейна:</div>
                            <span data-object="img-block" class="main__form-select-wrap">
                                    <input class="main__form-select" readonly="" type="text" placeholder="<?=$pools[0]['color_name']?>" value="">
                                    <span class="main__form-submenu">
                                        <?php foreach($pools as $pool){?>
                                            <span><?=$pool['color_name']?></span>
                                        <?php } ?>
                                    </span>
                            </span>
                        </div>
                        </div>
                        <div class="form-block-wrap form-block-wrap-2">
                        <div class="form-block">
                            <div class="form-block-name">Выбрать комплект шаров:</div>
                            <span data-object="ball" class="main__form-select-wrap form-block">
                                    <input class="main__form-select" readonly="" type="text" placeholder="<?=$bubbles[0]['title']?>" value="">
                                    <span class="main__form-submenu">
                                        <?php foreach($bubbles as $bubble){?>
                                            <span><?=$bubble['title']?></span>
                                        <?php } ?>
                                    </span>
                            </span>
                        </div>
                        <div class="form-block promo">
                            <input type="text" placeholder="Ваш ПРОМОКОД">
                        </div>
                        <div class="form-block check">
                            <input type="checkbox" id="check">
                            <label for="check">Горка нужна</label>
                        </div>
                        <div class="form-block price">
                            <div>Цена:</div>
                            <div class="price-change">5599</div>
                            <div>руб.</div>
                        </div>
                        </div>
                        <div class="form-block-wrap form-block-wrap-3">
                        <button type="submit" class="catalog-form-mobile-btn">Заказать бассейн</button>
                        <div class="form-subtitle">Мы перезвоним в течении 15 минут</div>
                        <a href="#" class="form-pol">Политика конфиденциальности</a>
                        </div>
                    </form>

                </div>

        </div>
        
        <div class="colors-form">
                <div class="form-wrapper ">
                    <div class="form-hd">Сделать<span>заказ</span></div>
                    <form class="form-760">
                        <div class="form-block-wrap form-block-wrap-1">
                        <div class="form-block">                                        
                            <div class="form-block-name">Выбрать размер бассейна:</div>
                            <input type="radio" name="size" class="radio" id="size3" checked data-price="4343"/>
                            <label for="size3">90 см</label>
                            <input type="radio" name="size" class="radio" id="size4" data-price="2222"/>
                            <label for="size4">120 см</label>
                        </div>
                        <div class="form-block">
                            <div class="form-block-name">Выбрать цвет бассейна:</div>
                            <span  data-object='img-block' class="main__form-select-wrap">
                                    <input class="main__form-select" readonly="" type="text" placeholder="<?=$pools[0]['color_name']?>" value="">
                                    <span class="main__form-submenu">
                                        <?php foreach($pools as $pool){?>
                                            <span><?=$pool['color_name']?></span>
                                        <?php } ?>
                                    </span>
                            </span>
                        </div>
                        </div>
                        <div class="form-block-wrap form-block-wrap-2">
                        <div class="form-block">
                            <div class="form-block-name">Выбрать комплект шаров:</div>
                            <span data-object='ball' class="main__form-select-wrap form-block">
                                    <input class="main__form-select" readonly="" type="text" placeholder="<?=$bubbles[0]['title']?>" value="">
                                    <span class="main__form-submenu">
                                        <?php foreach($bubbles as $bubble){?>
                                            <span><?=$bubble['title']?></span>
                                        <?php } ?>
                                    </span>
                            </span>
                        </div>
                        <div class="form-block promo">
                            <input type="text" placeholder="Ваш ПРОМОКОД" />
                        </div>
                        <div class="form-block check">
                            <input type="checkbox" id="check" />
                            <label for="check">Горка нужна</label>
                        </div>
                        <div class="form-block price">
                            <div>Цена:</div>
                            <div class="price-change">5599</div>
                            <div>руб.</div>
                        </div>
                        </div>
                        <div class="form-block-wrap form-block-wrap-3">
                        <button type="submit" class="styled-btn1 blue btn-view">Заказать бассейн</button>
                        <div class="form-subtitle">Мы перезвоним в течении 15 минут</div>
                        <a href="#" class="form-pol">Политика конфиденциальности</a>
                        </div>
                    </form>

                </div>
        </div>
    </div>
    </div>
</section>