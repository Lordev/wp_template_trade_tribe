<?php
/*
Template Name: Our Story
*/

get_header('banner'); ?>

<div class="">
    <h2 class="text-center my-5">Our Story</h2>
    <hr class="mb-5">
    <?php
    render_section('/partials/two-column-section', [
        'title' => 'title_our_beginning',
        'subtitle' => 'subtitle_our_beginning',
        'text' => 'text_our_beginning',
        'image' => 'image_our_beginning',
    ]);
    ?>
    <section class="company-highlights mt-5 py-5" style="background-color: #c7c1bf">
        <div class="container row mx-auto g-5" >
            <div class="col-md-3  text-center">
                <i class="fas fa-bullseye fa-3x mb-3 text-secondary"></i>
                <h5>Our Vision</h5>
                <p>To be the leading provider of innovative solutions.</p>
            </div>
            <div class="col-md-3  text-center">
                <i class="fas fa-handshake fa-3x mb-3 text-secondary"></i>
                <h5>Our Values</h5>
                <p>Integrity, Excellence, and Respect.</p>
            </div>
            <div class="col-md-3  text-center">
                <i class="fas fa-users fa-3x mb-3 text-secondary"></i>
                <h5>Our Team</h5>
                <p>Dedicated professionals committed to your success.</p>
            </div>
            <div class="col-md-3  text-center">
                <i class="fas fa-globe fa-3x mb-3 text-secondary"></i>
                <h5>Global Reach</h5>
                <p>Serving clients worldwide with unparalleled expertise.</p>
            </div>
        </div>
    </section>
    <?php 
    render_section('/partials/two-column-section', [
        'title' => 'title_our_mission',
        'subtitle' => 'subtitle_our_mission',
        'text' => 'text_our_mission',
        'image' => 'image_our_mission',
    ]);
    render_section('/partials/team-section', []); 
    ?>


</div>


</div>


<?php get_footer(''); ?>