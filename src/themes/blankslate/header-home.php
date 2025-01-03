<?php $shop_page_id = wc_get_page_id('shop'); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed overflow-hidden position-relative">
        <header id="header" role="banner" class="header z-1 position-fixed w-100 ">
            <div></div>
            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement" class="nav d-block">
                <?php wp_nav_menu(array('theme_location' => 'main-menu', 'link_before' => '<span itemprop="name" class="nav-link text-uppercase">', 'link_after' => '</span>', 'link_class')); ?>
            </nav>
        </header>
        <div class="vh-100 vw-100 position-relative">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('full', array('class' => 'img-fluid object-fit-cover w-100 h-100 z-n1', 'itemprop' => 'image'));
            }
            ?>
            <div class="position-absolute start-50 translate-middle d-flex flex-column justify-content-center align-items-center zn-1 col-4" style="top: 40%;">
                <div class="d-flex flex-column align-items-center gap-5">
                    <div class="position-relative">
                        <h1 style="color: var(--custom-light)";>TRADE <br>
                            TRIBE</h1>
                        <img class="position-absolute start-50 top-50 translate-middle z-n1" src="http://localhost/wp-content/uploads/2025/01/Group-1.png" alt="scribble" />
                    </div>
                    <h5 style="color: var(--custom-light)" >CONQUER EVERY
                        <span class="p-1" style="background-color:var(--custom-primary)">
                            <span class="text-white">MOUNT</span>
                            <span class="position-relative">
                                <img src='http://localhost/wp-content/uploads/2025/01/Frame-46-1.png' alt='Frame-46' class='position-absolute top-50 translate-middle-y'>
                            </span>
                            <span class="text-white" style="margin-left: 2.3rem;">IN</span>
                        </span>
                    </h5>
                    <p class="text-white text-center col-8">
                        Discover the ultimate hiking experience with our top-of-the-line hiking shoes. Designed for durability and comfort,
                        <br>
                        <br>
                        Our shoes will help you conquer any terrain with ease.
                    </p>
                </div>
                <p class="text-center text-white"><?php the_content(); ?></p>
                <a class="btn btn-light mt-4 w-fit-content" href="<?php echo get_permalink($shop_page_id); ?>">Shop Now</a>
            </div>
        </div>
        <div id="container">
            <main id="content" role="main" class="">