<?php 
if (!is_user_logged_in()) {
	wp_redirect(wp_login_url());
	exit;
}
?>

<?php get_header();
?>
<div class="container mt-4">
<?php
get_template_part('page-header');
get_template_part('woocommerce/myaccount/my-account');
?>
</div>








