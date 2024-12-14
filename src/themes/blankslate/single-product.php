<?php get_header(); ?>

<div class="container">
    <?php get_template_part('page', 'header') ?>
    <div class="products-grid">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="row mt-4">
                    <div class="col align-self-center">
                        <?php previous_post_link('%link', '<i class="fas fa-arrow-left"></i>'); ?>
                    </div>
                    <div class="col-5">
                        <div class="product-thumbnail">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('product_thumbnail', ['class' => 'w-100 h-100']); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="product-item">
                            <h6><?php the_title(); ?></h6>

                            <div class="mt-4">
                                <?php
                                if (taxonomy_exists('product_category')) {
                                    $terms = get_the_terms(get_the_ID(), 'product_category');
                                    if ($terms && ! is_wp_error($terms)) {
                                        $term_names = array();
                                        foreach ($terms as $term) {
                                            $term_names[] = $term->name;
                                        }
                                        $term_names = join(", ", $term_names);
                                    }
                                }
                                ?> <a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>

                                <h5 class="product-excerpt ">
                                    <?php the_excerpt(); ?>
                                </h5>
                            </div>
                            <form class="row mt-4">
                                <div class="form-group col d-flex flex-column">
                                    <label for="quantity">Quantity</label>
                                    <input class="form-control" type="number" value="1" min="1" max="100">
                                </div>
                                <div class="form-group col d-flex flex-column">
                                    <label for="size">Size</label>
                                    <select class="form-control" name="size" id="size">
                                        <option value="small">Small</option>
                                        <option value="medium">Medium</option>
                                        <option value="large">Large</option>
                                    </select>

                                </div>
                                <button class="btn btn-primary mt-4">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                    <div class="col align-self-center">
                        <?php next_post_link('%link', '<i class="fas fa-arrow-right"></i>'); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php _e('Sorry, no products matched your criteria.', 'textdomain'); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer('secondary'); ?>