<!DOCTYPE html>
<html lang="<?php echo get_locale() ?>">


<link rel="stylesheet" id="wp-block-library-css"
    href="<?= get_template_directory_uri(); ?>/assets/css/services/style.min.css?ver=6.5.5" type="text/css" media="all">
<style id="classic-theme-styles-inline-css" type="text/css">
    /*! This file is auto-generated */
    .wp-block-button__link {
        color: #fff;
        background-color: #32373c;
        border-radius: 9999px;
        box-shadow: none;
        text-decoration: none;
        padding: calc(.667em + 2px) calc(1.333em + 2px);
        font-size: 1.125em
    }

    .wp-block-file__button {
        background: #32373c;
        color: #fff;
        text-decoration: none
    }
</style>
<link rel="stylesheet" id="ondigital-bootstrap-min-css"
    href="<?= get_template_directory_uri(); ?>/assets/css/services/bootstrap.min.css?ver=1.0" type="text/css"
    media="all">
<link rel="stylesheet" id="ondigital-bootstrap-icons-css"
    href="<?= get_template_directory_uri(); ?>/assets/css/services/bootstrap-icons.css?ver=1.0" type="text/css"
    media="all">
<link rel="stylesheet" id="ondigital-all-min-css"
    href="<?= get_template_directory_uri(); ?>/assets/css/services/all.min.css?ver=1.0" type="text/css" media="all">
<link rel="stylesheet" id="ondigital-fontawesome-min-css"
    href="<?= get_template_directory_uri(); ?>/assets/css/services/fontawesome.min.css?ver=1.0" type="text/css"
    media="all">
<link rel="stylesheet" id="ondigital-swiper-bundle-min-css"
    href="<?= get_template_directory_uri(); ?>/assets/css/services/swiper-bundle.min.css?ver=1.0" type="text/css"
    media="all">
<link rel="stylesheet" id="ondigital-custom-fonts-css"
    href="<?= get_template_directory_uri(); ?>/assets/css/services/custom-fonts.css?ver=1.0" type="text/css" media="all">
<link rel="stylesheet" id="ondigitalaz-style-css"
    href="<?= get_template_directory_uri(); ?>/assets/css/services/style.css?ver=1.0" type="text/css" media="all">
<link rel="stylesheet" id="ondigital-custom-css"
    href="<?= get_template_directory_uri(); ?>/assets/css/services/custom.css?ver=1.0" type="text/css" media="all">

<?php
get_header();
?>

<style>
    .header_position_over .top_panel {
        position: relative;
    }
</style>

<style>
    .creasoft-wrap h1,
    .creasoft-wrap h2,
    .creasoft-wrap h3,
    .creasoft-wrap h4,
    .creasoft-wrap h5 {
        font-family: inherit;
    }

    button {
        padding: 15px 25px !important;
        font-family: inherit !important;
    }
</style>

