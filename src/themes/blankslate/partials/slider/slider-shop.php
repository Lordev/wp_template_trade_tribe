<?php
$args = [
    'post_type' => 'product',
    'post_status' => 'publish',
    'posts_per_page' => 6,
    'orderby' => 'date',
    'order' => 'DESC',
];

$products = new WP_Query($args);
$posts = $products->posts;




foreach ($posts as $post) {
    $image_url = get_the_post_thumbnail_url($post->ID);
    $title = get_the_title($post->ID);
    $price = get_post_meta($post->ID, '_price', true);
    $link = get_permalink($post->ID);
    $image = "<img src='$image_url' class='custom-card-img-top' alt='$title'>";
?>
    <div class="custom-card border-1 border-primary custom-card--lg">
        <?php echo wp_kses_post($image); ?>
        <div class="custom-card-body">
            <b class="custom-card-title"><?php echo wp_kses_post($title); ?></b>
            <p class="custom-card-text">
                <?php echo '$' . $price . ',-'; ?>
            </p>
            <a href="<?php echo esc_url($link); ?>" class="btn btn-primary stretched-link w-fit-content mt-4">BUY NOW!</a>
        </div>
    </div>
<?php
}
wp_reset_postdata();
?>