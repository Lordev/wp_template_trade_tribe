<div class="row gx-4 mt-10">
    <div class="col align-content-center">
        <p  style="text-orientation: upright;  writing-mode:vertical-rl" class="fw-bold">Trade Tribe</p>
    </div>
    <div class="col position-relative">
        <?php if (get_field($title)): ?>
            <h2 class=""><?php wp_kses_post(the_field(get_query_var('title'))); ?></h2>
        <?php endif; ?>
        <img src="http://localhost/wp-content/uploads/2024/12/Scribble-title.png" alt="scribble" class="position-absolute top-50 start-50 translate-middle z-n1">
    </div>
    <div class="col align-self-end">
        <?php if (get_field($right_paragraph)): ?>
            <p class="text-muted"><?php wp_kses_post(the_field(get_query_var('right_paragraph'))); ?></p>
        <?php endif; ?>
    </div>
</div>