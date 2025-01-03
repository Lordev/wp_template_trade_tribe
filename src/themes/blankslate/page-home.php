<?php get_header('home'); ?>

<div class="container">
    <div class="row gx-4 mt-10">
        <?php
        render_section('partials/heading-section', [
            'heading_section' => 'heading-section',
            'paragraph' => 'paragraph',
        ]);
        ?>
    </div>
    <div class="row gx-4 mt-6">
        <?php
        render_section('partials/slider/slider-section', [
            'slider' => SLIDER::SHOP,
            'parent_field' => 'slider-cards',
            'child_field' => 'slider-card',
        ]);
        ?>
    </div>

    <div class="row gx-4 mt-10">
        <?php
        render_section('partials/heading-section', [
            'heading_section' => 'heading-second-section-home',
            'paragraph' => 'paragraph-right-second-section-home',
        ]);
        ?>
    </div>

    <div class="row gx-4 mt-6">
        <?php
        render_section('partials/slider/slider-section', [
            'slider' => SLIDER::TESTIMONIALS,
            'parent_field' => 'slider-cards-testimonials',
            'child_field' => 'slider-card-testimonials',
        ]);
        ?>
    </div>
    <div class="row gx-4 mt-10">
        <?php
        render_section('partials/heading-section', [
            'heading_section' => 'heading-second-section-home',
            'paragraph' => 'paragraph-right-second-section-home',
        ]);
        ?>
    </div>
    <div class="row gx-4 mt-6">
        <?php
        render_section(
            'partials/slider/marquee',
            []
        );
        ?>
    </div>

    <?php
    get_footer();

    ?>
</div>