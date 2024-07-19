<?php

// $primary_menu = wp_get_nav_menu_object('primary az');
// $menu_items = wp_get_nav_menu_object('primary');
$menu_items = wp_get_nav_menu_items('primary menu');
// var_dump($menu_items);

?>

<header
    class="top_panel top_panel_custom top_panel_custom_17913 top_panel_custom_header-main-without-title-integro				 without_bg_image scheme_marketing-dark">
    <div data-elementor-type="cpt_layouts" data-elementor-id="17913" class="elementor elementor-17913">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-793e122 elementor-section-full_width elementor-section-content-middle sc_layouts_row sc_layouts_row_type_compact sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile elementor-section-height-default elementor-section-height-default sc_fly_static"
            data-id="793e122" data-element_type="section">
            <div class="elementor-container elementor-column-gap-extended">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-cda2c2d sc_layouts_column_align_left sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                    data-id="cda2c2d" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="sc_layouts_item elementor-element elementor-element-60e8f2c sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_logo"
                            data-id="60e8f2c" data-element_type="widget" data-widget_type="trx_sc_layouts_logo.default">
                            <div class="elementor-widget-container">
                                <a href="/"
                                    class="sc_layouts_logo sc_layouts_logo_default trx_addons_inline_1132477786">
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
                                            <img class="logo_image" src="<?php echo get_field('logo'); ?>"
                                                srcset="<?php echo get_field('logo'); ?> 2x" alt="uDigital" width="200"
                                                height="70">
                                        <?php endwhile;
                                        wp_reset_postdata(); endif; ?>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e698e2d sc_layouts_column_align_right sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                    data-id="e698e2d" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="sc_layouts_item elementor-element elementor-element-e88b6a2 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_menu"
                            data-id="e88b6a2" data-element_type="widget" data-widget_type="trx_sc_layouts_menu.default">
                            <div class="elementor-widget-container">
                                <nav class="sc_layouts_menu sc_layouts_menu_default sc_layouts_menu_dir_horizontal menu_hover_zoom_line"
                                    data-animation-in="fadeIn" data-animation-out="fadeOut">
                                    <ul id="sc_layouts_menu_1039701454" class="sc_layouts_menu_nav">
                                        <li id="menu-item-18374"
                                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-18374">
                                            <a href="<?= $menu_items[0]->url; ?>"><span> <?= $menu_items[0]->title; ?></span></a>

                                        </li>
                                        <li id="menu-item-17792"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17792">
                                            <a href="<?= $menu_items[1]->url; ?>" onclick="return false;"><span><?= $menu_items[1]->title; ?></span></a>
                                            <ul class="sub-menu">
                                                <?php $data = new WP_Query(
                                                    array(
                                                        'post_type' => 'service',
                                                    )
                                                );
                                                if ($data->have_posts()):
                                                    $i = 0;
                                                    while ($data->have_posts()):
                                                        $data->the_post();
                                                        ?>
                                                        <li id="menu_mobile-item-17984"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17984">
                                                            <a
                                                                href="<?= get_permalink(); ?>"><span><?php echo get_field('menu_title'); ?></span></a>
                                                        </li>
                                                    <?php endwhile;
                                                    wp_reset_postdata(); endif; ?>



                                            </ul>
                                        </li>
                                        <li id="menu-item-17994"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17994">
                                            <a href="<?= $menu_items[2]->url; ?>"><span><?= $menu_items[2]->title; ?></span></a>

                                        </li>
                                        <li id="menu-item-17983"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17983">
                                            <a href="<?= $menu_items[3]->title; ?>"><span><?= $menu_items[3]->title; ?></span></a>

                                        </li>

                                        <li id="menu-item-16979"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16979">
                                            <a href="<?= $menu_items[4]->url; ?>"><span><?= $menu_items[4]->title; ?></span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="sc_layouts_item elementor-element elementor-element-25c5772 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_search"
                            data-id="25c5772" data-element_type="widget"
                            data-widget_type="trx_sc_layouts_search.default">
                            <div class="elementor-widget-container">
                                <div class="sc_layouts_search">
                                    <div class="search_modern">
                                        <span class="search_submit"></span>
                                        <div class="search_wrap scheme_dark">
                                            <div class="search_header_wrap">
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
                                                        <img class="logo_image" src="<?php echo get_field('logo'); ?>"
                                                            srcset="<?php echo get_field('logo'); ?> 2x" alt="uDigital"
                                                            width="185" height="46">
                                                    <?php endwhile;
                                                    wp_reset_postdata(); endif; ?>

                                                <a class="search_close"></a>
                                            </div>
                                            <div class="search_form_wrap">
                                                <form role="search" method="get" class="search_form" action="/">
                                                    <input type="hidden" value="page" name="post_type">
                                                    <input type="text" class="search_field"
                                                        placeholder="Type words and hit enter" value name="s">
                                                    <button type="submit" class="search_submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="search_overlay scheme_dark"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sc_layouts_item elementor-element elementor-element-da1098c elementor-view-default sc_fly_static elementor-widget elementor-widget-icon"
                            data-id="da1098c" data-element_type="widget" data-widget_type="icon.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-wrapper">
                                    <a class="elementor-icon" href="#popup-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                            viewBox="0 0 21 21">
                                            <g class="right_bar" transform="translate(-2124 -2665)">
                                                <g transform="translate(2124 2665)" fill="none" stroke-width="1.5">
                                                    <circle cx="2.5" cy="2.5" r="2.5" stroke="none">
                                                    </circle>
                                                    <circle cx="2.5" cy="2.5" r="1.75" fill="none"></circle>
                                                </g>
                                                <g transform="translate(2132 2665)" fill="none" stroke-width="1.5">
                                                    <circle cx="2.5" cy="2.5" r="2.5" stroke="none">
                                                    </circle>
                                                    <circle cx="2.5" cy="2.5" r="1.75" fill="none"></circle>
                                                </g>
                                                <g transform="translate(2140 2665)" fill="none" stroke-width="1.5">
                                                    <circle cx="2.5" cy="2.5" r="2.5" stroke="none">
                                                    </circle>
                                                    <circle cx="2.5" cy="2.5" r="1.75" fill="none"></circle>
                                                </g>
                                                <g transform="translate(2124 2673)" fill="none" stroke-width="1.5">
                                                    <circle cx="2.5" cy="2.5" r="2.5" stroke="none">
                                                    </circle>
                                                    <circle cx="2.5" cy="2.5" r="1.75" fill="none"></circle>
                                                </g>
                                                <g transform="translate(2132 2673)" fill="none" stroke-width="1.5">
                                                    <circle cx="2.5" cy="2.5" r="2.5" stroke="none">
                                                    </circle>
                                                    <circle cx="2.5" cy="2.5" r="1.75" fill="none"></circle>
                                                </g>
                                                <g transform="translate(2140 2673)" fill="none" stroke-width="1.5">
                                                    <circle cx="2.5" cy="2.5" r="2.5" stroke="none">
                                                    </circle>
                                                    <circle cx="2.5" cy="2.5" r="1.75" fill="none"></circle>
                                                </g>
                                                <g transform="translate(2124 2681)" fill="none" stroke-width="1.5">
                                                    <circle cx="2.5" cy="2.5" r="2.5" stroke="none">
                                                    </circle>
                                                    <circle cx="2.5" cy="2.5" r="1.75" fill="none"></circle>
                                                </g>
                                                <g transform="translate(2132 2681)" fill="none" stroke-width="1.5">
                                                    <circle cx="2.5" cy="2.5" r="2.5" stroke="none">
                                                    </circle>
                                                    <circle cx="2.5" cy="2.5" r="1.75" fill="none"></circle>
                                                </g>
                                                <g transform="translate(2140 2681)" fill="none" stroke-width="1.5">
                                                    <circle cx="2.5" cy="2.5" r="2.5" stroke="none">
                                                    </circle>
                                                    <circle cx="2.5" cy="2.5" r="1.75" fill="none"></circle>
                                                </g>
                                            </g>
                                        </svg> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-a15bb68 elementor-section-content-middle sc_layouts_row sc_layouts_row_type_compact sc_layouts_hide_on_wide sc_layouts_hide_on_desktop sc_layouts_hide_on_notebook elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
            data-id="a15bb68" data-element_type="section">
            <div class="elementor-container elementor-column-gap-extended">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-930b5ef sc_layouts_column_align_left sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                    data-id="930b5ef" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="sc_layouts_item elementor-element elementor-element-a7d5071 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_logo"
                            data-id="a7d5071" data-element_type="widget" data-widget_type="trx_sc_layouts_logo.default">
                            <div class="elementor-widget-container">
                                <a href="/" class="sc_layouts_logo sc_layouts_logo_default trx_addons_inline_231800527">
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
                                            <img class="logo_image" src="<?php echo get_field('logo'); ?>"
                                                srcset="<?php echo get_field('logo'); ?> 2x" alt="uDigital" width="185"
                                                height="46">
                                        <?php endwhile;
                                        wp_reset_postdata(); endif; ?>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-954a86c sc_layouts_column_align_right sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                    data-id="954a86c" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">

                        <div class="sc_layouts_item elementor-element elementor-element-2332416 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_search"
                            data-id="2332416" data-element_type="widget"
                            data-widget_type="trx_sc_layouts_search.default">
                            <div class="elementor-widget-container">
                                <div class="sc_layouts_search">
                                    <div class="search_modern">
                                        <span class="search_submit"></span>
                                        <div class="search_wrap scheme_dark">
                                            <div class="search_header_wrap">
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
                                                        <img class="logo_image" src="<?php echo get_field('logo'); ?>"
                                                            srcset="<?php echo get_field('logo'); ?> 2x" alt="uDigital"
                                                            width="185" height="46">
                                                    <?php endwhile;
                                                    wp_reset_postdata(); endif; ?>

                                                <a class="search_close"></a>
                                            </div>
                                            <div class="search_form_wrap">
                                                <form role="search" method="get" class="search_form" action="/">
                                                    <input type="hidden" value name="post_types">
                                                    <input type="text" class="search_field"
                                                        placeholder="Type words and hit enter" value name="s">
                                                    <button type="submit" class="search_submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="search_overlay scheme_dark"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sc_layouts_item elementor-element elementor-element-db41bee sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_menu"
                            data-id="db41bee" data-element_type="widget" data-widget_type="trx_sc_layouts_menu.default">
                            <div class="elementor-widget-container">
                                <div
                                    class="sc_layouts_iconed_text sc_layouts_menu_mobile_button_burger sc_layouts_menu_mobile_button without_menu">
                                    <a class="sc_layouts_item_link sc_layouts_iconed_text_link" href="#">
                                        <span
                                            class="sc_layouts_item_icon sc_layouts_iconed_text_icon trx_addons_icon-menu"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</header>
