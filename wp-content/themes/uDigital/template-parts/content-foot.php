<?php

$footer = wp_get_nav_menu_items('footer menu');

?>

<footer
        class="footer_wrap footer_custom footer_custom_20088 footer_custom_footer-marketing-agency-integro						 scheme_marketing-dark						">
    <div data-elementor-type="cpt_layouts" data-elementor-id="20088" class="elementor elementor-20088">
        <section
                class="elementor-section elementor-top-section elementor-element elementor-element-1a2a976 scheme_marketing-dark elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                data-id="1a2a976" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-extended">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-68f8cb7 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                     data-id="68f8cb7" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="sc_layouts_item elementor-element elementor-element-b27591d sc_height_large sc_fly_static elementor-widget elementor-widget-spacer"
                             data-id="b27591d" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
                class="elementor-section elementor-top-section elementor-element elementor-element-45c3fab sc_layouts_row sc_layouts_row_type_compact scheme_marketing-dark elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                data-id="45c3fab" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-extended">
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9ec43e9 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                     data-id="9ec43e9" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="sc_layouts_item elementor-element elementor-element-bf21850 elementor-widget__width-initial elementor-widget-mobile__width-inherit sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                             data-id="bf21850" data-element_type="widget"
                             data-widget_type="trx_sc_title.default">
                            <div class="elementor-widget-container">
                                <div class="sc_title sc_title_default">
                                    <h2 class="sc_item_title sc_title_title sc_item_title_style_default">
                                                    <span class="sc_item_title_text">Results-driven online marketing agency</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $data = new WP_Query(array(
                    'post_type' => 'setting',
                    'posts_per_page' => 1,
                ));
                if ($data->have_posts()) :
                while ($data->have_posts()) : $data->the_post();
                ?>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-53c6598 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                     data-id="53c6598" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="sc_layouts_item elementor-element elementor-element-e8d0a61 sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                             data-id="e8d0a61" data-element_type="widget"
                             data-widget_type="trx_sc_title.default">
                            <div class="elementor-widget-container">
                                <div class="sc_title sc_title_default">
                                    <h6
                                            class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag">
                                        <span class="sc_item_title_text">Address</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="sc_layouts_item elementor-element elementor-element-ffbfe5a sc_fly_static elementor-widget elementor-widget-spacer"
                             data-id="ffbfe5a" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sc_layouts_item elementor-element elementor-element-0ddbeca sc_fly_static elementor-widget elementor-widget-text-editor"
                             data-id="0ddbeca" data-element_type="widget"
                             data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p style="color:white;"><?php echo get_field('address'); ?><br /> </p>
                            </div>
                        </div>
                        <div class="sc_layouts_item elementor-element elementor-element-214c55c sc_fly_static elementor-widget elementor-widget-spacer"
                             data-id="214c55c" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sc_layouts_item elementor-element elementor-element-7ca563b sc_fly_static elementor-widget elementor-widget-trx_sc_socials"
                             data-id="7ca563b" data-element_type="widget"
                             data-widget_type="trx_sc_socials.default">
                            <div class="elementor-widget-container">
                                <div class="sc_socials sc_socials_default sc_align_none">
                                    <div class="socials_wrap sc_item_content"><a target="_blank"
                                                                                 href="<?php echo get_field('facebook'); ?>"
                                                                                 class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span
                                                    class="social_icon social_icon_facebook-1" style><span
                                                        class="icon-facebook-1"></span></span></a>
                                        <!--                                                <a-->
                                        <!--                                                        target="_blank" href="https://twitter.com/ancora_themes"-->
                                        <!--                                                        class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span-->
                                        <!--                                                            class="social_icon social_icon_twitter-x" style><span-->
                                        <!--                                                                class="trx_addons_icon-twitter-x"></span></span></a>-->
                                        <a
                                                target="_blank" href="<?php echo get_field('linkedln'); ?>"
                                                class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span
                                                    class="social_icon social_icon_dribble-new" style><span
                                                        class="icon-dribble-new"></span></span></a><a
                                                target="_blank" href="<?php echo get_field('instagram'); ?>"
                                                class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span
                                                    class="social_icon social_icon_instagram" style><span
                                                        class="icon-instagram"></span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-82ad954 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                     data-id="82ad954" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="sc_layouts_item elementor-element elementor-element-2f94cda sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                             data-id="2f94cda" data-element_type="widget"
                             data-widget_type="trx_sc_title.default">
                            <div class="elementor-widget-container">
                                <div class="sc_title sc_title_default">
                                    <h6
                                            class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag">
                                        <span class="sc_item_title_text">Say Hello</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="sc_layouts_item elementor-element elementor-element-88da204 sc_fly_static elementor-widget elementor-widget-spacer"
                             data-id="88da204" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sc_layouts_item elementor-element elementor-element-27c8101 sc_fly_static elementor-widget elementor-widget-text-editor"
                             data-id="27c8101" data-element_type="widget"
                             data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p><a class="underline_anim"
                                      href="mailto:<?php echo get_field('email'); ?>"><span
                                                class="__cf_email__"
                                                ><?php echo get_field('email'); ?></span></a>
                                </p>
                            </div>
                        </div>
                        <div class="sc_layouts_item elementor-element elementor-element-fd36144 sc_fly_static elementor-widget elementor-widget-spacer"
                             data-id="fd36144" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sc_layouts_item elementor-element elementor-element-cc0d483 elementor-widget__width-auto sc_fly_static elementor-widget elementor-widget-heading"
                             data-id="cc0d483" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h5 class="elementor-heading-title elementor-size-default"><a
                                            href="tel:<?php echo get_field('phone'); ?>"><?php echo get_field('phone'); ?></a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile;  wp_reset_postdata();  endif; ?>

            </div>
        </section>
        <section
                class="elementor-section elementor-top-section elementor-element elementor-element-324dd57 sc_layouts_row sc_layouts_row_type_compact scheme_marketing-dark elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                data-id="324dd57" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-extended">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-77cfd1d sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                     data-id="77cfd1d" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="sc_layouts_item elementor-element elementor-element-86abaf5 sc_fly_static elementor-widget elementor-widget-spacer"
                             data-id="86abaf5" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sc_layouts_item elementor-element elementor-element-fe3a6dd elementor-widget-divider--view-line sc_fly_static elementor-widget elementor-widget-divider"
                             data-id="fe3a6dd" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                                <span class="elementor-divider-separator">
                                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
                class="elementor-section elementor-top-section elementor-element elementor-element-db5b555 sc_layouts_row sc_layouts_row_type_compact elementor-section-content-middle scheme_marketing-dark elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                data-id="db5b555" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-extended">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-07b32c9 sc_layouts_column_align_left sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                     data-id="07b32c9" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="sc_layouts_item elementor-element elementor-element-812534f sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_menu"
                             data-id="812534f" data-element_type="widget"
                             data-widget_type="trx_sc_layouts_menu.default">
                            <div class="elementor-widget-container">
                                <nav class="sc_layouts_menu sc_layouts_menu_default sc_layouts_menu_dir_horizontal menu_hover_zoom_line"
                                     data-animation-in="fadeIn" data-animation-out="fadeOut">
                                    <ul id="sc_layouts_menu_1677922466" class="sc_layouts_menu_nav">
                                        <li id="menu-item-19262"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-19262">
                                            <a href="<?= $footer[0]->url; ?>"><span><?= $footer[0]->title; ?></span></a>
                                        </li>
                                        <li id="menu-item-19263"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19263">
                                            <a href="<?= $footer[1]->url; ?>"><span><?= $footer[1]->title; ?></span></a>
                                        </li>
                                        <li id="menu-item-19264"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19264">
                                            <a href="<?= $footer[2]->url; ?>"><span><?= $footer[2]->title; ?></span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2aff9ab sc_layouts_column_align_right sc_layouts_column sc-mobile_layouts_column_align_left sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                     data-id="2aff9ab" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="sc_layouts_item elementor-element elementor-element-255221f sc_fly_static elementor-widget elementor-widget-text-editor"
                             data-id="255221f" data-element_type="widget"
                             data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <?php
                                $data = new WP_Query(array(
                                    'post_type' => 'setting',
                                    'posts_per_page' => 1,
                                ));
                                if ($data->have_posts()) :
                                while ($data->have_posts()) : $data->the_post();
                                ?>
                                <a href="/" target="_blank"
                                   rel="noopener"><?php echo get_field('site_name'); ?></a> <?php echo get_field('copyright'); ?>
                                <?php endwhile;  wp_reset_postdata();  endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</footer>