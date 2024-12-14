</main>
<?php get_sidebar(); ?>
</div>
<?php $image = get_field('footer-background-image-secondary'); ?>

<?php if (!empty($image)): ?>
    <footer id="footer" role="contentinfo" class="overflow-hidden bg-black-50 position-relative gx-4 mt-12 pt-8 d-flex flex-column justify-content-between
    " style="height :<?php echo intval($image['height']); ?>px;">
    <?php endif; ?>
    <img class="position-absolute bottom-0 start-50 translate-middle-x z-n1 object-fit-cover px-0 w-100 h-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <div class="container d-flex flex-column justify-content-between h-100">
        <div class="row justify-content-between">
            <div class="col-6">
                <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'link_before' => '<span itemprop="name" class="nav-link text-uppercase">', 'link_after' => '</span>', 'link_class')); ?>
                <!-- <div id="search"><?php get_search_form(); ?></div> -->
            </div>
            <div class="col-3">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div id="copyright" class="text-white text-center pb-4">
            &copy; <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?> <?php echo esc_html(get_bloginfo('name')); ?>. All Rights Reserved.
        </div>
    </div>
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>