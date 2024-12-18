<?php
$parent_field = get_field(get_query_var('parent_field'));
$slider = get_query_var('slider');
$child_field = get_query_var('child_field');
$field = ['image', 'title', 'text'];
$data = get_acf_group_field_children($parent_field, $child_field, $field);


foreach ($data as $value) {
    $image = !$value['image'] ? '<img src="https://placehold.co/450x450" class="card-img-top" alt="...">' : '<img class="custom-card-img" src="' . $value['image']['url'] . '" alt="' . $value['image']['alt'] . '" />';
    $title = $value['title'];
    $text = $value['text'];
?>
    <div class="custom-card <?php echo ($slider === SLIDER::SHOP) ? 'custom-card--lg' : (($slider === SLIDER::TESTIMONIALS) ? 'custom-card--sm' : ''); ?>">

        <?php echo wp_kses_post($image); ?>
        <div class="custom-card-body">
            <b class="custom-card-title"><?php echo wp_kses_post($title); ?></b>
            <p class="custom-card-text"><?php echo wp_kses_post($text); ?></p>
        </div>
    </div>


<?php } ?>