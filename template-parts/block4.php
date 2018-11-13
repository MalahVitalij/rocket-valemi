<?php

global $fpid;

$title = get_field('block_4_title');
$desc = get_field('block_4_desc');
$points = get_field('block_4_points');

?>
<!--состав материалов-->
<section class="main-compound" id="main-compound">
    <a name="block4"></a>
    <div class="container">
        <div class="section-side-title right-side p-side">Экологично</div>
        <div class="sec-title sec-p"><?=$title?></div>
        <div class="sec-subtitle"><?=$desc?></div>
        <div class="comp-wrapper">
            <?php foreach($points as $point){?>
            
                <div class="material">
                    <div class="img-block"><img src="<?=$point['image']['sizes']['block4_points']?>" alt="<?=$points['title']?>" /></div>
                    <div class="wrap-mat-title">
                        <div class="title"><?=$point['title']?></div>
                        <div class="desc"><?=$point['desc']?></div>
                    </div>
                </div>
            
            <?php } ?>
        </div>
    </div>
</section>