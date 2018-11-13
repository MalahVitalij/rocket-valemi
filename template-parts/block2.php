<?php
global $fpid;
$title = get_field('block_2_title', $fpid);
$desc = get_field('block_2_desc', $fpid);
$stars = get_field('block_2_stars', $fpid);
?>
<!--клиенты-->
<section id="main-clients" class="main-clients">
    <a name="block2"></a>
    <div class="container">
    <div class="section-side-title right-side w-side">Наши клиенты</div>
    <div class="sec-title sec-w"><?=$title?></div>
    <div class="sec-subtitle w-subtitle"><?=$desc?></div>
        <div class="sec-bg-title">Звезды</div>
        <div class="main-wrapper clients-carousel">

            <?php foreach($stars as $star){
                
            $name = $star['name'];
            $image = $star['image'];
            $link = $star['link'];

                ?>
                <div class="slide">
                    <div class="clients-block">
                        <div class="img-wrapper">
                            <div class="img-block">
                            <a href="<?=$link['url']?>" target="<?=$link['target']?>">
                                <img src="<?=$image['sizes']['star_image']?>" alt="<?=$link['title']?>" />
                            </a>
                            </div>
                            <a href="<?=$link['url']?>"></a>
                        </div>
                        <div class="client-name">
                            <a href="<?=$link['url']?>"><?=$link['title']?></a>
                        </div>
                        <div class="client-post">российская актриса кино и телевидения</div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>