<div class="menu_mobile_overlay scheme_dark"></div>
<div class="menu_mobile menu_mobile_fullscreen scheme_dark">
    <div class="menu_mobile_inner with_widgets">
        <div class="menu_mobile_header_wrap">
            <a class="sc_layouts_logo" href="/">
                <img src="<?php echo get_field('logo'); ?>"
                    srcset="<?php echo get_field('logo'); ?> 2x"
                    alt="uDigital" width="185" height="46"> </a>
            <a class="menu_mobile_close menu_button_close" tabindex="0"><span
                    class="menu_button_close_text">Close</span><span class="menu_button_close_icon"></span></a>
        </div>
        <div class="menu_mobile_content_wrap content_wrap">
            <div class="menu_mobile_content_wrap_inner">
                <nav class="menu_mobile_nav_area" itemscope="itemscope"
                    itemtype="https://schema.org/SiteNavigationElement">
                    <ul id="menu_mobile_828116934">

                        <li id="menu_mobile-item-18374"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16979">
                            <a href="<?= $menu_items[0]->url; ?>"><span><?= $menu_items[0]->title; ?></span></a>
                        </li>
                        <li id="menu_mobile-item-17792"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17792">
                            <a href="<?= $menu_items[1]->url; ?>" onclick="return false;"><span><?= $menu_items[1]->title; ?></span></a>
                            <ul class="sub-menu">
                                <?php $data = new WP_Query(
                                    array(
                                        'post_type' => 'service',
                                    )
                                );
                                if ($data->have_posts()):
                                    $i = 0;
                                    while ($data->have_posts()):
                                        $data->the_post();
                                        ?>
                                        <li id="menu_mobile-item-16977"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16977">
                                            <a href="<?= get_permalink(); ?>"><span><?php echo get_field('menu_title'); ?></span></a>
                                        </li>
                                    <?php endwhile;
                                    wp_reset_postdata(); endif; ?>



                            </ul>
                        </li>


                        <li id="menu_mobile-item-17994"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16979">
                            <a href="<?= $menu_items[2]->url; ?>"><span><?= $menu_items[2]->title; ?></span></a>
                        </li>
                        <li id="menu_mobile-item-17983"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16979">
                            <a href="<?= $menu_items[3]->url; ?>"><span><?= $menu_items[3]->title; ?></span></a>
                        </li>
                        <li id="menu_mobile-item-16979"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16979">
                            <a href="<?= $menu_items[4]->url; ?>"><span><?= $menu_items[4]->title; ?></span></a>
                        </li>
                    </ul>
                </nav>
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
                        <div class="socials_mobile">
                            <a target="_blank" href="<?php echo get_field('facebook'); ?>"
                                class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span
                                    class="social_icon social_icon_facebook-1" style><span
                                        class="icon-facebook-1"></span></span></a>

                            <a target="_blank" href="<?php echo get_field('linkedln'); ?>"
                                class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span
                                    class="social_icon social_icon_dribble-new" style><span
                                        class="icon-dribble-new"></span></span></a><a target="_blank"
                                href="<?php echo get_field('instagram'); ?>"
                                class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span
                                    class="social_icon social_icon_instagram" style><span
                                        class="icon-instagram"></span></span></a>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); endif; ?>

            </div>


        </div>
        <div class="menu_mobile_widgets_area">
            <div
                class="widgets_additional_menu_mobile_fullscreen widgets_additional_menu_mobile_fullscreen_wrap widget_area">
                <div
                    class="widgets_additional_menu_mobile_fullscreen_inner widgets_additional_menu_mobile_fullscreen_inner widget_area_inner">
                    <aside class="widget_text widget widget_custom_html">
                        <div class="textwidget custom-html-widget">
                            <div class="extra_item">
                                <h6>Have a Project?</h6>
                                <a href="mailto:info@udigital.az"><span class="__cf_email__"
                                        >info@udigital.az</span></a>
                            </div>
                            <div class="extra_item">
                                <h6>Want to Work With Us?</h6>
                                <a href="/contact-us/">Send Brief</a>
                            </div>
                            <div class="extra_item">
                                <h6>Want to see what we do?</h6>
                                <a href="/portfolios/">View Portfolio</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>