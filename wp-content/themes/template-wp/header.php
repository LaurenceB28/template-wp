<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <title>template-wp</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="site__header">
        <a class="navbar-brand" id="logo" href="<?php echo home_url('/'); ?>">
            <img id="brand" src="<?php echo get_template_directory_uri(); ?>/img/image 45.png" alt="logo"></a>
        <?php wp_nav_menu(array('theme_location' => 'main')); ?>
        <img id="femmesurplage" src="<?php echo get_template_directory_uri(); ?>/img/femmesurplage.png" alt="">
    </header>
