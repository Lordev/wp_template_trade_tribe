<?php get_header('home'); ?>

<div class="container">
    <div class="row gx-4 mt-10 ">
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

        $brands_category = get_term_by('slug', 'brands', 'product_cat');

        if ($brands_category) {
            $brands_category_id = $brands_category->term_id;

            // Get categories that have "brands" as a parent
            $product_categories = get_categories([
                'taxonomy'     => 'product_cat',
                'type'         => 'post',
                'parent'       => $brands_category_id,
            ]);
        }
        ?>
        <?php foreach ($product_categories as $product_category):
            $thumbnail_id = get_term_meta($product_category->term_id, 'thumbnail_id', true);
            $image_url = wp_get_attachment_url($thumbnail_id);
            $image_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
            $title = $product_category->name;
            $description = $product_category->description;
            $link = get_term_link($product_category->term_id, 'product_cat');
        ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 p-4" style="background-color: #c7c1bf">
                    <a href='<?php echo esc_url($link) ?>'>
                        <img src="<?php echo esc_url($image_url) ?>" class="card-img-top" alt="<?php echo esc_attr($image_alt) ?>" style="object-fit: contain; height: 200px; width: 100%;">
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="row gx-4 mt-10">
        <?php
        render_section('partials/heading-section', [
            'heading_section' => 'heading-second-section-home',
            'paragraph' => 'paragraph-right-second-section-home',
        ]);
        ?>
    </div>
    <div class="row gx-4 mt-6" style="height: 589px;">
        <?php
        render_section(
            'partials/slider/marquee',
            [
                'slider' => SLIDER::TESTIMONIALS,
                'parent_field' => 'slider-cards-testimonials',
                'child_field' => 'slider-card-testimonials',
            ]
        );
        ?>
    </div>

    <?php
    get_footer();

    ?>
</div>