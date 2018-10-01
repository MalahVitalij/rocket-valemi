<?php 

global $fpid;

$title = get_field('block_10_title', $fpid);

$block_10_title_1 = get_field('block_10_title_1', $fpid);
$block_10_title_2 = get_field('block_10_title_2', $fpid);
$block_10_title_3 = get_field('block_10_title_3', $fpid);
$block_10_title_4 = get_field('block_10_title_4', $fpid);

$block_10_icon_1 = get_field('block_10_icon_1', $fpid);
$block_10_icon_2 = get_field('block_10_icon_2', $fpid);
$block_10_icon_3 = get_field('block_10_icon_3', $fpid);
$block_10_icon_4 = get_field('block_10_icon_4', $fpid);

$block_10_text_1 = get_field('block_10_text_1', $fpid);
$block_10_text_2 = get_field('block_10_text_2', $fpid);
$block_10_text_3 = get_field('block_10_text_3', $fpid);
$block_10_text_4 = get_field('block_10_text_4', $fpid);
?>
<!--доставка-->
<section class="main-delivery" id="paydel">
     <div class="container">
     <div class="section-side-title right-side">Доставка</div>
     <div class="hd-block">
          <div class="con-title"></div>
          <div class="sec-title sec-p"><?=$title?></div>
     </div>
     <div class="del-wrapper">
          <div class="del-block purp">
               <div class="title"><?=$block_10_title_1?></div>
               <div class="desc"><?=$block_10_text_1?></div>
               <img src="<?=$block_10_icon_1['url']?>" alt="" />
          </div>
          <div class="del-block red">
               <div class="title"><?=$block_10_title_2?></div>
               <div class="desc"><?=$block_10_text_2?></div>
               <img src="<?=$block_10_icon_1['url']?>" alt="" />
          </div>
          <div class="del-block yellow">
               <div class="title"><?=$block_10_title_3?></div>
               <div class="desc"><?=$block_10_text_3?></div>
               <img src="<?=$block_10_icon_1['url']?>" alt="" />
          </div>
          <div class="del-block purp">
               <div class="title"><?=$block_10_title_4?></div>
               <div class="desc"><?=$block_10_text_4?></div>
               <img src="<?=$block_10_icon_1['url']?>" alt="" />
          </div>
          <div class="map"><img src="<?=get_template_directory_uri()?>/img/map.png" alt="map" /></div>
     </div>
     </div>
</section>