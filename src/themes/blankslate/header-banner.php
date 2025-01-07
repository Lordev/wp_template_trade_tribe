<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
    <style>
        .page-banner {
            width: 100%;
            max-height: 300px;
            overflow: hidden;

            & img {
                height: auto;
                width: 100%;
                object-fit: cover;
                object-position: bottom;
            }
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed position-relative">
        <header id="header" role="banner" class="header z-1 position-fixed w-100 ">
        <?php
            get_template_part('partials/nav');
            ?>
        </header>

        <div id="container">
            <main id="content" role="main" class="">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="page-banner">
                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                    </div>
                <?php endif; ?>