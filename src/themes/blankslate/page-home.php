<?php get_header(); ?>

<div class="vh-100">
</div>

<div class="container">
    <div class="row gx-4 mt-8">
        <div class="col">
            <?php if (get_field('paragraph-left-first-section-home')): ?>
                <p><?php echo wp_kses_post(get_field('paragraph-left-first-section-home')); ?></p>
            <?php endif; ?>
        </div>
        <div class="col position-relative">
            <?php if (get_field('heading_first_section-home')): ?>

                <h2 class=""><?php wp_kses_post(the_field('heading_first_section-home')); ?></h2>
            <?php endif; ?>
            <img src="http://localhost/wp-content/uploads/2024/12/Scribble-title.png" alt="scribble" class="position-absolute top-50 start-50 translate-middle z-n1">
        </div>
        <div class="col align-self-end">
            <?php if (get_field('paragraph-right-first-section-home')): ?>
                <p><?php wp_kses_post(the_field('paragraph-right-first-section-home')); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="row gx-4 mt-12">
        <div class="col-4">
            <div class="position-relative h-100 d-flex justify-content-center">
                <img src="http://localhost/wp-content/uploads/2024/12/tribal-circle.png" alt="tribal circle" class="position-absolute top-50 start-50 translate-middle z-n1">
                <button class="slider-button bg-transparent border-0" type="button" title="left arrow" id="slide-btn-prev">
                    <svg width="109" height="108" viewBox="0 0 109 108" fill="none" xmlns="http://www.w3.org/2000/svg" class="cursor">
                        <path d="M48.2322 55.7678L73.4645 81L68 86.4645L35.5355 54L68 21.5355L73.4645 27L48.2322 52.2322L46.4645 54L48.2322 55.7678Z" stroke="black" stroke-width="5" />
                    </svg>
                </button>
                <button class="slider-button bg-transparent border-0" type="button" title="right arrow" id="slide-btn-next">
                    <svg width="109" height="108" viewBox="0 0 109 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M60.7678 52.2322L35.5355 27L41 21.5355L73.4645 54L41 86.4645L35.5355 81L60.7678 55.7678L62.5355 54L60.7678 52.2322Z" stroke="black" stroke-width="5" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="col-8 position-relative" style="height: 478.75px;"> <!-- dynamic height insert ! -->
            <div class="carousel d-flex gap-4 position-absolute">
                <?php
                $slider_cards = get_field('slider-cards');
                ?>
                <?php if ($slider_cards): ?>
                    <?php try { ?>
                        <?php
                        $i = 1;
                        foreach ($slider_cards as $key => $slider_card): ?>
                            <?php
                            $image = $slider_card['slider-card-image-' . $i];
                            $image_url = $image['url'];
                            $image_alt = $image['alt'];
                            $title = $slider_card['slider-card-title-' . $i];
                            $text = $slider_card['slider-card-text-' . $i];
                            try {
                            ?>
                                <div class="custom-card">
                                    <img src="<?php echo esc_url($image_url); ?>" class="custom-card-img-top" alt="<?php echo esc_attr($image_alt) ?>">
                                    <div class="custom-card-body">
                                        <b class="custom-card-title"><?php echo wp_kses_post($title); ?></b>
                                        <p class="custom-card-text"><?php echo wp_kses_post($text); ?></p>
                                    </div>
                                </div>
                            <?php
                                $i++;
                            } catch (Exception $e) {
                                echo 'Error: ',  $e->getMessage(), "\n";
                            }
                            ?>
                        <?php endforeach; ?>
                    <?php } catch (Exception $e) { ?>
                        <p>Error: <?php echo $e->getMessage(); ?></p>
                    <?php } ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="row gx-4 mt-12">
        <div class="col">
            <?php if (get_field('paragraph-left-second-section-home')): ?>
                <p><?php echo wp_kses_post(get_field('paragraph-left-second-section-home')); ?></p>
            <?php endif; ?>
        </div>
        <div class="col position-relative">
            <?php if (get_field('heading_second_section-home')): ?>

                <h2 class=""><?php wp_kses_post(the_field('heading_second_section-home')); ?></h2>
            <?php endif; ?>
            <img src="http://localhost/wp-content/uploads/2024/12/Scribble-title.png" alt="scribble" class="position-absolute top-50 start-50 translate-middle z-n1">
        </div>
        <div class="col align-self-end">
            <?php if (get_field('paragraph-right-second-section-home')): ?>
                <p><?php wp_kses_post(the_field('paragraph-right-second-section-home')); ?></p>
            <?php endif; ?>
        </div>
    </div>

    <div class="row gx-4 mt-12 align-items-end d-flex">
        <div class="col"> <img src="https://placehold.co/40x40" class="card-img-top rounded-1" alt="..."></div>
        <div class="col"> <img src="https://placehold.co/40x30" class="card-img-top rounded-1" alt="..."></div>
        <div class="col"> <img src="https://placehold.co/40x20" class="card-img-top rounded-1" alt="..."></div>
    </div>
    <div class="row gx-4 mt-12">
        <div class="col-8 position-relative" style="height: 478.75px;"> <!-- dynamic height insert ! -->
            <div class="carousel d-flex gap-4 position-absolute end-0">
                <?php
                $slider_cards = get_field('slider-cards');
                ?>
                <?php if ($slider_cards): ?>
                    <?php try { ?>
                        <?php
                        $i = 1;
                        foreach ($slider_cards as $key => $slider_card): ?>
                            <?php
                            $image = $slider_card['slider-card-image-' . $i];
                            $image_url = $image['url'];
                            $image_alt = $image['alt'];
                            $title = $slider_card['slider-card-title-' . $i];
                            $text = $slider_card['slider-card-text-' . $i];
                            try {
                            ?>
                                <div class="card" style="width: 18rem;">

                                    <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="<?php echo esc_attr($image_alt) ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo wp_kses_post($title); ?></h5>
                                        <p class="card-text"><?php echo wp_kses_post($text); ?></p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            <?php
                                $i++;
                            } catch (Exception $e) {
                                echo 'Error: ',  $e->getMessage(), "\n";
                            }
                            ?>
                        <?php endforeach; ?>
                    <?php } catch (Exception $e) { ?>
                        <p>Error: <?php echo $e->getMessage(); ?></p>
                    <?php } ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-4">
            <div class="position-relative h-100 d-flex justify-content-center">
                <img src="http://localhost/wp-content/uploads/2024/12/tribal-circle.png" alt="tribal circle" class="position-absolute top-50 start-50 translate-middle z-n1">
                <button class="slider-button bg-transparent border-0" type="button" title="left arrow" id="slide-btn-prev-testimonials">
                    <svg width="109" height="108" viewBox="0 0 109 108" fill="none" xmlns="http://www.w3.org/2000/svg" class="cursor">
                        <path d="M48.2322 55.7678L73.4645 81L68 86.4645L35.5355 54L68 21.5355L73.4645 27L48.2322 52.2322L46.4645 54L48.2322 55.7678Z" stroke="black" stroke-width="5" />
                    </svg>
                </button>
                <button class="slider-button bg-transparent border-0" type="button" title="right arrow" id="slide-btn-next-testimonials">
                    <svg width="109" height="108" viewBox="0 0 109 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M60.7678 52.2322L35.5355 27L41 21.5355L73.4645 54L41 86.4645L35.5355 81L60.7678 55.7678L62.5355 54L60.7678 52.2322Z" stroke="black" stroke-width="5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
</div>