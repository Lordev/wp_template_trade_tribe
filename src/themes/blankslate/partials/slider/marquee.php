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


<div class="position-absolute start-50 translate-middle-x">
  <div class="marquee-wrapper" style="user-select: none;">
    <div class="marquee-content scrollingX">
      <?php
        get_template_part('partials/slider/slider-testimonials');
      ?>
    </div>
  </div>
</div>

<?php wp_reset_postdata(); ?>