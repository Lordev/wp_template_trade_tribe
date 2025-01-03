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
        <?php foreach ($product_categories as $product_category):
          $thumbnail_id = get_term_meta($product_category->term_id, 'thumbnail_id', true);
          $image_url = wp_get_attachment_url($thumbnail_id);
          $image_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
          $title = $product_category->name;
          $description = $product_category->description;
          $link = get_term_link($product_category->term_id, 'product_cat');
        ?>

          <div class="card-testimonial">
            <a href='<?php echo esc_url($link) ?>' >
              <article>
              <picture>
                  <source media="(min-width: 768px)" srcset="<?php echo wp_kses_post($image_url) ?>">
                  <img src="1.jpg" alt="<?php echo wp_kses_post($image_alt) ?>">
                </picture>
                <!-- <h4><?php echo wp_kses_post($title) ?></h4>
                <article class="short-description">
                  <p><?php echo wp_kses_post($description) ?></p>
                </article> -->
              </article>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

<?php wp_reset_postdata(); ?>