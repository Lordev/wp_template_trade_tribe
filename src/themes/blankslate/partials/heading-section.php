<?php
$heading_section = get_query_var('heading_section');
$paragraph = get_query_var('paragraph');

?>

<div class="col-2 col-lg-4 align-content-center">
    <p style="text-orientation: upright;  writing-mode:vertical-rl" class="fw-bold">Trade Tribe</p>
</div>
<div class="col-10 col-lg-8 d-lg-flex">
    <div class="col-lg-6 position-relative">
        <?php if (get_field($heading_section)): ?>
            <h2><?php wp_kses_post(the_field($heading_section)); ?></h2>
        <?php endif; ?>
        <img src="http://localhost/wp-content/uploads/2024/12/Scribble-title.png" alt="scribble" class="position-absolute top-50 start-50 translate-middle z-n1">
    </div>
    <div class="col-lg-6 align-self-end">
        <?php if (get_field($paragraph)): ?>
            <p class="text-muted fs-6 "><?php wp_kses_post(the_field($paragraph)); ?></p>
        <?php endif; ?>
    </div>
</div>