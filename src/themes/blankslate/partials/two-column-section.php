<?php

/**
 * Two Column Section
 *
 * @package Trade Tribe
 */
$title = get_query_var('title');
$subtitle = get_query_var('subtitle');
$text = get_query_var('text');
$image = get_field(get_query_var('image'));

$image_url = $image['url'];
$image_alt = $image['alt'];

?>

<section class="our-beginning row mt-5 gap-4 gap-md-0 justify-content-between gx-5 py-5 container mx-auto">
    <div class="col-md-6 col-xl-4 align-content-center">
        <h4 class="mb-4"><?php wp_kses_post(the_field($title)) ?></h4>
        <div>
            <p class="lead"><?php wp_kses_post(the_field($subtitle)) ?></p>
            <p><?php echo wp_kses_post(the_field($text)) ?></p>
        </div>
    </div>
    <div class="col-md-6 col-xl-8 align-content-center">
        <img src="<?php echo esc_url($image_url) ?>" alt="<?php echo esc_attr($image_alt) ?>" class="img-fluid mx-auto d-block">
    </div>
</section>