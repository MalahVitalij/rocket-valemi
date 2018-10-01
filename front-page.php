<?php 
get_header(); 
global $fpid;
?>
    <main class="container-fluid content">

        <?php for($i=1;$i<=11;$i++){
            if(get_field('display_block_'.$i,$fpid)){
                echo get_template_part('template-parts/block'.$i);
            }
        }?>

    </main>
<?php get_footer(); ?>