<?php
$parent_field = get_query_var('parent_field');
$position = get_query_var('position');
?>

<div class="row gx-4 mt-6">
    <div class="col-4 position-relative">
        <?php get_template_part('slider-buttons') ?>
    </div>
    <div class="col-8 position-relative" style="height: 614px;"> <!-- dynamic height insert ! -->
        <div class="slider overflow-hidden position-absolute">
            <div class="slider-inner d-flex gap-4 " id="<?php echo $parent_field ?>">
                <?php get_template_part('slider') ?>
            </div>
        </div>
    </div>
</div>