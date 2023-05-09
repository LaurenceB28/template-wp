<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_title(); ?></h1>

        <?php the_content(); ?>

<?php endwhile;endif; ?>

<?php get_footer(); ?>


<!-- <main class="containerPhotoText">
    <div class="div1">
        <img src="wp-content/themes/template-wp/assets/img/tom-grimbert-661519-unsplash.png" class="card-img-top" alt="...">
    </div>
    <div class="div2">
        <h3>DECOUVREZ</h3>
        <h2>NOS PLUS BELLES DESTINATIONS</h2>
        <p class="descriptions">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div>

    <div class="div3">
        <h3>PARTEZ</h3>
        <h2>NOS PLUS BELLES DESTINATIONS</h2>
        <p class="descriptions">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div>
    <div class="div4">
        <img src="wp-content/themes/template-wp/assets/img/image 2.png" class="card-img-top" alt="...">
    </div>

    <div class="div5">
        <img src="wp-content/themes/template-wp/assets/img/bateaux.png" class="card-img-top" alt="...">
    </div>
    <div class="div6">
        <h3>VOYAGEZ</h3>
        <h2>NOS PLUS BELLES DESTINATIONS</h2>
        <p class="descriptions">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div>
</main>