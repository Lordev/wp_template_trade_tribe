<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="product-item">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="product-thumbnail">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php endif; ?>
            </div>
            <div class="product-excerpt">
                <?php the_excerpt(); ?>
            </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e('Sorry, no products matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>