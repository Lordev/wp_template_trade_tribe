<?php get_header(); ?>

<div class="vh-100">
</div>

<div class="container">
                <?php
    render_section('slider-section', [
        'slider' => SLIDER::SHOP,
        'parent_field' => 'slider-cards',
        'child_field' => 'slider-card',
    ]);

    render_section('slider-section', [
        'slider' => SLIDER::TESTIMONIALS,
        'parent_field' => 'slider-cards-testimonials',
        'child_field' => 'slider-card-testimonials',
    ]);
    ?>
</div>