<?php
$parent_field = get_query_var('parent_field');
$slider = get_query_var('slider');
?>

<div class="col-4 align-items-lg-end d-none d-lg-flex">
    <?php get_template_part('partials/slider/slider-buttons') ?>
</div>
<div class="col-8 position-relative" style="height: 679px;"> <!-- dynamic height insert ! -->
    <div class="slider overflow-hidden position-absolute">
        <div class="slider-inner d-flex gap-4 " id="<?php echo $parent_field ?>">
            <?php if ($slider === SLIDER::SHOP)
                get_template_part('partials/slider/slider-shop'); 
                elseif ($slider === SLIDER::TESTIMONIALS)
                 get_template_part('partials/slider/slider-testimonials'); 
            ?>
        </div>
    </div>
</div>
