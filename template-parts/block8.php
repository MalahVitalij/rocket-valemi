<?php 

global $fpid;

$title = get_field('block_8_title', $fpid);

$ques1 = get_field('ques_1', $fpid);
$ques2 = get_field('ques_2', $fpid);
$ques3 = get_field('ques_3', $fpid);

$ans1 = get_field('ans_1', $fpid);
$ans2 = get_field('ans_2', $fpid);
$ans3 = get_field('ans_3', $fpid);

?>

<!--пояснения-->
<section class="main-example">
     <div class="container">
     <div class="example-wrapper">
          <div class="example-block left purp">
               <div class="ex-ask">
                    <div class="photo-block"><img src="<?=get_template_directory_uri()?>/img/user-photo1.png" alt="user photo 1" /></div>
                    <div class="desc"><?=$ques1?></div>
               </div>
               <div class="ex-ans">
                    <div class="desc">
                         <?=$ans1?>
                    </div>
                    <div class="ans-img"><img src="<?=get_template_directory_uri()?>/img/ans-img1.png" alt="photo" /></div>
               </div>
          </div>
          <div class="example-block right pink">
               <div class="ex-ask">
                    <div class="photo-block"><img src="<?=get_template_directory_uri()?>/img/user-photo2.png" alt="user photo 2" /></div>
                    <div class="desc"><?=$ques2?></div>
               </div>
               <div class="ex-ans">
                    <div class="desc">
                         <?=$ans2?>
                    </div>
                    <div class="ans-img"><img src="<?=get_template_directory_uri()?>/img/ans-img2.png" alt="photo" /></div>
               </div>
          </div>
          <div class="example-block left purp wash">
               <div class="ex-ask">
                    <div class="photo-block"><img src="<?=get_template_directory_uri()?>/img/user-photo3.png" alt="user photo 3" /></div>
                    <div class="desc"><?=$ques3?></div>
               </div>
               <div class="ex-ans">
                    <div class="desc"><?=$ans3?></div>
                    <div class="ans-img"><img src="<?=get_template_directory_uri()?>/img/ans-img3.png" alt="photo" /></div>
               </div>
          </div>
     </div>
     </div>
</section>