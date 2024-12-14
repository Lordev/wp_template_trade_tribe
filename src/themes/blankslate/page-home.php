<?php get_header(); ?>

<div class="vh-100">
</div>

<div class="container">
                <?php

    render_section('heading-section', [
        'left_paragraph' => 'paragraph-left-first-section-home',
        'right_paragraph' => 'paragraph-right-first-section-home',
        'title' => 'heading-first-section-home',
    ]);

    render_section('slider-section', [
        'slider' => SLIDER::SHOP,
        'parent_field' => 'slider-cards',
        'child_field' => 'slider-card',
    ]);


    render_section('heading-section', [
        'left_paragraph' => 'paragraph-left-second-section-home',
        'right_paragraph' => 'paragraph-right-second-section-home',
        'title' => 'heading-second-section-home',
    ]);

    
    render_section('slider-section', [
        'slider' => SLIDER::TESTIMONIALS,
        'parent_field' => 'slider-cards-testimonials',
        'child_field' => 'slider-card-testimonials',
    ]);

    render_section('picture-section', [
        'pictures_home' => 'pictures-home',
    ]);


    get_footer();
    ?>
</div>