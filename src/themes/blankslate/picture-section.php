<div class="row gx-4 mt-6 align-items-end d-flex">
    
    <?php 
    $pictures = get_field($pictures_home);
    if (!$pictures) {
        return;
    }
    foreach ($pictures as $picture): 
    ?>
        <div class="col ">
            <img src="<?php echo esc_url($picture['url']); ?>" alt="<?php echo esc_attr($picture['alt']); ?>" class="img-fluid w-100">
        </div>
    <?php endforeach; ?>
</div>