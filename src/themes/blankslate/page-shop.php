<?php get_header(); ?>

<div class="container">
    <?php get_template_part('page', 'header') ?>
    <div class="row" >
        <div class="col-3">
            <ul >
                <?php
                $args = array(
                    'taxonomy' => 'product_category',
                    'title_li' => '',
                    'show_option_all' => 'All Categories',
                    'orderby' => 'name',
                    'order' => 'ASC',
                );
                wp_list_categories($args);
                $args = array(
                    'taxonomy' => 'product_category',
                    'title_li' => '',
                    'show_option_all' => 'All Categories',
                    'orderby' => 'name',
                    'order' => 'ASC',
                );
                wp_list_categories($args);
                $args = array(
                    'taxonomy' => 'product_category',
                    'title_li' => '',
                    'show_option_all' => 'All Categories',
                    'orderby' => 'name',
                    'order' => 'ASC',
                );
                wp_list_categories($args);
                ?>
            </ul>
        </div>
        <div class="col-9">
            <div class="products-grid row row-cols-3 g-4">

                <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 28, // Number of products per page
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                    'orderby' => 'date_create',
                    'order' => 'ASC',
                );
                $products_query = new WP_Query($args);
                if ($products_query->have_posts()) :
                    while ($products_query->have_posts()) : $products_query->the_post('');
                ?>
                        <div class="col">
                            <div class="custom-card">
                                <div class="custom-card-img-top">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'w-100 h-100']); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="custom-card-body">
                                    <div class="row align-items-end">
                                        <div class="col">
                                            <p class="custom-card-title"><a class="stretched-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                            <div class="custom-card-text">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                    <div class="pagination">
                        <?php
                        echo paginate_links(array(
                            'total' => $products_query->max_num_pages,
                        ));
                        ?>
                    </div>
                <?php
                    wp_reset_postdata();
                else :
                ?>
                    <p><?php _e('Sorry, no products found.', 'textdomain'); ?></p>
                <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer('secondary'); ?>