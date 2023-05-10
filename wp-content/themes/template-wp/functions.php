<?php 
function capitaine_register_assets() {

    wp_enqueue_script( 
        'capitaine', 
        get_template_directory_uri() . '/js/script.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );
    wp_enqueue_style( 
        'capitaine', 
        get_template_directory_uri() . '/css/style.css',
        array(), 
        '1.0'
    );
}

add_action( 'wp_enqueue_scripts', 'capitaine_register_assets' );

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );



register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

/*sidebar*/
register_sidebar( array(
	'id' => 'blog-sidebar',
	'name' => 'Blog',
) );

/*image mise en avant*/
add_theme_support( 'post-thumbnails' );
// Définir la taille des images mises en avant
set_post_thumbnail_size( 2000, 400, true );

// Définir d'autres tailles d'images
add_image_size( 'products', 800, 600, false );
add_image_size( 'square', 256, 256, false );