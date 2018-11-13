<?php 

global $fpid;

$title = get_field('block_6_title', $fpid);
$pools = get_field('pool_sizes', options);
$pool1 = $pools[0];
$pool2 = $pools[1]; 



?>
<!--комплект-->
<section class="main-set" id="main-set">
     <a name="block6"></a>
     <div class="container">
     <div class="section-side-title right-side w-side">Купить бассейн</div>
     <div class="sec-title sec-w"><?=$title?></div>
     <div class="sec-bg-title">Заказать</div>
          <div class="set-wrapper">
               <div class="set-block set-block-2">
                    <div class="title">Бассейн <?=$pool1['size']?> см</div>
                    <ol class="custom-counter">
                    <?php foreach ($pool1['pool_desc'] as $char) { ?>
                         <li><?=$char['char']?></li>
                    <?php }?>
                    </ol>
                    <div class="price-wrapper">
                         <?php price_html($pool1['price'], $pool1['sale_price']);?>
                    </div>
                    <button type="submit" class="styled-btn1 btn-view-pool" data-size="<?=$pool1['size']?>" data-price="<?php price_value($pool1['price'], $pool1['sale_price']);?>">Заказать бассейн</button>
               </div>
               <div class="set-block center set-block-1">
                    <img src="<?=get_template_directory_uri()?>/img/set-main.png" alt="Комплект" />
                    <img src="<?=get_template_directory_uri()?>/img/set-block-img-1.png" class="set-block-number set-block-number-1" alt="1">
                    <img src="<?=get_template_directory_uri()?>/img/set-block-img-2.png" class="set-block-number set-block-number-2" alt="2">
               </div>
               <div class="set-block set-block-3">
                    <div class="title">Бассейн <?=$pool2['size']?>см</div>
                    <ol class="custom-counter">
                    <?php foreach ($pool2['pool_desc'] as $char) { ?>
                         <li><?=$char['char']?></li>
                    <?php }?>
                    </ol>
                    <div class="price-wrapper">
                         <?php price_html($pool2['price'], $pool2['sale_price']);?>
                    </div>
                    <button type="submit" class="styled-btn1 btn-view-pool" data-size="<?=$pool2['size']?>" data-price="<?php price_value($pool2['price'], $pool2['sale_price']);?>">Заказать бассейн</button>
               </div>
          </div>
     </div>
</section>
