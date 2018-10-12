<?php
global $fpid;
$title = get_field('block_1_title', $fpid);

$points = get_field('block_1_points', $fpid);

?>

<!--преимущества-->
<section class="main-advantages">
    <div class="container">

        <div class="sec-title sec-p"><?=$title?></div>
        <div class="main-wrapper advan-slider">

            <?php foreach($points as $item){?>
                <div class="advan-block slide">
                        <div class="icon-block"><img src="<?=$item['image']['sizes']['block1_points']?>" alt="<?=$item['title']?>" /></div>
                        <div class="desc-block">
                            <p><?=$item['title']?></p>
                            <p><?=$item['comment']?></p>
                        </div>
                </div>
            <?php } ?>
        
        </div>

    </div>
    <a href="#main-clients" class="scroll-to"></a>
</section>