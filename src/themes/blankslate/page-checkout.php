<?php get_header(); ?>



<div class="container">
    <?php get_template_part('page-header'); ?>
    <?php get_template_part('woocommerce/checkout/payment',) ?>
    <?php get_template_part('woocommerce/checkout/form', 'coupon'); ?>

    
    <?php 
    if( ! is_user_logged_in() ) {
        get_template_part('woocommerce/checkout/form', 'login');
    }
    ?>
</div>

<?php get_footer(); ?>