<body
    class="page-template-default page page-id-17882 wp-custom-logo theme-integro hide_fixed_rows_enabled woocommerce-no-js tinvwl-theme-style skin_default scheme_marketing-dark blog_mode_page body_style_fullscreen is_single sidebar_hide expand_content trx_addons_present header_type_custom header_style_header-custom-17913 header_position_over menu_side_none no_layout fixed_blocks_sticky elementor-default elementor-kit-15 elementor-page elementor-page-17882">
    <div class="body_wrap">
        <div class="page_wrap with_bg_fixed" style="margin-top: -20px;">
            <div class="custom_bg_fixed  integro_inline_1886675021"></div>
            <a class="integro_skip_link skip_to_content_link" href="#content_skip_link_anchor" tabindex="1">Skip to
                content</a>
            <a class="integro_skip_link skip_to_footer_link" href="#footer_skip_link_anchor" tabindex="1">Skip to
                footer</a>
            <?php
            get_template_part('template-parts/content', 'menu');
            ?>



            <main class="creasoft-wrap" style="background: #FAFAFA;">

                <!-- Start breadcrumbs section -->
                <section class="breadcrumbs" style="padding-top:50px;">
                    <div class="container" bis_skin_checked="1">
                        <div class="row" bis_skin_checked="1">
                            <div class="col-12 col-sm-12" bis_skin_checked="1">
                                <div class="breadcrumb-wrapper" bis_skin_checked="1">
                                    <div class="breadcrumb-cnt" bis_skin_checked="1">
                                        <span>
                                            <a href="/">
                                                Home page
                                            </a>
                                            <!-- <i class="bi bi-arrow-right"></i> -->
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/main/breadcrumb-arrow.svg"
                                                alt="" style="margin: 0px 9px 5px;">
                                            <a href="/" onclick="return false;">
                                                Services </a>
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/main/breadcrumb-arrow.svg"
                                                alt="" style="margin: 0px 9px 5px;">
                                        </span>
                                        <h1><?php echo get_field('title'); ?> </h1>
                                        <div class="breadcrumb-line" bis_skin_checked="1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End breadcrumbs section -->

                <!-- Start about-area section -->
                <section class="about-area">
                    <div class="container" bis_skin_checked="1">
                        <div class="row" bis_skin_checked="1">
                            <div class="col-lg-5 or-2" bis_skin_checked="1">
                                <div class="sec-title layout2" bis_skin_checked="1">
                                    <h2> <?php echo get_field('title'); ?> </h2>
                                </div>
                                <div class="about-left ondigital-about-page-left-margin" bis_skin_checked="1">
                                    <p>

                                    </p>
                                    <figure class="wp-block-image size-full"><img fetchpriority="high" decoding="async"
                                            width="1000" height="688" src="<?php echo get_field('img'); ?>" alt=""
                                            class="wp-image-599"
                                            srcset="<?php echo get_field('img'); ?> 1000w, <?php echo get_field('img'); ?> 300w, <?php echo get_field('img'); ?> 768w"
                                            sizes="(max-width: 1000px) 100vw, 1000px"></figure>

                                    <?php echo get_field('desc'); ?>


                                </div>
                            </div>
                            <div class="col-lg-7 or-1" bis_skin_checked="1">
                                <div class="about-right" bis_skin_checked="1">
                                    <div class="banner-1" bis_skin_checked="1">
                                        <img src="<?php echo get_field('img'); ?>" alt="Rəqəmsal Marketinq">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End about-area section -->

                <!-- Start services-area section -->
                <section class="services-area">
                    <div class="container" bis_skin_checked="1">
                        <div class="swiper services-slider swiper-initialized swiper-horizontal swiper-pointer-events"
                            bis_skin_checked="1">
                            <div class="swiper-wrapper" id="swiper-wrapper-c9192423b28184c7" aria-live="off"
                                style="transition-duration: 0ms; transform: translate3d(-2272px, 0px, 0px);"
                                bis_skin_checked="1">
                                <?php $data = new WP_Query(
                                    array(
                                        'post_type' => 'ads',
                                    )
                                );
                                if ($data->have_posts()):
                                    $i = 0;
                                    while ($data->have_posts()):
                                        $data->the_post();
                                        ?>
                                        <div class="swiper-slide <?php if ($i = 0) {
                                            echo 'swiper-slide-duplicate swiper-slide-next';
                                        } elseif ($i = 2) {
                                            echo 'swiper-slide-prev';
                                        } elseif ($i = 3) {
                                            echo 'swiper-slide-active';
                                        }
                                        ?>" data-swiper-slide-index="<?= $i ?>" style="width: 348.667px; margin-right: 30px;"
                                            role="group" aria-label="<?= $i + 1 ?> / 4" bis_skin_checked="1">
                                            <div class="single-service single-service-sub" bis_skin_checked="1">
                                                <div class="icon" bis_skin_checked="1">
                                                    <img width="72" height="72"
                                                        src="<?= get_template_directory_uri(); ?>/assets/images/main/digital-marketing.png"
                                                        class="attachment-85x85 size-85x85 wp-post-image" alt="youtube seo"
                                                        decoding="async">
                                                </div>
                                                <h4><?php echo get_field('title'); ?> </h4>
                                                <p><?php echo get_field('txt'); ?></p>
                                            </div>
                                        </div>

                                    <?php endwhile;
                                    wp_reset_postdata(); endif; ?>

                            </div>
                            <div class="swiper-pagination d-md-none d-md-block swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"
                                bis_skin_checked="1"><span class="swiper-pagination-bullet" tabindex="0" role="button"
                                    aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet"
                                    tabindex="0" role="button" aria-label="Go to slide 2"></span><span
                                    class="swiper-pagination-bullet" tabindex="0" role="button"
                                    aria-label="Go to slide 3"></span><span
                                    class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                    role="button" aria-label="Go to slide 4" aria-current="true"></span></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                        <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
                    </div>
                </section>
                <!-- End services-area section -->

                <section class="faqs-area">
                    <div class="container" bis_skin_checked="1">
                        <div class="row" bis_skin_checked="1">
                            <div class="col-lg-12" bis_skin_checked="1">
                                <div class="faqs-tabs" bis_skin_checked="1">
                                    <div class="faqs" id="progress-tab" bis_skin_checked="1">
                                        <!-- <h4>
                                FAQ
                            </h4> -->
                                        <div class="accordion" id="accordionOne" bis_skin_checked="1">
                                            <?php
                                            $data = new WP_Query(
                                                array(
                                                    'post_type' => 'faq',
                                                )
                                            );
                                            if ($data->have_posts()):
                                                $i = 0;
                                                while ($data->have_posts()):
                                                    $data->the_post();
                                                    ?>
                                                    <div class="accordion-item" bis_skin_checked="1">
                                                        <span class="accordion-header" id="heading42<?= $i ?>">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapse42<?= $i ?>"
                                                                aria-expanded="false" aria-controls="collapse42<?= $i ?>">
                                                                <?php echo get_field('title'); ?> </button>
                                                        </span>
                                                        <div id="collapse42<?= $i ?>" class="accordion-collapse collapse"
                                                            aria-labelledby="heading42<?= $i ?>"
                                                            data-bs-parent="#accordionExample" bis_skin_checked="1">
                                                            <div class="accordion-body" bis_skin_checked="1">

                                                                <p><?php echo get_field('txt'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endwhile;
                                                wp_reset_postdata(); endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End faqs-area section -->

                <!-- Start subscribe-newsletter section -->
                <section class="subscribe-newsletter">
                    <div class="container" bis_skin_checked="1">
                        <div class="news-letter-content" bis_skin_checked="1">
                            <div class="row align-items-center" bis_skin_checked="1">
                                <div class="col-lg-7" bis_skin_checked="1">
                                    <div class="subscribe-cnt" bis_skin_checked="1">
                                        <h3>
                                            MARKETİNQ GÜNDƏMİNDƏN XƏBƏRDAR OL </h3>
                                    </div>
                                </div>
                                <div class="col-lg-5" bis_skin_checked="1">
                                    <div class="subscribe-form" bis_skin_checked="1">
                                        <form action="" method="post">
                                            <input type="email" name="email" placeholder="E-poçt adresinizi daxil edin"
                                                autocomplete="off">
                                            <button type="submit" name="subscribe">
                                                BİZƏ QOŞUL
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End subscribe-newsletter section -->

            </main>

            <a id="footer_skip_link_anchor" class="integro_skip_link_anchor" href="#"></a>
            <?php
            get_template_part('template-parts/content', 'foot');
            ?>
        </div>
    </div>



    <?php
    get_footer();
    ?>
    <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/services/jquery-3.6.0.min.js"
        id="jquery-js"></script>
 
    <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/services/bootstrap.min.js?ver=1.0"
        id="ondigitalaz-bootstrap-min-js"></script>
    <script type="text/javascript"
        src="<?= get_template_directory_uri(); ?>/assets/js/services/swiper-bundle.min.js?ver=1.0"
        id="ondigitalaz-swiper-bundle-min-js"></script>

    <script type="text/javascript"
        src="<?= get_template_directory_uri(); ?>/assets/js/services/jquery.counterup.min.js?ver=1.0"
        id="ondigitalaz-counterup-min-js"></script>

    <script type="text/javascript"
        src="<?= get_template_directory_uri(); ?>/assets/js/services/jquery.magnific-popup.min.js?ver=1.0"
        id="ondigitalaz-jquery-magnific-popup-min-js"></script>

    <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/services/custom.js?ver=1.0"
        id="ondigitalaz-custom-js"></script>
</body>

</html>