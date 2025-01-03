<?php
if ($slider === SLIDER::SHOP) {
    $args = [
        'post_type' => 'product',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'orderby' => 'date',
        'order' => 'DESC',
    ];

    $products = new WP_Query($args);
    $posts = $products->posts;
}

if ($slider === SLIDER::TESTIMONIALS) {
    $parent_field = get_field(get_query_var('parent_field'));
    $child_field = get_query_var('child_field');


    $posts = get_acf_group_field_children($parent_field, $child_field, [
        'image',
        'title',
        'text'
    ]);
}


foreach ($posts as $post) {
    if ($slider === SLIDER::SHOP) {
        $image_url = get_the_post_thumbnail_url($post->ID);
        $title = get_the_title($post->ID);
        $price = get_post_meta($post->ID, '_price', true);
        $link = get_permalink($post->ID);
        $image = "<img src='$image_url' class='custom-card-img-top' alt='$title'>";
    };

    if ($slider === SLIDER::TESTIMONIALS) {
        $image_url = $post['image']['url'];
        $title = $post['title'];
        $text = $post['text'];
        $image = "<img src='$image_url' class='custom-card-img-top customc-card rounded-circle p-5 mb-4' alt='$title'>";
        
    };
?>
    <div class="custom-card border-1 border-primary <?php echo ($slider === SLIDER::SHOP) ? 'custom-card--lg' : (($slider === SLIDER::TESTIMONIALS) ? 'custom-card--sm' : ''); ?>">
        <?php echo wp_kses_post($image); ?>
        <div class="custom-card-body">
            <b class="custom-card-title"><?php echo wp_kses_post($title); ?></b>
            <p class="custom-card-text">
                <?php if ($slider === SLIDER::SHOP) echo '$' . $price . ',-'; ?>
                <?php if ($slider === SLIDER::TESTIMONIALS) echo $text ?>
            </p>
            <?php if ($slider === SLIDER::SHOP): ?>   
            <a href="<?php echo esc_url($link); ?>" class="btn btn-primary stretched-link w-fit-content mt-4">BUY NOW!</a> 
            <?php endif; ?>
        </div>
    </div>
<?php
}
wp_reset_postdata();
?>