<?php 

global $fpid;

$title = get_field('block_9_title', $fpid);
$desc = get_field('block_9_title', $fpid);

$block_9_big_image = get_field('block_9_big_image', $fpid);
$block_9_text = get_field('block_9_text', $fpid);
$block_9_rm = get_field('block_9_rm', $fpid);
$block_9_insta_link = get_field('block_9_insta_link', $fpid);
$block_9_img_top = get_field('block_9_img_top', $fpid);
$block_9_img_bottom = get_field('block_9_img_bottom', $fpid);
$block_9_under_big_image = get_field('block_9_under_big_image', $fpid);
?>
<!--отзывы-->
<section class="main-reviews" id="reviews">
     <div class="container">
          <div class="sec-bg-title">Отзывы</div>
          <div class="hd-block">
               <div class="section-side-title left-side p-side">Отзывы о нас</div>
               <div class="con-title"><?=$title?></div>
               <div class="con-subtitle"><?=$desc?></div>
          </div>
          <div class="reviews-wrapper">
               <div class="review rev-img">
                    <div class="img-block"><img src="<?=$block_9_big_image['sizes']['rewies_big_photo']?>" alt="review photo" /></div>
                    <a href="#" class="view-all">Смотреть все отзывы</a>
               </div>
               <div class="review rev-desc">
                    <?=$block_9_text?>
                    <div class="desc-bottom">
                         <div class="name"><?=$block_9_insta_link['title']?></div>
                         <div class="inst-block">
                              <a href="<?=$block_9_insta_link['url']?>"><img src="<?=get_template_directory_uri()?>/img/inst-icon.png" alt="инстаграм" /><span></span></a>
                         </div>
                    </div>
               </div>
               <div class="review rev-images">
                    <div class="img-block"><img src="<?=$block_9_img_top['sizes']['rewies_small_photo']?>" alt="review photo 2" /></div>
                    <div class="img-block"><img src="<?=$block_9_img_bottom['sizes']['rewies_small_photo']?>" alt="review photo 3" /></div>
               </div>
          </div>
     </div>
</section>