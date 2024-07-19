<header role="banner" class="header-dark"  id="js-header">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <a href="<?php echo home_url();?>" class="navbar-brand d-block" title="<?php echo get_bloginfo('name'); ?>">
                    <img width="40px" src="<?php echo get_site_icon_url();?>" alt="<?php echo get_bloginfo('name'); ?>">
                </a>
            </div>
            <div class="col-auto d-flex align-items-center">
                <button class="btn btn-burger btn-burger--dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</header>



<?php
get_template_part('template-parts/content','menu');
?>