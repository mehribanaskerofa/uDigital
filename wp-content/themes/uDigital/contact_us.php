<?php
/*
 *
 * Template Name: Contact-us
 *
 * */
?>

<!DOCTYPE html>
<html lang="<?php echo get_locale() ?>">
<style>
    .LGLeeN-keyboard-shortcuts-view {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex
    }

    .LGLeeN-keyboard-shortcuts-view table,
    .LGLeeN-keyboard-shortcuts-view tbody,
    .LGLeeN-keyboard-shortcuts-view td,
    .LGLeeN-keyboard-shortcuts-view tr {
        background: inherit;
        border: none;
        margin: 0;
        padding: 0
    }

    .LGLeeN-keyboard-shortcuts-view table {
        display: table
    }

    .LGLeeN-keyboard-shortcuts-view tr {
        display: table-row
    }

    .LGLeeN-keyboard-shortcuts-view td {
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        display: table-cell;
        color: #000;
        padding: 6px;
        vertical-align: middle;
        white-space: nowrap
    }

    .LGLeeN-keyboard-shortcuts-view td:first-child {
        text-align: end
    }

    .LGLeeN-keyboard-shortcuts-view td kbd {
        background-color: #e8eaed;
        border-radius: 2px;
        border: none;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        color: inherit;
        display: inline-block;
        font-family: Google Sans Text, Roboto, Arial, sans-serif;
        line-height: 16px;
        margin: 0 2px;
        min-height: 20px;
        min-width: 20px;
        padding: 2px 4px;
        position: relative;
        text-align: center
    }
