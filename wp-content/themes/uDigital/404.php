<?php
get_header();
?>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/about.css">
<?php
get_template_part('template-parts/content', 'menu');
?>
<style>
    .elementor-section.elementor-top-section.elementor-element.elementor-element-e1ef34a.elementor-section-content-middle.elementor-hidden-tablet.elementor-hidden-mobile.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default {
        background: #101F3A;
    }

    .elementor-widget-wrap.elementor-element-populated #menu-main-menu {
        color: white;
    }
</style>

<header class="entry-header mt-3">
    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
</header>
<h1 class="jugaad">uDigital MMC</h1>

<?php
?>
<?php
get_footer();
?>
<script data-optimized="1" src="<?= get_template_directory_uri(); ?>/assets/js/about.js" defer=""></script>