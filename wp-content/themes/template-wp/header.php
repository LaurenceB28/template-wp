<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="wp-content/themes/template-wp/assets/css/style.css">
    <title>template-wp</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="site__header">
        <a class="navbar-brand" id="logo" href="<?php echo home_url('/'); ?>http://template-wp.localhost/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/image 45.png" alt="logo"></a>
        <?php wp_nav_menu(array('theme_location' => 'main')); ?>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'main',
                'container' => 'ul', // afin d'éviter d'avoir une div autour 
                'menu_class' => 'site__header__menu', // ma classe personnalisée 
            )
        );
        ?>
        <img src="wp-content/themes/template-wp/assets/img/istockphoto-1207798556-170667a 1.png" alt="">
    </header>