</style>
<style>
    .gm-control-active>img {
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        display: none;
        left: 50%;
        pointer-events: none;
        position: absolute;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .gm-control-active>img:nth-child(1) {
        display: block
    }

    .gm-control-active:focus>img:nth-child(1),
    .gm-control-active:hover>img:nth-child(1),
    .gm-control-active:active>img:nth-child(1),
    .gm-control-active:disabled>img:nth-child(1) {
        display: none
    }

    .gm-control-active:focus>img:nth-child(2),
    .gm-control-active:hover>img:nth-child(2) {
        display: block
    }

    .gm-control-active:active>img:nth-child(3) {
        display: block
    }

    .gm-control-active:disabled>img:nth-child(4) {
        display: block
    }

    sentinel {}
</style>
<link type="text/css" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans:400,500,700|Google+Sans+Text:400&amp;lang=ru">
<link type="text/css" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Google+Sans+Text:400&amp;text=%E2%86%90%E2%86%92%E2%86%91%E2%86%93&amp;lang=ru">
<style>
    .gm-ui-hover-effect {
        opacity: .6
    }

    .gm-ui-hover-effect:hover {
        opacity: 1
    }

    .gm-ui-hover-effect>span {
        background-color: #000
    }

    @media (forced-colors:active),
    (prefers-contrast:more) {
        .gm-ui-hover-effect>span {
            background-color: ButtonText
        }
    }

    sentinel {}
</style>
<style>
    .gm-style .gm-style-cc a,
    .gm-style .gm-style-cc button,
    .gm-style .gm-style-cc span,
    .gm-style .gm-style-mtc div {
        font-size: 10px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    .gm-style .gm-style-cc a,
    .gm-style .gm-style-cc button,
    .gm-style .gm-style-cc span {
        outline-offset: 3px
    }

    sentinel {}
</style>
<style>
    @media print {

        .gm-style .gmnoprint,
        .gmnoprint {
            display: none
        }
    }

    @media screen {

        .gm-style .gmnoscreen,
        .gmnoscreen {
            display: none
        }
    }
</style>
<style>
    .gm-style-moc {
        background-color: rgba(0, 0, 0, .45);
        pointer-events: none;
        text-align: center;
        -webkit-transition: opacity ease-in-out;
        transition: opacity ease-in-out
    }

    .gm-style-mot {
        color: white;
        font-family: Roboto, Arial, sans-serif;
        font-size: 22px;
        margin: 0;
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%)
    }

    sentinel {}
</style>
<style>
    .gm-style img {
        max-width: none;
    }

    .gm-style {
        font: 400 11px Roboto, Arial, sans-serif;
        text-decoration: none;
    }
</style>
<style id="wp-emoji-styles-inline-css" type="text/css">
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
</style>
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
<link property="stylesheet" rel="stylesheet" id="trx_addons-sc_googlemap-css"
    href="<?= get_template_directory_uri(); ?>/assets/css/googlemap.css" type="text/css" media="all">
<link property="stylesheet" rel="stylesheet" id="trx_addons-sc_googlemap-responsive-css"
    href="<?= get_template_directory_uri(); ?>/assets/css/googlemap.responsive.css" type="text/css"
    media="(max-width:1023px)">
<link property="stylesheet" rel="stylesheet" id="trx_addons-widget_custom_links-css"
    href="<?= get_template_directory_uri(); ?>/assets/css/custom_links.css" type="text/css" media="all">
<link property="stylesheet" rel="stylesheet" id="integro-contact-form-7-css"
    href="<?= get_template_directory_uri(); ?>/assets/css/contact-form-7.css" type="text/css" media="all">
<?php
get_header();
?>
<style>
    .header_position_over .top_panel {
        position: relative;
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

            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-628d1e6e elementor-section-full_width elementor-section-height-default elementor-section-height-default sc_fly_static trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited"
                data-id="628d1e6e" data-element_type="section">
                <div class="elementor-container elementor-column-gap-extended" bis_skin_checked="1">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-28f5b58a sc_layouts_column_align_center sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited"
                        data-id="28f5b58a" data-element_type="column" bis_skin_checked="1">
                        <div class="elementor-widget-wrap elementor-element-populated" bis_skin_checked="1">
                            <div class="sc_layouts_item elementor-element elementor-element-31aa6e4e sc_fly_static elementor-widget elementor-widget-spacer trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited"
                                data-id="31aa6e4e" data-element_type="widget" data-widget_type="spacer.default"
                                bis_skin_checked="1">
                                <div class="elementor-widget-container" bis_skin_checked="1">
                                    <div class="elementor-spacer" bis_skin_checked="1">
                                        <div class="elementor-spacer-inner" bis_skin_checked="1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc_layouts_item elementor-element elementor-element-2dd62c74 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_title trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited"
                                data-id="2dd62c74" data-element_type="widget"
                                data-widget_type="trx_sc_layouts_title.default" bis_skin_checked="1">
                                <div class="elementor-widget-container" bis_skin_checked="1">
                                    <div class="sc_layouts_title sc_align_center with_content without_image without_tint"
                                        bis_skin_checked="1">
                                        <div class="sc_layouts_title_content" bis_skin_checked="1">
                                            <div class="sc_layouts_title_title" bis_skin_checked="1">
                                                <h1 class="sc_layouts_title_caption"><?php echo get_field('title'); ?>
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc_layouts_item elementor-element elementor-element-2c3edce3 sc_fly_static elementor-widget elementor-widget-spacer trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited"
                                data-id="2c3edce3" data-element_type="widget" data-widget_type="spacer.default"
                                bis_skin_checked="1">
                                <div class="elementor-widget-container" bis_skin_checked="1">
                                    <div class="elementor-spacer" bis_skin_checked="1">
                                        <div class="elementor-spacer-inner" bis_skin_checked="1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc_layouts_item elementor-element elementor-element-1f864d6 elementor-view-default sc_fly_static elementor-widget elementor-widget-icon trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited"
                                data-id="1f864d6" data-element_type="widget" data-widget_type="icon.default"
                                bis_skin_checked="1">
                                <div class="elementor-widget-container" bis_skin_checked="1">
                                    <div class="elementor-icon-wrapper" bis_skin_checked="1">
                                        <div class="elementor-icon" bis_skin_checked="1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14.626" height="8.639"
                                                viewBox="0 0 14.626 8.639" style="fill: white;">
                                                <g transform="translate(0 -70.698)">
                                                    <g transform="translate(0 100.698)">
                                                        <path
                                                            d="M14.392,101.42l-.479-.482a.8.8,0,0,0-1.132,0L7.316,106.4l-5.472-5.472a.8.8,0,0,0-1.132,0l-.479.479a.8.8,0,0,0,0,1.131l6.515,6.538a.818.818,0,0,0,.567.257h0a.818.818,0,0,0,.566-.257l6.508-6.52a.808.808,0,0,0,.234-.571A.8.8,0,0,0,14.392,101.42Z"
                                                            transform="translate(0 -130.698)"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="page_content_wrap" bis_skin_checked="1">
                <div class="content_wrap_fullscreen" bis_skin_checked="1">
                    <div class="content" bis_skin_checked="1">
                        <a id="content_skip_link_anchor" class="integro_skip_link_anchor" href="#"></a>
                        <article id="post-1453"
                            class="post_item_single post_type_page post-1453 page type-page status-publish hentry">
                            <div class="post_content entry-content" bis_skin_checked="1">
                                <div data-elementor-type="wp-page" data-elementor-id="1453"
                                    class="elementor elementor-1453" bis_skin_checked="1">
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-fdd8feb elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited"
                                        data-id="fdd8feb" data-element_type="section">
                                        <div class="elementor-background-overlay" bis_skin_checked="1"></div>
                                        <div class="elementor-container elementor-column-gap-extended"
                                            bis_skin_checked="1">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-53b5916f sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited"
                                                data-id="53b5916f" data-element_type="column" bis_skin_checked="1">
                                                <div class="elementor-widget-wrap elementor-element-populated"
                                                    bis_skin_checked="1">
                                                    <div class="elementor-element elementor-element-c1bba76 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited"
                                                        data-id="c1bba76" data-element_type="widget"
                                                        data-widget_type="spacer.default" bis_skin_checked="1">
                                                        <div class="elementor-widget-container" bis_skin_checked="1">
                                                            <div class="elementor-spacer" bis_skin_checked="1">
                                                                <div class="elementor-spacer-inner"
                                                                    bis_skin_checked="1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-e0c3a41 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited"
                                        data-id="e0c3a41" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-extended"
                                            bis_skin_checked="1">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a474504 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited"
                                                data-id="a474504" data-element_type="column" bis_skin_checked="1">
                                                <div class="elementor-widget-wrap elementor-element-populated"
                                                    bis_skin_checked="1">
                                                    <div class="elementor-element elementor-element-19ebe6b8 sc_fly_static elementor-widget elementor-widget-trx_sc_title trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited"
                                                        data-id="19ebe6b8" data-element_type="widget"
                                                        data-widget_type="trx_sc_title.default" bis_skin_checked="1">
                                                        <div class="elementor-widget-container" bis_skin_checked="1">
                                                            <div class="sc_title sc_title_default" bis_skin_checked="1">
                                                                <span
                                                                    class="sc_item_subtitle sc_title_subtitle sc_item_subtitle_above sc_item_title_style_default">Contact
                                                                    Us</span>
                                                                <h1
                                                                    class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag">
                                                                    <span
                                                                        class="sc_item_title_text"><?php echo get_field('sub_title'); ?></span>
                                                                </h1>
                                                                <div class="sc_item_descr sc_title_descr"
                                                                    bis_skin_checked="1">
                                                                    <p><?php echo get_field('context'); ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-25e15640 sc_fly_static elementor-widget elementor-widget-spacer trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited"
                                                        data-id="25e15640" data-element_type="widget"
                                                        data-widget_type="spacer.default" bis_skin_checked="1">
                                                        <div class="elementor-widget-container" bis_skin_checked="1">
                                                            <div class="elementor-spacer" bis_skin_checked="1">
                                                                <div class="elementor-spacer-inner"
                                                                    bis_skin_checked="1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-3bdd940e sc_fly_static elementor-widget elementor-widget-trx_sc_icons trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited"
                                                        data-id="3bdd940e" data-element_type="widget"
                                                        data-widget_type="trx_sc_icons.default" bis_skin_checked="1">
                                                        <div class="elementor-widget-container" bis_skin_checked="1">
                                                            <?php
                                                            $data = new WP_Query(
                                                                array(
                                                                    'post_type' => 'setting',
                                                                    'posts_per_page' => 1,
                                                                )
                                                            );
                                                            if ($data->have_posts()):
                                                                while ($data->have_posts()):
                                                                    $data->the_post();
                                                                    ?>
                                                                    <div class="sc_icons sc_icons_simple sc_icons_size_small sc_align_none"
                                                                        bis_skin_checked="1">
                                                                        <div class="sc_icons_item with_more"
                                                                            bis_skin_checked="1">
                                                                            <div class="sc_icons_icon sc_icon_type_ icon-marker"
                                                                                bis_skin_checked="1"><span
                                                                                    class="sc_icon_type_ icon-marker"></span>
                                                                            </div>
                                                                            <div class="sc_icons_item_details"
                                                                                bis_skin_checked="1">
                                                                                <div class="sc_icons_item_description"
                                                                                    bis_skin_checked="1">
                                                                                    <span><?php echo get_field('address'); ?></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sc_icons_item sc_icons_item_linked with_more"
                                                                            bis_skin_checked="1">
                                                                            <div class="sc_icons_icon sc_icon_type_ icon-iphone"
                                                                                bis_skin_checked="1"><span
                                                                                    class="sc_icon_type_ icon-iphone"></span>
                                                                            </div>
                                                                            <div class="sc_icons_item_details"
                                                                                bis_skin_checked="1"><a
                                                                                    href="tel:<?php echo get_field('phone'); ?>"
                                                                                    class="sc_icons_item_more_link">
                                                                                    <span
                                                                                        class="link_text"><?php echo get_field('phone'); ?>
                                                                                        69</span><span class="link_icon"></span>
                                                                                </a><a
                                                                                    href="tel:<?php echo get_field('phone'); ?>"
                                                                                    class="sc_icons_item_link">
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="sc_icons_item with_more"
                                                                            bis_skin_checked="1">
                                                                            <div class="sc_icons_icon sc_icon_type_ icon-envelope-2"
                                                                                bis_skin_checked="1"><span
                                                                                    class="sc_icon_type_ icon-envelope-2"></span>
                                                                            </div>
                                                                            <div class="sc_icons_item_details"
                                                                                bis_skin_checked="1">
                                                                                <div class="sc_icons_item_description"
                                                                                    bis_skin_checked="1"><span><a
                                                                                            href="mailto:<?php echo get_field('email'); ?>"
                                                                                            class="underline_hover"><?php echo get_field('email'); ?></a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php endwhile;
                                                                wp_reset_postdata();
                                                            endif; ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-213f3c52 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited"
                                                data-id="213f3c52" data-element_type="column" bis_skin_checked="1">
                                                <div class="elementor-widget-wrap elementor-element-populated"
                                                    bis_skin_checked="1">
                                                    <div class="elementor-element elementor-element-4fc62fe5 sc_fly_static elementor-widget elementor-widget-spacer trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited"
                                                        data-id="4fc62fe5" data-element_type="widget"
                                                        data-widget_type="spacer.default" bis_skin_checked="1">
                                                        <div class="elementor-widget-container" bis_skin_checked="1">
                                                            <div class="elementor-spacer" bis_skin_checked="1">
                                                                <div class="elementor-spacer-inner"
                                                                    bis_skin_checked="1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-19153691 sc_fly_static elementor-widget elementor-widget-trx_sc_contact_form_7 trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited"
                                                        data-id="19153691" data-element_type="widget"
                                                        data-widget_type="trx_sc_contact_form_7.default"
                                                        bis_skin_checked="1">
                                                        <div class="elementor-widget-container" bis_skin_checked="1">
                                                            <div class="wpcf7 js alert_inited" id="wpcf7-f1324-p1453-o1"
                                                                lang="en-US" dir="ltr" bis_skin_checked="1">
                                                                <div class="screen-reader-response"
                                                                    bis_skin_checked="1">
                                                                    <p role="status" aria-live="polite"
                                                                        aria-atomic="true"></p>
                                                                    <ul></ul>
                                                                </div>
                                                                <?php if (have_rows('form_items')) {
                                                                    the_row(); ?>

                                                                    <form
                                                                        action="<?php echo get_template_directory_uri(); ?>/mail/contact_mail.php"
                                                                        method="post" class="wpcf7-form init"
                                                                        aria-label="Contact form" novalidate="novalidate"
                                                                        data-status="init" data-inited-validation="1">

                                                                        <div class="form-style-3" bis_skin_checked="1">
                                                                            <div class="columns_wrap" bis_skin_checked="1">
                                                                                <div class="column-1_2"
                                                                                    bis_skin_checked="1">
                                                                                    <p><span class="style-line icon-name"><span
                                                                                                class="wpcf7-form-control-wrap"
                                                                                                data-name="your-name"><input
                                                                                                    size="40"
                                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required fill_inited"
                                                                                                    aria-required="true"
                                                                                                    aria-invalid="false"
                                                                                                    placeholder="<?php echo get_sub_field('name'); ?>"
                                                                                                    value="" type="text"
                                                                                                    name="fullname"><span
                                                                                                    class="line"></span></span></span>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="column-1_2"
                                                                                    bis_skin_checked="1">
                                                                                    <p><span class="style-line icon-email"><span
                                                                                                class="wpcf7-form-control-wrap"
                                                                                                data-name="your-email"><input
                                                                                                    size="40"
                                                                                                    class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email fill_inited"
                                                                                                    aria-required="true"
                                                                                                    aria-invalid="false"
                                                                                                    placeholder="<?php echo get_sub_field('email'); ?>"
                                                                                                    value="" type="email"
                                                                                                    name="email"><span
                                                                                                    class="line"></span></span></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="columns_wrap" bis_skin_checked="1">
                                                                                <div class="column-1_2"
                                                                                    bis_skin_checked="1">
                                                                                    <p><span class="style-line icon-phone"><span
                                                                                                class="wpcf7-form-control-wrap"
                                                                                                data-name="phone"><input
                                                                                                    size="40"
                                                                                                    class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel fill_inited"
                                                                                                    aria-required="true"
                                                                                                    aria-invalid="false"
                                                                                                    placeholder="<?php echo get_sub_field('phone'); ?>"
                                                                                                    value="" type="tel"
                                                                                                    name="phone"><span
                                                                                                    class="line"></span></span></span>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="column-1_2"
                                                                                    bis_skin_checked="1">
                                                                                    <p><span
                                                                                            class="style-line icon-subject"><span
                                                                                                class="wpcf7-form-control-wrap"
                                                                                                data-name="subject"><input
                                                                                                    size="40"
                                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required fill_inited"
                                                                                                    aria-required="true"
                                                                                                    aria-invalid="false"
                                                                                                    placeholder="<?php echo get_sub_field('subject'); ?>"
                                                                                                    value="" type="text"
                                                                                                    name="subject"><span
                                                                                                    class="line"></span></span></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="columns_wrap margin-bottom"
                                                                                bis_skin_checked="1">
                                                                                <div class="column-1_1"
                                                                                    bis_skin_checked="1">
                                                                                    <p><span
                                                                                            class="style-line icon-textarea"><span
                                                                                                class="wpcf7-form-control-wrap"
                                                                                                data-name="your-message"><textarea
                                                                                                    cols="40" rows="10"
                                                                                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required fill_inited"
                                                                                                    aria-required="true"
                                                                                                    aria-invalid="false"
                                                                                                    placeholder="<?php echo get_sub_field('message'); ?>"
                                                                                                    name="message"></textarea><span
                                                                                                    class="line"></span></span></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <p><span class="wpcf7-submit-style"><input
                                                                                        class="wpcf7-form-control wpcf7-submit has-spinner"
                                                                                        type="submit"
                                                                                        value="<?php echo get_sub_field('button'); ?>"><span
                                                                                        class="submit-style-in"></span></span>

                                                                            </p>
                                                                        </div>
                                                                        <input type="hidden" name="sehife"
                                                                            value="<?php echo "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
                                                                        <div class="wpcf7-response-output"
                                                                            aria-hidden="true" bis_skin_checked="1"></div>
                                                                    </form>

                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section style="height: 100%;width: 100%;"
                                        class="elementor-section elementor-top-section elementor-element elementor-element-69aae948 elementor-section-full_width elementor-section-height-default elementor-section-height-default sc_fly_static trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited"
                                        data-id="69aae948" data-element_type="section">
                                        <!--                                    <div class="elementor-container elementor-column-gap-extended"-->
                                        <!--                                         bis_skin_checked="1">-->
                                        <!--                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2df77f4d sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited"-->
                                        <!--                                             data-id="2df77f4d" data-element_type="column" bis_skin_checked="1">-->
                                        <!--                                            <div class="elementor-widget-wrap elementor-element-populated"-->
                                        <!--                                                 bis_skin_checked="1">-->
                                        <!--                                                <div class="elementor-element elementor-element-3b36ec77 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited"-->
                                        <!--                                                     data-id="3b36ec77" data-element_type="widget"-->
                                        <!--                                                     data-widget_type="spacer.default" bis_skin_checked="1">-->
                                        <!--                                                    <div class="elementor-widget-container" bis_skin_checked="1">-->
                                        <!--                                                        <div class="elementor-spacer" bis_skin_checked="1">-->
                                        <!--                                                            <div class="elementor-spacer-inner"-->
                                        <!--                                                                 bis_skin_checked="1"></div>-->
                                        <!--                                                        </div>-->
                                        <!--                                                    </div>-->
                                        <!--                                                </div>-->
                                        <!--                                                <div class="elementor-element elementor-element-7a268d1d sc_fly_static elementor-widget elementor-widget-trx_sc_googlemap trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited"-->
                                        <!--                                                     data-id="7a268d1d" data-element_type="widget"-->
                                        <!--                                                     data-widget_type="trx_sc_googlemap.default" style=" bottom: -100%"-->
                                        <!--                                                     bis_skin_checked="1">-->
                                        <!--                                                    <div class="elementor-widget-container" bis_skin_checked="1" >-->
                                        <!---->
                                        <!--                                                        <div id="sc_googlemap_614943330_wrap"-->
                                        <!--                                                             class="sc_googlemap_wrap ready" bis_skin_checked="1">-->
                                        <!--                                                            <div id="sc_googlemap_614943330"-->
                                        <!--                                                                 class="sc_item_content sc_map sc_googlemap sc_googlemap_default trx_addons_inline_796519627 inited"-->
                                        <!--                                                                 data-zoom="12" data-center="" data-style="grey"-->
                                        <!--                                                                 data-cluster-icon=""-->
                                        <!--                                                                 style="position: relative; overflow: visible;"-->
                                        <!--                                                                 bis_skin_checked="1">-->
                                        <!--                                                                <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"-->
                                        <!--                                                                     bis_skin_checked="1">-->
                                        <!--                                                                    <div bis_skin_checked="1"><button-->
                                        <!--                                                                                draggable="false"-->
                                        <!--                                                                                aria-label="Быстрые клавиши"-->
                                        <!--                                                                                title="Быстрые клавиши" type="button"-->
                                        <!--                                                                                style="background: none transparent; display: block; border: none; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; z-index: 1000002; outline-offset: 3px; right: 0px; bottom: 0px; transform: translateX(100%);"></button>-->
                                        <!--                                                                    </div>-->
                                        <!--                                                                    <div tabindex="0" aria-label="Карта"-->
                                        <!--                                                                         aria-roledescription="карта" role="region"-->
                                        <!--                                                                         aria-describedby="61C15B31-B15A-4CC5-AD79-BFDA4E5D7A27"-->
                                        <!--                                                                         style="position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"-->
                                        <!--                                                                         bis_skin_checked="1">-->
                                        <!--                                                                        <div id="61C15B31-B15A-4CC5-AD79-BFDA4E5D7A27"-->
                                        <!--                                                                             style="display: none;"-->
                                        <!--                                                                             bis_skin_checked="1">-->
                                        <!--                                                                            <div class="LGLeeN-keyboard-shortcuts-view"-->
                                        <!--                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                <table>-->
                                        <!--                                                                                    <tbody>-->
                                        <!--                                                                                    <tr>-->
                                        <!--                                                                                        <td><kbd-->
                                        <!--                                                                                                    aria-label="Стрелка влево">←</kbd>-->
                                        <!--                                                                                        </td>-->
                                        <!--                                                                                        <td-->
                                        <!--                                                                                                aria-label="Переместить влево.">-->
                                        <!--                                                                                            Переместить влево-->
                                        <!--                                                                                        </td>-->
                                        <!--                                                                                    </tr>-->
                                        <!--                                                                                    <tr>-->
                                        <!--                                                                                        <td><kbd-->
                                        <!--                                                                                                    aria-label="Стрелка вправо">→</kbd>-->
                                        <!--                                                                                        </td>-->
                                        <!--                                                                                        <td-->
                                        <!--                                                                                                aria-label="Переместить вправо.">-->
                                        <!--                                                                                            Переместить вправо-->
                                        <!--                                                                                        </td>-->
                                        <!--                                                                                    </tr>-->
                                        <!--                                                                                    <tr>-->
                                        <!--                                                                                        <td><kbd-->
                                        <!--                                                                                                    aria-label="Стрелка вверх">↑</kbd>-->
                                        <!--                                                                                        </td>-->
                                        <!--                                                                                        <td-->
                                        <!--                                                                                                aria-label="Переместить вверх.">-->
                                        <!--                                                                                            Переместить вверх-->
                                        <!--                                                                                        </td>-->
                                        <!--                                                                                    </tr>-->
                                        <!--                                                                                    <tr>-->
                                        <!--                                                                                        <td><kbd-->
                                        <!--                                                                                                    aria-label="Стрелка вниз">↓</kbd>-->
                                        <!--                                                                                        </td>-->
                                        <!--                                                                                        <td-->
                                        <!--                                                                                                aria-label="Переместить вниз.">-->
                                        <!--                                                                                            Переместить вниз-->
                                        <!--                                                                                        </td>-->
                                        <!--                                                                                    </tr>-->
                                        <!--                                                                                    <tr>-->
                                        <!--                                                                                        <td><kbd>+</kbd></td>-->
                                        <!--                                                                                        <td-->
                                        <!--                                                                                                aria-label="Приблизить.">-->
                                        <!--                                                                                            Приблизить</td>-->
                                        <!--                                                                                    </tr>-->
                                        <!--                                                                                    <tr>-->
                                        <!--                                                                                        <td><kbd>-</kbd></td>-->
                                        <!--                                                                                        <td-->
                                        <!--                                                                                                aria-label="Уменьшить.">-->
                                        <!--                                                                                            Уменьшить</td>-->
                                        <!--                                                                                    </tr>-->
                                        <!--                                                                                    <tr>-->
                                        <!--                                                                                        <td><kbd>Home</kbd></td>-->
                                        <!--                                                                                        <td-->
                                        <!--                                                                                                aria-label="Переместить влево на 75 %.">-->
                                        <!--                                                                                            Переместить влево на-->
                                        <!--                                                                                            75 %</td>-->
                                        <!--                                                                                    </tr>-->
                                        <!--                                                                                    <tr>-->
                                        <!--                                                                                        <td><kbd>End</kbd></td>-->
                                        <!--                                                                                        <td-->
                                        <!--                                                                                                aria-label="Переместить вправо на 75 %.">-->
                                        <!--                                                                                            Переместить вправо-->
                                        <!--                                                                                            на 75 %</td>-->
                                        <!--                                                                                    </tr>-->
                                        <!--                                                                                    <tr>-->
                                        <!--                                                                                        <td><kbd>Предыдущая-->
                                        <!--                                                                                                страница</kbd>-->
                                        <!--                                                                                        </td>-->
                                        <!--                                                                                        <td-->
                                        <!--                                                                                                aria-label="Переместить вверх на 75 %.">-->
                                        <!--                                                                                            Переместить вверх на-->
                                        <!--                                                                                            75 %</td>-->
                                        <!--                                                                                    </tr>-->
                                        <!--                                                                                    <tr>-->
                                        <!--                                                                                        <td><kbd>Следующая-->
                                        <!--                                                                                                страница</kbd>-->
                                        <!--                                                                                        </td>-->
                                        <!--                                                                                        <td-->
                                        <!--                                                                                                aria-label="Переместить вниз на 75 %.">-->
                                        <!--                                                                                            Переместить вниз на-->
                                        <!--                                                                                            75 %</td>-->
                                        <!--                                                                                    </tr>-->
                                        <!--                                                                                    </tbody>-->
                                        <!--                                                                                </table>-->
                                        <!--                                                                            </div>-->
                                        <!--                                                                        </div>-->
                                        <!--                                                                    </div>-->
                                        <!--                                                                    <div class="gm-style"-->
                                        <!--                                                                         style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"-->
                                        <!--                                                                         bis_skin_checked="1">-->
                                        <!--                                                                        <div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"-->
                                        <!--                                                                             bis_skin_checked="1">-->
                                        <!--                                                                            <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px, 0px);"-->
                                        <!--                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"-->
                                        <!--                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 0;"-->
                                        <!--                                                                                         bis_skin_checked="1">-->
                                        <!--                                                                                        <div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -164, -25);"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: -256px; top: -512px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: 0px; top: -512px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: 256px; top: -512px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: 512px; top: -512px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: 768px; top: -512px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: 768px; top: -256px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: 768px; top: 0px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: 768px; top: 256px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; left: -512px; top: -512px; width: 256px; height: 256px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                                <div style="width: 256px; height: 256px;"-->
                                        <!--                                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                                </div>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                    </div>-->
                                        <!--                                                                                </div>-->
                                        <!--                                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"-->
                                        <!--                                                                                     bis_skin_checked="1"></div>-->
                                        <!--                                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"-->
                                        <!--                                                                                     bis_skin_checked="1"></div>-->
                                        <!--                                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"-->
                                        <!--                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                    <div class="map_marker"-->
                                        <!--                                                                                         style="left: 40.3829419px; top: 49.7965849px;"-->
                                        <!--                                                                                         bis_skin_checked="1">-->
                                        <!--                                                                                        <div bis_skin_checked="1">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div bis_skin_checked="1">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                    </div>-->
                                        <!--                                                                                </div>-->
                                        <!--                                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 0;"-->
                                        <!--                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                    <div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -164, -25);"-->
                                        <!--                                                                                         bis_skin_checked="1">-->
                                        <!--                                                                                        <div style="position: absolute; left: 768px; top: -512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2049!3i1360!4i256!2m3!1e0!2sm!3i696444129!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=84371"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2047!3i1363!4i256!2m3!1e0!2sm!3i696444153!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=44484"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: 768px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2049!3i1361!4i256!2m3!1e0!2sm!3i696444129!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=81247"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2048!3i1363!4i256!2m3!1e0!2sm!3i696444153!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=41610"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2047!3i1361!4i256!2m3!1e0!2sm!3i696444153!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=50732"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2045!3i1362!4i256!2m3!1e0!2sm!3i696444153!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=53356"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: 768px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2049!3i1362!4i256!2m3!1e0!2sm!3i696444129!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=78123"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: -512px; top: -512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2044!3i1360!4i256!2m3!1e0!2sm!3i696444153!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=62478"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2048!3i1362!4i256!2m3!1e0!2sm!3i696444153!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=44734"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2048!3i1361!4i256!2m3!1e0!2sm!3i696444153!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=47858"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2046!3i1363!4i256!2m3!1e0!2sm!3i696444153!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=47358"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2045!3i1361!4i256!2m3!1e0!2sm!3i696444153!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=56480"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: 512px; top: -512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2048!3i1360!4i256!2m3!1e0!2sm!3i696444129!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=87245"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2046!3i1362!4i256!2m3!1e0!2sm!3i696444153!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=50482"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2045!3i1363!4i256!2m3!1e0!2sm!3i696444153!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=50232"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2046!3i1361!4i256!2m3!1e0!2sm!3i696444153!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=53606"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2047!3i1362!4i256!2m3!1e0!2sm!3i696444153!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=47608"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2044!3i1361!4i256!2m3!1e0!2sm!3i696444153!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=59354"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: 768px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2049!3i1363!4i256!2m3!1e0!2sm!3i696444129!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=74999"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: 256px; top: -512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2047!3i1360!4i256!2m3!1e0!2sm!3i696444153!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=53856"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: 0px; top: -512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2046!3i1360!4i256!2m3!1e0!2sm!3i696444153!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=56730"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: -256px; top: -512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2045!3i1360!4i256!2m3!1e0!2sm!3i696444153!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=59604"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2044!3i1362!4i256!2m3!1e0!2sm!3i696444153!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=56230"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <img draggable="false"-->
                                        <!--                                                                                                 alt=""-->
                                        <!--                                                                                                 role="presentation"-->
                                        <!--                                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2044!3i1363!4i256!2m3!1e0!2sm!3i696444081!3m17!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmwudC5mfHAuczozNnxwLmM6IzAwMDAwMHxwLmw6NDAscy5lOmwudC5zfHAudjpvbnxwLmM6IzAwMDAwMHxwLmw6MTYscy5lOmwuaXxwLnY6b2ZmLHMudDoxfHMuZTpnLmZ8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoxfHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjE3fHAudzoxLjIscy50OjV8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjIwLHMudDoyfHMuZTpnfHAuYzojMDAwMDAwfHAubDoyMSxzLnQ6NDl8cy5lOmcuZnxwLmM6IzAwMDAwMHxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiMwMDAwMDB8cC5sOjI5fHAudzowLjIscy50OjUwfHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOCxzLnQ6NTF8cy5lOmd8cC5jOiMwMDAwMDB8cC5sOjE2LHMudDo0fHMuZTpnfHAuYzojMDAwMDAwfHAubDoxOSxzLnQ6NnxzLmU6Z3xwLmM6IzAwMDAwMHxwLmw6MTc!4e0!5m2!1e3!5f2&amp;key=AIzaSyAnWUaa6sPiSRabR0OELsbeWDFWADdLAWM&amp;token=100305"-->
                                        <!--                                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                    </div>-->
                                        <!--                                                                                </div>-->
                                        <!--                                                                            </div>-->
                                        <!--                                                                            <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"-->
                                        <!--                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px, 0px);"-->
                                        <!--                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"-->
                                        <!--                                                                                         bis_skin_checked="1"></div>-->
                                        <!--                                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"-->
                                        <!--                                                                                         bis_skin_checked="1"></div>-->
                                        <!--                                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"-->
                                        <!--                                                                                         bis_skin_checked="1"><span-->
                                        <!--                                                                                                id="F388C4EB-22BA-494F-A823-328A14B0EB16"-->
                                        <!--                                                                                                style="display: none;">Для-->
                                        <!--                                                                                                навигации используйте-->
                                        <!--                                                                                                клавиши со-->
                                        <!--                                                                                                стрелками.</span></div>-->
                                        <!--                                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"-->
                                        <!--                                                                                         bis_skin_checked="1"></div>-->
                                        <!--                                                                                </div>-->
                                        <!--                                                                            </div>-->
                                        <!--                                                                            <div class="gm-style-moc"-->
                                        <!--                                                                                 style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"-->
                                        <!--                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                <p class="gm-style-mot"></p>-->
                                        <!--                                                                            </div>-->
                                        <!--                                                                        </div><iframe aria-hidden="true"-->
                                        <!--                                                                                      frameborder="0" tabindex="-1"-->
                                        <!--                                                                                      style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none; opacity: 0;"-->
                                        <!--                                                                                      class="integro_resize"></iframe>-->
                                        <!--                                                                        <div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"-->
                                        <!--                                                                             bis_skin_checked="1"></div>-->
                                        <!--                                                                        <div bis_skin_checked="1"></div>-->
                                        <!--                                                                        <div bis_skin_checked="1"></div>-->
                                        <!--                                                                        <div bis_skin_checked="1"></div>-->
                                        <!--                                                                        <div bis_skin_checked="1"></div>-->
                                        <!--                                                                        <div bis_skin_checked="1"><button-->
                                        <!--                                                                                    draggable="false"-->
                                        <!--                                                                                    aria-label="Включить полноэкранный режим"-->
                                        <!--                                                                                    title="Включить полноэкранный режим"-->
                                        <!--                                                                                    type="button" aria-pressed="false"-->
                                        <!--                                                                                    class="gm-control-active gm-fullscreen-control"-->
                                        <!--                                                                                    style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;"><img-->
                                        <!--                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E"-->
                                        <!--                                                                                        alt=""-->
                                        <!--                                                                                        style="height: 18px; width: 18px;"><img-->
                                        <!--                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E"-->
                                        <!--                                                                                        alt=""-->
                                        <!--                                                                                        style="height: 18px; width: 18px;"><img-->
                                        <!--                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E"-->
                                        <!--                                                                                        alt=""-->
                                        <!--                                                                                        style="height: 18px; width: 18px;"></button>-->
                                        <!--                                                                        </div>-->
                                        <!--                                                                        <div bis_skin_checked="1"></div>-->
                                        <!--                                                                        <div bis_skin_checked="1"></div>-->
                                        <!--                                                                        <div bis_skin_checked="1"></div>-->
                                        <!--                                                                        <div bis_skin_checked="1"></div>-->
                                        <!--                                                                        <div bis_skin_checked="1">-->
                                        <!--                                                                            <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom"-->
                                        <!--                                                                                 draggable="false"-->
                                        <!--                                                                                 data-control-width="40"-->
                                        <!--                                                                                 data-control-height="81"-->
                                        <!--                                                                                 style="margin: 10px; user-select: none; position: absolute; bottom: 95px; right: 40px;"-->
                                        <!--                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                <div class="gmnoprint"-->
                                        <!--                                                                                     data-control-width="40"-->
                                        <!--                                                                                     data-control-height="40"-->
                                        <!--                                                                                     style="display: none; position: absolute;"-->
                                        <!--                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                    <div style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 40px; height: 40px;"-->
                                        <!--                                                                                         bis_skin_checked="1"><button-->
                                        <!--                                                                                                draggable="false"-->
                                        <!--                                                                                                aria-label="Повернуть карту по часовой стрелке"-->
                                        <!--                                                                                                title="Повернуть карту по часовой стрелке"-->
                                        <!--                                                                                                type="button"-->
                                        <!--                                                                                                class="gm-control-active"-->
                                        <!--                                                                                                style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px;"><img-->
                                        <!--                                                                                                    alt=""-->
                                        <!--                                                                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"-->
                                        <!--                                                                                                    style="width: 20px; height: 20px;"><img-->
                                        <!--                                                                                                    alt=""-->
                                        <!--                                                                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"-->
                                        <!--                                                                                                    style="width: 20px; height: 20px;"><img-->
                                        <!--                                                                                                    alt=""-->
                                        <!--                                                                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"-->
                                        <!--                                                                                                    style="width: 20px; height: 20px;"></button>-->
                                        <!--                                                                                        <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                        </div><button-->
                                        <!--                                                                                                draggable="false"-->
                                        <!--                                                                                                aria-label="Повернуть карту против часовой стрелки"-->
                                        <!--                                                                                                title="Повернуть карту против часовой стрелки"-->
                                        <!--                                                                                                type="button"-->
                                        <!--                                                                                                class="gm-control-active"-->
                                        <!--                                                                                                style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px; transform: scaleX(-1);"><img-->
                                        <!--                                                                                                    alt=""-->
                                        <!--                                                                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"-->
                                        <!--                                                                                                    style="width: 20px; height: 20px;"><img-->
                                        <!--                                                                                                    alt=""-->
                                        <!--                                                                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"-->
                                        <!--                                                                                                    style="width: 20px; height: 20px;"><img-->
                                        <!--                                                                                                    alt=""-->
                                        <!--                                                                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"-->
                                        <!--                                                                                                    style="width: 20px; height: 20px;"></button>-->
                                        <!--                                                                                        <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                        </div><button-->
                                        <!--                                                                                                draggable="false"-->
                                        <!--                                                                                                aria-label="Изменить угол обзора"-->
                                        <!--                                                                                                title="Изменить угол обзора"-->
                                        <!--                                                                                                type="button"-->
                                        <!--                                                                                                class="gm-tilt gm-control-active"-->
                                        <!--                                                                                                style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; top: 0px; left: 0px; overflow: hidden; width: 40px; height: 40px;"><img-->
                                        <!--                                                                                                    alt=""-->
                                        <!--                                                                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E"-->
                                        <!--                                                                                                    style="width: 18px;"><img-->
                                        <!--                                                                                                    alt=""-->
                                        <!--                                                                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E"-->
                                        <!--                                                                                                    style="width: 18px;"><img-->
                                        <!--                                                                                                    alt=""-->
                                        <!--                                                                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E"-->
                                        <!--                                                                                                    style="width: 18px;"></button>-->
                                        <!--                                                                                    </div>-->
                                        <!--                                                                                </div>-->
                                        <!--                                                                                <div class="gmnoprint"-->
                                        <!--                                                                                     data-control-width="40"-->
                                        <!--                                                                                     data-control-height="81"-->
                                        <!--                                                                                     style="position: absolute; left: 0px; top: 0px;"-->
                                        <!--                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                    <div draggable="false"-->
                                        <!--                                                                                         style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;"-->
                                        <!--                                                                                         bis_skin_checked="1"><button-->
                                        <!--                                                                                                draggable="false"-->
                                        <!--                                                                                                aria-label="Увеличить"-->
                                        <!--                                                                                                title="Увеличить"-->
                                        <!--                                                                                                type="button"-->
                                        <!--                                                                                                class="gm-control-active"-->
                                        <!--                                                                                                style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img-->
                                        <!--                                                                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E"-->
                                        <!--                                                                                                    alt=""-->
                                        <!--                                                                                                    style="height: 18px; width: 18px;"><img-->
                                        <!--                                                                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E"-->
                                        <!--                                                                                                    alt=""-->
                                        <!--                                                                                                    style="height: 18px; width: 18px;"><img-->
                                        <!--                                                                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E"-->
                                        <!--                                                                                                    alt=""-->
                                        <!--                                                                                                    style="height: 18px; width: 18px;"><img-->
                                        <!--                                                                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23d1d1d1%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E"-->
                                        <!--                                                                                                    alt=""-->
                                        <!--                                                                                                    style="height: 18px; width: 18px;"></button>-->
                                        <!--                                                                                        <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                        </div><button-->
                                        <!--                                                                                                draggable="false"-->
                                        <!--                                                                                                aria-label="Уменьшить"-->
                                        <!--                                                                                                title="Уменьшить"-->
                                        <!--                                                                                                type="button"-->
                                        <!--                                                                                                class="gm-control-active"-->
                                        <!--                                                                                                style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img-->
                                        <!--                                                                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E"-->
                                        <!--                                                                                                    alt=""-->
                                        <!--                                                                                                    style="height: 18px; width: 18px;"><img-->
                                        <!--                                                                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E"-->
                                        <!--                                                                                                    alt=""-->
                                        <!--                                                                                                    style="height: 18px; width: 18px;"><img-->
                                        <!--                                                                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E"-->
                                        <!--                                                                                                    alt=""-->
                                        <!--                                                                                                    style="height: 18px; width: 18px;"><img-->
                                        <!--                                                                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23d1d1d1%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E"-->
                                        <!--                                                                                                    alt=""-->
                                        <!--                                                                                                    style="height: 18px; width: 18px;"></button>-->
                                        <!--                                                                                    </div>-->
                                        <!--                                                                                </div>-->
                                        <!--                                                                            </div>-->
                                        <!--                                                                        </div>-->
                                        <!--                                                                        <div bis_skin_checked="1">-->
                                        <!--                                                                            <div style="margin: 0px 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"-->
                                        <!--                                                                                 bis_skin_checked="1"><a-->
                                        <!--                                                                                        target="_blank" rel="noopener"-->
                                        <!--                                                                                        title="Открыть эту область в Google Картах (в новом окне)"-->
                                        <!--                                                                                        aria-label="Открыть эту область в Google Картах (в новом окне)"-->
                                        <!--                                                                                        href="https://maps.google.com/maps?ll=40.3829419,49.7965849&amp;z=12&amp;t=m&amp;hl=ru-RU&amp;gl=US&amp;mapclient=apiv3"-->
                                        <!--                                                                                        style="display: inline;">-->
                                        <!--                                                                                    <div style="width: 66px; height: 26px;"-->
                                        <!--                                                                                         bis_skin_checked="1"><img-->
                                        <!--                                                                                                alt="Google"-->
                                        <!--                                                                                                src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2069%2029%22%3E%3Cg%20opacity%3D%22.3%22%20fill%3D%22%23000%22%20stroke%3D%22%23000%22%20stroke-width%3D%221.5%22%3E%3Cpath%20d%3D%22M17.4706%207.33616L18.0118%206.79504%2017.4599%206.26493C16.0963%204.95519%2014.2582%203.94522%2011.7008%203.94522c-4.613699999999999%200-8.50262%203.7551699999999997-8.50262%208.395779999999998C3.19818%2016.9817%207.0871%2020.7368%2011.7008%2020.7368%2014.1712%2020.7368%2016.0773%2019.918%2017.574%2018.3689%2019.1435%2016.796%2019.5956%2014.6326%2019.5956%2012.957%2019.5956%2012.4338%2019.5516%2011.9316%2019.4661%2011.5041L19.3455%2010.9012H10.9508V14.4954H15.7809C15.6085%2015.092%2015.3488%2015.524%2015.0318%2015.8415%2014.403%2016.4629%2013.4495%2017.1509%2011.7008%2017.1509%209.04835%2017.1509%206.96482%2015.0197%206.96482%2012.341%206.96482%209.66239%209.04835%207.53119%2011.7008%207.53119%2013.137%207.53119%2014.176%208.09189%2014.9578%208.82348L15.4876%209.31922%2016.0006%208.80619%2017.4706%207.33616z%22/%3E%3Cpath%20d%3D%22M24.8656%2020.7286C27.9546%2020.7286%2030.4692%2018.3094%2030.4692%2015.0594%2030.4692%2011.7913%2027.953%209.39009%2024.8656%209.39009%2021.7783%209.39009%2019.2621%2011.7913%2019.2621%2015.0594c0%203.25%202.514499999999998%205.6692%205.6035%205.6692zM24.8656%2012.8282C25.8796%2012.8282%2026.8422%2013.6652%2026.8422%2015.0594%2026.8422%2016.4399%2025.8769%2017.2905%2024.8656%2017.2905%2023.8557%2017.2905%2022.8891%2016.4331%2022.8891%2015.0594%2022.8891%2013.672%2023.853%2012.8282%2024.8656%2012.8282z%22/%3E%3Cpath%20d%3D%22M35.7511%2017.2905v0H35.7469C34.737%2017.2905%2033.7703%2016.4331%2033.7703%2015.0594%2033.7703%2013.672%2034.7343%2012.8282%2035.7469%2012.8282%2036.7608%2012.8282%2037.7234%2013.6652%2037.7234%2015.0594%2037.7234%2016.4439%2036.7554%2017.2961%2035.7511%2017.2905zM35.7387%2020.7286C38.8277%2020.7286%2041.3422%2018.3094%2041.3422%2015.0594%2041.3422%2011.7913%2038.826%209.39009%2035.7387%209.39009%2032.6513%209.39009%2030.1351%2011.7913%2030.1351%2015.0594%2030.1351%2018.3102%2032.6587%2020.7286%2035.7387%2020.7286z%22/%3E%3Cpath%20d%3D%22M51.953%2010.4357V9.68573H48.3999V9.80826C47.8499%209.54648%2047.1977%209.38187%2046.4808%209.38187%2043.5971%209.38187%2041.0168%2011.8998%2041.0168%2015.0758%2041.0168%2017.2027%2042.1808%2019.0237%2043.8201%2019.9895L43.7543%2020.0168%2041.8737%2020.797%2041.1808%2021.0844%2041.4684%2021.7772C42.0912%2023.2776%2043.746%2025.1469%2046.5219%2025.1469%2047.9324%2025.1469%2049.3089%2024.7324%2050.3359%2023.7376%2051.3691%2022.7367%2051.953%2021.2411%2051.953%2019.2723v-8.8366zm-7.2194%209.9844L44.7334%2020.4196C45.2886%2020.6201%2045.878%2020.7286%2046.4808%2020.7286%2047.1616%2020.7286%2047.7866%2020.5819%2048.3218%2020.3395%2048.2342%2020.7286%2048.0801%2021.0105%2047.8966%2021.2077%2047.6154%2021.5099%2047.1764%2021.7088%2046.5219%2021.7088%2045.61%2021.7088%2045.0018%2021.0612%2044.7336%2020.4201zM46.6697%2012.8282C47.6419%2012.8282%2048.5477%2013.6765%2048.5477%2015.084%2048.5477%2016.4636%2047.6521%2017.2987%2046.6697%2017.2987%2045.6269%2017.2987%2044.6767%2016.4249%2044.6767%2015.084%2044.6767%2013.7086%2045.6362%2012.8282%2046.6697%2012.8282zM55.7387%205.22081v-.75H52.0788V20.4412H55.7387V5.22081z%22/%3E%3Cpath%20d%3D%22M63.9128%2016.0614L63.2945%2015.6492%2062.8766%2016.2637C62.4204%2016.9346%2061.8664%2017.3069%2061.0741%2017.3069%2060.6435%2017.3069%2060.3146%2017.2088%2060.0544%2017.0447%2059.9844%2017.0006%2059.9161%2016.9496%2059.8498%2016.8911L65.5497%2014.5286%2066.2322%2014.2456%2065.9596%2013.5589%2065.7406%2013.0075C65.2878%2011.8%2063.8507%209.39832%2060.8278%209.39832%2057.8445%209.39832%2055.5034%2011.7619%2055.5034%2015.0676%2055.5034%2018.2151%2057.8256%2020.7369%2061.0659%2020.7369%2063.6702%2020.7369%2065.177%2019.1378%2065.7942%2018.2213L66.2152%2017.5963%2065.5882%2017.1783%2063.9128%2016.0614zM61.3461%2012.8511L59.4108%2013.6526C59.7903%2013.0783%2060.4215%2012.7954%2060.9017%2012.7954%2061.067%2012.7954%2061.2153%2012.8161%2061.3461%2012.8511z%22/%3E%3C/g%3E%3Cpath%20d%3D%22M11.7008%2019.9868C7.48776%2019.9868%203.94818%2016.554%203.94818%2012.341%203.94818%208.12803%207.48776%204.69522%2011.7008%204.69522%2014.0331%204.69522%2015.692%205.60681%2016.9403%206.80583L15.4703%208.27586C14.5751%207.43819%2013.3597%206.78119%2011.7008%206.78119%208.62108%206.78119%206.21482%209.26135%206.21482%2012.341%206.21482%2015.4207%208.62108%2017.9009%2011.7008%2017.9009%2013.6964%2017.9009%2014.8297%2017.0961%2015.5606%2016.3734%2016.1601%2015.7738%2016.5461%2014.9197%2016.6939%2013.7454h-4.9931V11.6512h7.0298C18.8045%2012.0207%2018.8456%2012.4724%2018.8456%2012.957%2018.8456%2014.5255%2018.4186%2016.4637%2017.0389%2017.8434%2015.692%2019.2395%2013.9838%2019.9868%2011.7008%2019.9868zM29.7192%2015.0594C29.7192%2017.8927%2027.5429%2019.9786%2024.8656%2019.9786%2022.1884%2019.9786%2020.0121%2017.8927%2020.0121%2015.0594%2020.0121%2012.2096%2022.1884%2010.1401%2024.8656%2010.1401%2027.5429%2010.1401%2029.7192%2012.2096%2029.7192%2015.0594zM27.5922%2015.0594C27.5922%2013.2855%2026.3274%2012.0782%2024.8656%2012.0782S22.1391%2013.2937%2022.1391%2015.0594C22.1391%2016.8086%2023.4038%2018.0405%2024.8656%2018.0405S27.5922%2016.8168%2027.5922%2015.0594zM40.5922%2015.0594C40.5922%2017.8927%2038.4159%2019.9786%2035.7387%2019.9786%2033.0696%2019.9786%2030.8851%2017.8927%2030.8851%2015.0594%2030.8851%2012.2096%2033.0614%2010.1401%2035.7387%2010.1401%2038.4159%2010.1401%2040.5922%2012.2096%2040.5922%2015.0594zM38.4734%2015.0594C38.4734%2013.2855%2037.2087%2012.0782%2035.7469%2012.0782%2034.2851%2012.0782%2033.0203%2013.2937%2033.0203%2015.0594%2033.0203%2016.8086%2034.2851%2018.0405%2035.7469%2018.0405%2037.2087%2018.0487%2038.4734%2016.8168%2038.4734%2015.0594zM51.203%2010.4357v8.8366C51.203%2022.9105%2049.0595%2024.3969%2046.5219%2024.3969%2044.132%2024.3969%2042.7031%2022.7955%2042.161%2021.4897L44.0417%2020.7095C44.3784%2021.5143%2045.1997%2022.4588%2046.5219%2022.4588%2048.1479%2022.4588%2049.1499%2021.4487%2049.1499%2019.568V18.8617H49.0759C48.5914%2019.4612%2047.6552%2019.9786%2046.4808%2019.9786%2044.0171%2019.9786%2041.7668%2017.8352%2041.7668%2015.0758%2041.7668%2012.3%2044.0253%2010.1319%2046.4808%2010.1319%2047.6552%2010.1319%2048.5914%2010.6575%2049.0759%2011.2323H49.1499V10.4357H51.203zM49.2977%2015.084C49.2977%2013.3512%2048.1397%2012.0782%2046.6697%2012.0782%2045.175%2012.0782%2043.9267%2013.3429%2043.9267%2015.084%2043.9267%2016.8004%2045.175%2018.0487%2046.6697%2018.0487%2048.1397%2018.0487%2049.2977%2016.8004%2049.2977%2015.084zM54.9887%205.22081V19.6912H52.8288V5.22081H54.9887zM63.4968%2016.6854L65.1722%2017.8023C64.6301%2018.6072%2063.3244%2019.9869%2061.0659%2019.9869%2058.2655%2019.9869%2056.2534%2017.827%2056.2534%2015.0676%2056.2534%2012.1439%2058.2901%2010.1483%2060.8278%2010.1483%2063.3818%2010.1483%2064.6301%2012.1768%2065.0408%2013.2773L65.2625%2013.8357%2058.6843%2016.5623C59.1853%2017.5478%2059.9737%2018.0569%2061.0741%2018.0569%2062.1746%2018.0569%2062.9384%2017.5067%2063.4968%2016.6854zM58.3312%2014.9115L62.7331%2013.0884C62.4867%2012.4724%2061.764%2012.0454%2060.9017%2012.0454%2059.8012%2012.0454%2058.2737%2013.0145%2058.3312%2014.9115z%22%20fill%3D%22%23fff%22/%3E%3C/svg%3E"-->
                                        <!--                                                                                                draggable="false"-->
                                        <!--                                                                                                style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;">-->
                                        <!--                                                                                    </div>-->
                                        <!--                                                                                </a></div>-->
                                        <!--                                                                        </div>-->
                                        <!--                                                                        <div bis_skin_checked="1"></div>-->
                                        <!--                                                                        <div bis_skin_checked="1">-->
                                        <!--                                                                            <div style="display: inline-flex; position: absolute; right: 0px; bottom: 0px;"-->
                                        <!--                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                <div class="gmnoprint"-->
                                        <!--                                                                                     style="z-index: 1000001;"-->
                                        <!--                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                    <div draggable="false"-->
                                        <!--                                                                                         class="gm-style-cc"-->
                                        <!--                                                                                         style="user-select: none; position: relative; height: 14px; line-height: 14px;"-->
                                        <!--                                                                                         bis_skin_checked="1">-->
                                        <!--                                                                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <div style="width: 1px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <button-->
                                        <!--                                                                                                    draggable="false"-->
                                        <!--                                                                                                    aria-label="Быстрые клавиши"-->
                                        <!--                                                                                                    title="Быстрые клавиши"-->
                                        <!--                                                                                                    type="button"-->
                                        <!--                                                                                                    style="background: none; display: inline-block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit;">Быстрые-->
                                        <!--                                                                                                клавиши</button>-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                    </div>-->
                                        <!--                                                                                </div>-->
                                        <!--                                                                                <div class="gmnoprint"-->
                                        <!--                                                                                     style="z-index: 1000001;"-->
                                        <!--                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                    <div draggable="false"-->
                                        <!--                                                                                         class="gm-style-cc"-->
                                        <!--                                                                                         style="user-select: none; position: relative; height: 14px; line-height: 14px;"-->
                                        <!--                                                                                         bis_skin_checked="1">-->
                                        <!--                                                                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <div style="width: 1px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <button-->
                                        <!--                                                                                                    draggable="false"-->
                                        <!--                                                                                                    aria-label="Картографические данные"-->
                                        <!--                                                                                                    title="Картографические данные"-->
                                        <!--                                                                                                    type="button"-->
                                        <!--                                                                                                    style="background: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit; display: none;">Картографические-->
                                        <!--                                                                                                данные</button><span-->
                                        <!--                                                                                                    style="">Картографические-->
                                        <!--                                                                                                    данные ©2024-->
                                        <!--                                                                                                    Google</span></div>-->
                                        <!--                                                                                    </div>-->
                                        <!--                                                                                </div>-->
                                        <!--                                                                                <div class="gmnoscreen"-->
                                        <!--                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                    <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(0, 0, 0); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);"-->
                                        <!--                                                                                         bis_skin_checked="1">-->
                                        <!--                                                                                        Картографические данные-->
                                        <!--                                                                                        ©2024 Google</div>-->
                                        <!--                                                                                </div><button draggable="false"-->
                                        <!--                                                                                              aria-label="Масштаб карты: 1&nbsp;км на 42 пкс"-->
                                        <!--                                                                                              title="Масштаб карты: 1&nbsp;км на 42 пкс"-->
                                        <!--                                                                                              type="button"-->
                                        <!--                                                                                              class="gm-style-cc"-->
                                        <!--                                                                                              aria-describedby="005ABBCD-1918-4B5B-A1CC-288300D2229F"-->
                                        <!--                                                                                              style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; height: 14px; line-height: 14px;">-->
                                        <!--                                                                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"-->
                                        <!--                                                                                         bis_skin_checked="1">-->
                                        <!--                                                                                        <div style="width: 1px;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                    </div>-->
                                        <!--                                                                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"-->
                                        <!--                                                                                         bis_skin_checked="1"><span>1-->
                                        <!--                                                                                                км&nbsp;</span>-->
                                        <!--                                                                                        <div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 46px;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                            <div style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="width: 4px; height: 8px; left: 0px; top: 0px; background-color: rgb(255, 255, 255);"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="width: 4px; height: 8px; position: absolute; background-color: rgb(255, 255, 255); right: 0px; bottom: 0px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; background-color: rgb(102, 102, 102); height: 2px; left: 1px; bottom: 1px; right: 1px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(102, 102, 102);"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                            <div style="width: 2px; height: 6px; position: absolute; background-color: rgb(102, 102, 102); bottom: 1px; right: 1px;"-->
                                        <!--                                                                                                 bis_skin_checked="1">-->
                                        <!--                                                                                            </div>-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                    </div><span-->
                                        <!--                                                                                            id="005ABBCD-1918-4B5B-A1CC-288300D2229F"-->
                                        <!--                                                                                            style="display: none;">Нажимайте,-->
                                        <!--                                                                                            чтобы переключаться между-->
                                        <!--                                                                                            метрической и британской-->
                                        <!--                                                                                            системами измерения.</span>-->
                                        <!--                                                                                </button>-->
                                        <!--                                                                                <div class="gmnoprint gm-style-cc"-->
                                        <!--                                                                                     draggable="false"-->
                                        <!--                                                                                     style="z-index: 1000001; user-select: none; position: relative; height: 14px; line-height: 14px;"-->
                                        <!--                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"-->
                                        <!--                                                                                         bis_skin_checked="1">-->
                                        <!--                                                                                        <div style="width: 1px;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                    </div>-->
                                        <!--                                                                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"-->
                                        <!--                                                                                         bis_skin_checked="1"><a-->
                                        <!--                                                                                                href="https://www.google.com/intl/ru-RU_US/help/terms_maps.html"-->
                                        <!--                                                                                                target="_blank"-->
                                        <!--                                                                                                rel="noopener"-->
                                        <!--                                                                                                style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);">Условия</a>-->
                                        <!--                                                                                    </div>-->
                                        <!--                                                                                </div>-->
                                        <!--                                                                                <div draggable="false"-->
                                        <!--                                                                                     class="gm-style-cc"-->
                                        <!--                                                                                     style="user-select: none; position: relative; height: 14px; line-height: 14px;"-->
                                        <!--                                                                                     bis_skin_checked="1">-->
                                        <!--                                                                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"-->
                                        <!--                                                                                         bis_skin_checked="1">-->
                                        <!--                                                                                        <div style="width: 1px;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"-->
                                        <!--                                                                                             bis_skin_checked="1">-->
                                        <!--                                                                                        </div>-->
                                        <!--                                                                                    </div>-->
                                        <!--                                                                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"-->
                                        <!--                                                                                         bis_skin_checked="1"><a-->
                                        <!--                                                                                                target="_blank"-->
                                        <!--                                                                                                rel="noopener"-->
                                        <!--                                                                                                title="Сообщить об ошибке на карте или снимке"-->
                                        <!--                                                                                                dir="ltr"-->
                                        <!--                                                                                                href="https://www.google.com/maps/@40.3829419,49.7965849,12z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3"-->
                                        <!--                                                                                                style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); text-decoration: none; position: relative;">Сообщить-->
                                        <!--                                                                                            об ошибке на карте</a>-->
                                        <!--                                                                                    </div>-->
                                        <!--                                                                                </div>-->
                                        <!--                                                                            </div>-->
                                        <!--                                                                        </div>-->
                                        <!--                                                                    </div>-->
                                        <!--                                                                </div>-->
                                        <!--                                                            </div>-->
                                        <!--                                                        </div>-->
                                        <!--                                                    </div>-->
                                        <!--                                                </div>-->
                                        <!--                                            </div>-->
                                        <!--                                        </div>-->
                                        <!--                                    </div>-->
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12156.676903035746!2d49.79658489336004!3d40.38294187866628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d9217435d25%3A0x9302ea352024157b!2zRMmZcnMgRXZp!5e0!3m2!1sen!2saz!4v1719985754729!5m2!1sen!2saz"
                                            width="100%" height="500" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </section>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>


            <a id="footer_skip_link_anchor" class="integro_skip_link_anchor" href="#"></a>
            <?php
            get_template_part('template-parts/content', 'foot');
            ?>
        </div>
    </div>



    <?php
    get_footer();
    ?>
</body>

</html>