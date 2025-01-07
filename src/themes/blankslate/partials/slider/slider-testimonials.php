<?php
$parent_field = get_field(get_query_var('parent_field'));
$child_field = get_query_var('child_field');


$posts = get_acf_group_field_children($parent_field, $child_field, [
    'image',
    'title',
    'text'
]);


foreach ($posts as $post) {
    $image_url = $post['image']['url'];
    $title = $post['title'];
    $text = $post['text'];
    $image = "<img src='$image_url' class='custom-card-img-top customc-card rounded-circle p-5 mb-4' alt='$title'>";
?>
    <div class="custom-card border-1 border-primary custom-card--sm">
        <?php echo wp_kses_post($image); ?>
        <div class="custom-card-body">
            <b class="custom-card-title"><?php echo wp_kses_post($title); ?></b>
            <p class="custom-card-text">
                <?php echo wp_kses_post($text) ?>
            </p>
        </div>
    </div>
<?php
}
wp_reset_postdata();
?>