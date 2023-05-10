<?php get_header(); ?>
<div class="container">
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article class="post col-12 col-lg-4">


                    <?php the_post_thumbnail(); ?>
                    <h2><?php the_title(); ?></h2>

                    <p class="post__meta">
                        Publié le <?php the_time(get_option('date_format')); ?>
                        par <?php the_author(); ?> • <?php comments_number(); ?>
                    </p>

                    <?php the_excerpt(); ?>

                    <p>
                        <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
                    </p>
                </article>
        <?php endwhile;
        endif; ?>
    </div>
</div>

<?php get_footer(); ?>


<!-- <div class="container-photo">
    <div class="article">
        <img src="wp-content/themes/template-wp/assets/img/image 27.png" alt="">
    </div>
    <div class="article">
        <img src="wp-content/themes/template-wp/assets/img/image 30.png" alt="">
    </div>
    <div class="article">
        <img src="wp-content/themes/template-wp/assets/img/image 33.png" alt="">
    </div>
    <div class="article">
        <img src="wp-content/themes/template-wp/assets/img/image 36.png" alt="">
    </div>
    <div class="article">
        <img src="wp-content/themes/template-wp/assets/img/image 39.png" alt="">
    </div>
    <div class="article">
        <img src="wp-content/themes/template-wp/assets/img/image 42.png" alt="">
    </div>
</div> -->