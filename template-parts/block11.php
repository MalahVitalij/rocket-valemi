<?php 

global $fpid;

$privacy = get_field('privacy', $fpid);

$title = get_field('block_11_title', $fpid);
$desc = get_field('block_11_desc', $fpid);

$block_11_before_ul = get_field('block_11_before_ul', $fpid);
$block_11_ul = get_field('block_11_ul', $fpid);
$block_11_after_ul = get_field('block_11_after_ul', $fpid);

$header_under_recive_pool = get_field('header_under_recive_pool', $fpid);
$pools = get_field('pool_sizes', options);
?>
<!--форма заказа-->
<section class="main-order">
     <div class="container">
     <div class="section-side-title left-side w-side">Заказать</div>
     <div class="sec-title"><?=$title?><br>
          <span><?=$desc?></span>
     </div>
     <div class="order-wrapper">
          <div class="order-block order-desc">
               <div class="title"><?=$block_11_before_ul?></div>
               <ol class="custom-counter">
                    <?php foreach ($block_11_ul as $point) { ?>
                         <li><?=$point['point']?></li>
                    <?php }?>
               </ol>
              <b> <?=$block_11_after_ul?></b>
               <a href="<?=$privacy?>" class="politics">Политика конфиденциальности</a>
               <div class="styled-form order-desc-form">
                    <form>
                         <div class="form-block price">
                         <div>Цена от:</div>
                         <div class="price-change"><?php price_value($pools[0]['price'], $pools[0]['sale_price'])?></div>
                         <div>руб.</div>
                         </div>
                         <button type="submit" class="styled-btn1 btn-view">Заказать бассейн</button>
                    </form>
               </div>
               
          </div>
          <div class="order-block order-form styled-form">
               <form class="validating" action="order_pool" autocomplete="off">
                    <div class="form-block name">
                         <input type="text" placeholder="Ваше имя" name="name" required pattern="[^0-9]+$"/>
                    </div>
                    <div class="form-block phone">
                         <input type="text" placeholder="Ваш телефон" name="phone" required pattern="^[ 0-9]+$"/>
                    </div> 
                    <div class="form-block city">
                         <input type="text" placeholder="Ваш город" name="city" required pattern="[^0-9]+$" />
                    </div>
                    <div class="form-block promo">
                         <input type="text" name="promocode" class="promocode" placeholder="Ваш ПРОМОКОД" />
                         <button class="styled-btn1 apply__promo">применить промокод</button>
                    </div>
                    <div class="form-block">
                        <?php $i=1; foreach ($pools as $pool) {?>
                              <input type="radio" name="size" class="radio" id="size<?=$i?>" <?=($i==1)?'checked':'';?> value="<?=$pool['size']?>" data-price="<?php price_value($pool['price'], $pool['sale_price'])?>"/>
                              <label for="size<?=$i?>"><?=$pool['size']?> см</label>
                         <?php $i++;}?>
                    </div>
                    <div class="form-block price">
                         <div>Цена от:</div>
                         <div class='price-change'><?php price_value($pools[0]['price'], $pools[0]['sale_price'])?></div>
                         <input type="hidden" name="order-price" class="order-price" value="<?php price_value($pools[0]['price'], $pools[0]['sale_price'])?>">
                         <input type="hidden" data-name="price" value="<?php price_value($pools[0]['price'], $pools[0]['sale_price'])?>">
                         <input type="hidden" data-name="sale">
                         <div>руб.</div>
                    </div>
                    <button type="submit" class="styled-btn1">Заказать бассейн</button>
               </form>
               <div class="form-subtitle"><?=$header_under_recive_pool?></div>
          </div>
     </div>
     </div>
</section>