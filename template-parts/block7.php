<?php 

global $fpid;

$title = get_field('block_7_title', $fpid);
$desc = get_field('block_7_desc', $fpid);
$block_7_before_ul = get_field('block_7_before_ul', $fpid);
$block_7_ul_title = get_field('block_7_ul_title', $fpid);
$block_7_ul = get_field('block_7_ul', $fpid);
$gorka_image = get_field('gorka_image', options);
$gorka_price = get_field('gorka_price', options);
?>
<!--к комплекту-->
<section class="main-additional">
     <a name="block7"></a>
     <div class="container main-additional-wrap">
     <div class="section-side-title left-side p-side">Горка к бассейну</div>
     <div class="sec-title sec-p"><?=$title?></div>
     <div class="sec-subtitle"><?=$desc?></div>
     <div class="main-title"><?=$block_7_before_ul?></div>
     <div class="add-wrapper">
          <div class="add-img img1"><img src="<?=get_template_directory_uri()?>/img/add-img1.png" alt="фото детской горки" /></div>
          <div class="add-img img2"><img src="<?=$gorka_image['sizes']['block5_slider']?>" alt="детская горка" /></div>
          <div class="title"><?=$block_7_ul_title?></div>
          <ul class="custom-counter2">
               <?php foreach ($block_7_ul as $li) { ?>
                    <li><?=$li['point']?></li>
               <?php }?>
          </ul>
          <div class="add-price-wrapper">
               <div class="price">
                    <div>Цена:</div>
                    <div><?=$gorka_price?></div>
                    <div>руб.</div>
               </div>
               <button type="submit" class="styled-btn1 btn-view-hill" data-yatarget="zakazat-gorky">Заказать горку</button>
          </div>
          <div class="add-ball ball1"><img src="<?=get_template_directory_uri()?>/img/add-ball1.png" alt="ball1" /></div>
          <div class="add-ball ball2"><img src="<?=get_template_directory_uri()?>/img/add-ball2.png" alt="ball2" /></div>
          <div class="add-ball ball3"><img src="<?=get_template_directory_uri()?>/img/add-ball3.png" alt="ball3" /></div>
     </div>
     </div>
</section>