<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement" class="nav w-100 container">
    <div class="col-2"></div>
    <div class="col-10" id="nav-menu">
        <?php wp_nav_menu(array('theme_location' => 'main-menu', 'link_before' => '<span itemprop="name" class="nav-link text-uppercase">', 'link_after' => '</span>', 'link_class')); ?>
    </div>
</nav>