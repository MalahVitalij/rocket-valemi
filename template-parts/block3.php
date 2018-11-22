<?php 

global $fpid;

$title = get_field('block_3_title');
$points = get_field('block_3_points', $fpid);
$colors = ['pink', 'purp', 'orng', 'orng', 'purp', 'pink'];
?>
<!--полезность-->
<section class="main-userfulness">
    <a name="block3"></a>
    <div class="container">
        <div class="section-side-title left-side p-side">Полезно</div>
        <div class="sec-title sec-p"><?=$title?></div>
        <div class="userfulness-center">

            <?php foreach($points as $key => $val){?>
            
                <div class="use-block <?=$colors[$key]?>">
                    <div class="img-block">
                        <img src="<?=$val['image']['sizes']['block3_points']?>" alt="<?=$val['title']?>" />
                    </div>
                    <div class="use-block-desc">
                        <div class="title">
                            <h5><?=$val['title']?></h5>
                        </div>
                        <div class="desc"><?=$val['desc']?></div>
                    </div>
                </div>

            <?php } ?>
                
        </div>
    </div>
    <a href="#main-compound" class="scroll-to"></a>
</section>