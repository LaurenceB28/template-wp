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



register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );