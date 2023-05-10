<?php get_header(); ?>
<div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="post__content">

                <?php the_content(); ?>

                <div class="articles">
                    <!-- <div class="articles col-12 col-lg-4"> -->
                        <h4>Sur le même sujet</h4>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/image39.png" alt="">
                        <p>Titre de l'article</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/image39.png" alt="">
                        <p>Titre de l'article</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/image39.png" alt="">
                        <p>Titre de l'article</p>
                    <!-- </div> -->
                </div>
            </div>

    <?php endwhile;
    endif; ?>
</div>

<?php get_footer(); ?>