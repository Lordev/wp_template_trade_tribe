<?php get_header();?>

<div class="container mt-4">
        <?php
        get_template_part('page-header');

        wc_get_template_part('woocommerce/cart/cart', 'mini-cart');
        ?>
</div>
<?php get_footer(); ?>