</main>
<?php get_sidebar(); ?>
</div>
<?php $image = get_field('footer-background-image'); ?>
<?php if (!empty($image)): ?>
    <footer id="footer" role="contentinfo" class="overflow-hidden bg-black-50 position-relative gx-4 mt-12 pt-8 d-flex flex-column justify-content-between
    " style="height :<?php echo intval($image['height']); ?>px;">
    <?php endif; ?>
    <img class="position-absolute bottom-0 start-50 translate-middle-x z-n1 object-fit-cover px-0 w-100 h-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <div class="container">
        <div class="row">
            <div class="col">
                <?php if (get_field('paragraph-left-section-footer')): ?>
                    <p class="text-white-50"><?php echo wp_kses_post(get_field('paragraph-left-section-footer')); ?></p>
                <?php endif; ?>
            </div>
            <div class="col position-relative">
                <?php if (get_field('heading-section-footer')): ?>
                    <h2 class="text-white"><?php  wp_kses_post(the_field('heading-section-footer')); ?></h2>
                <?php endif; ?>
                <img src="http://localhost/wp-content/uploads/2024/12/Scribble-title.png" alt="scribble" class="position-absolute top-50 start-50 translate-middle z-n1">
            </div>
            <div class="col align-self-end">
                <?php if (get_field('paragraph-right-section-footer')): ?>
                    <p class="text-white-50"><?php  wp_kses_post(the_field('paragraph-right-section-footer')); ?></p>
                <?php endif; ?>
            </div>
            <?php get_footer(); ?>
        </div>
    </div>
    <div class="bg-dark bg-opacity-75 text-white h-50 d-flex flex-column justify-content-between" style="transform: translateY(0%); transition: transform 1.5s ease-in;" >
        <div class="container">
            <div class="row my-4 gap-4">
                <div class="col">
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
                <div class="col">
                    <h3 class="text-white">Contact Us</h3>
                    <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus eget sapien.</p>
                    <div>
                        <a href="https://www.facebook.com/" class="btn btn-primary me-2" title="Facebook" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/" class="btn btn-primary me-2" title="Instagram" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.twitter.com/" class="btn btn-primary" title="Twitter" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <h3 class="text-white">Quick Links</h3>
                    <ul class="list-unstyled mt-4">
                        <li><a class="link-info text-white" href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li><a class="link-info text-white" href="<?php echo esc_url(home_url('/about-us')); ?>">About Us</a></li>
                        <li><a class="link-info text-white" href="<?php echo esc_url(home_url('/services')); ?>">Services</a></li>
                        <li><a class="link-info text-white" href="<?php echo esc_url(home_url('/contact-us')); ?>">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3 class="text-white">Contact</h3>
                    <p class="mt-4">1234 Main Street, Suite 200, New York, NY 10001</p>
                    <p class="">Phone: (123) 456-7890</p>
                </div>
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