<?php
$page_heading = get_the_title();
if ($page_heading) {
?> <h4 class="mb-4"><?php echo $page_heading; ?></h4>
<?php
}
?>