<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed position-relative">
        <header id="header" role="banner" class="header">
            <div></div>
            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement" class="nav d-block">
                <?php wp_nav_menu(array('theme_location' => 'main-menu', 'link_before' => '<span itemprop="name" class="nav-link text-uppercase">', 'link_after' => '</span>', 'link_class')); ?>
                <!-- <div id="search"><?php get_search_form(); ?></div> -->
            </nav>
        </header>

        <div id="container">
            <main id="content" role="main" class="">