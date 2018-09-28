<?php get_header(); ?>

<main class="container-fluid content">
    <section class="main-advantages">
        <div class="container">
            <div class="sec-title sec-p"><?php the_title();?></div>
            <div class="main-wrapper advan-slider">

                <?php if(have_posts()) : 

                    while(have_posts()) : the_post(); ?>

                        <?php the_content();?>

                    <?php endwhile; ?>

                <?php endif; ?>

            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>