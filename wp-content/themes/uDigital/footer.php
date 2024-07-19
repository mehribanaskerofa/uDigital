<script>
    window.RS_MODULES = window.RS_MODULES || {};
    window.RS_MODULES.modules = window.RS_MODULES.modules || {};
    window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
    window.RS_MODULES.defered = false;
    window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
    window.RS_MODULES.type = 'compiled';
</script>
<div class="sc_layouts_panel_hide_content"></div>
<div id="popup-1"
    class="sc_layouts sc_layouts_panel sc_layouts_4509 sc_layouts_panel_right sc_layouts_effect_slide trx_addons_inline_1420359269"
    data-delay="0" data-panel-position="right" data-panel-effect="slide"
    data-panel-class="trx_addons_inline_1420359269">
    <div class="sc_layouts_panel_inner">
        <div data-elementor-type="cpt_layouts" data-elementor-id="4509" class="elementor elementor-4509">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-67b4187 elementor-section-height-full elementor-section-items-stretch elementor-section-content-space-between scheme_dark elementor-section-boxed elementor-section-height-default sc_fly_static"
                data-id="67b4187" data-element_type="section">
                <div class="elementor-container elementor-column-gap-extended">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-56dc68b6 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                        data-id="56dc68b6" data-element_type="column">
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
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-1c135e79 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_logo"
                                        data-id="1c135e79" data-element_type="widget"
                                        data-widget_type="trx_sc_layouts_logo.default">
                                        <div class="elementor-widget-container">
                                            <a href="/"
                                                class="sc_layouts_logo sc_layouts_logo_default trx_addons_inline_1983501628"><img
                                                    class="logo_image" src="<?php echo get_field('logo'); ?>"
                                                    srcset="<?php echo get_field('logo'); ?> 2x" alt="uDigital" width="185"
                                                    height="46"></a>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-6655a08c sc_fly_static elementor-widget elementor-widget-trx_sc_socials"
                                        data-id="6655a08c" data-element_type="widget" data-widget_type="trx_sc_socials.default">
                                        <div class="elementor-widget-container">
                                            <div class="sc_socials sc_socials_icons_names sc_align_left">
                                                <div class="socials_wrap sc_item_content"><a target="_blank"
                                                        href="<?php echo get_field('facebook'); ?>"
                                                        class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons_names"><span
                                                            class="social_icon social_icon_facebook-1" style><span
                                                                class="icon-facebook-1"></span></span><span
                                                            class="social_name social_facebook-1">Facebook</span></a>
                                                    <a target="_blank" href="<?php echo get_field('linkedln'); ?>"
                                                        class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons_names"><span
                                                            class="social_icon social_icon_dribble-new" style><span
                                                                class="icon-dribble-new"></span></span><span
                                                            class="social_name social_dribble-new">Linkedln</span></a><a
                                                        target="_blank" href="<?php echo get_field('instagram'); ?>"
                                                        class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons_names"><span
                                                            class="social_icon social_icon_instagram" style><span
                                                                class="icon-instagram"></span></span><span
                                                            class="social_name social_instagram">Instagram</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-8d88f99 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                        data-id="8d88f99" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-0671e65 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                data-id="0671e65" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-4f42819 sc_fly_static elementor-widget elementor-widget-heading"
                                                        data-id="4f42819" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h4 class="elementor-heading-title elementor-size-default"><a
                                                                    href="tel:<?php echo get_field('phone'); ?>"><?php echo get_field('phone'); ?></a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-efdd0a4 sc_fly_static elementor-widget elementor-widget-spacer"
                                                        data-id="efdd0a4" data-element_type="widget"
                                                        data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-63068ae sc_fly_static elementor-widget elementor-widget-heading"
                                                        data-id="63068ae" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <span class="elementor-heading-title elementor-size-default"><a
                                                                    href="mailto:<?php echo get_field('email'); ?>"><span
                                                                        class="__cf_email__"
                                                                        data-cfemail="ec85828a83ac89818d8580c28f8381"><?php echo get_field('email'); ?></span></a></span>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-013bb75 sc_fly_static elementor-widget elementor-widget-spacer"
                                                        data-id="013bb75" data-element_type="widget"
                                                        data-widget_type="spacer.default">
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
                                </div>
                            <?php endwhile;
                            wp_reset_postdata();
                        endif; ?>

                    </div>
                </div>
            </section>
        </div>
        <a href="#" class="sc_layouts_panel_close trx_addons_button_close"><span
                class="sc_layouts_panel_close_icon trx_addons_button_close_icon"></span></a>
    </div>
</div>
<a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up scroll_to_top_style_default" title="Scroll to top"></a>

<div
    class="trx_addons_mouse_helper trx_addons_mouse_helper_base trx_addons_mouse_helper_style_default trx_addons_mouse_helper_smooth trx_addons_mouse_helper_centered">
</div>

<script>
    if (typeof revslider_showDoubleJqueryError === "undefined") { function revslider_showDoubleJqueryError(sliderID) { console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion."); console.log("To fix this, you can:"); console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on"); console.log("2. Find the double jQuery.js inclusion and remove it"); return "Double Included jQuery Library"; } }
</script>

<script type="text/javascript" defer="defer"
    src="<?= get_template_directory_uri(); ?>/assets/js/rbtools.min.js?ver=6.6.20" async id="tp-tools-js"></script>
<script type="text/javascript" defer="defer" src="<?= get_template_directory_uri(); ?>/assets/js/rs6.min.js?ver=6.6.20"
    async id="revmin-js"></script>
<script type="text/javascript" defer="defer"
    src="<?= get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js" id="magnific-popup-js"></script>

<script type="text/javascript" defer="defer" src=<?= get_template_directory_uri(); ?>/assets/js/public.min.js?ver=2.8.1"
    id="tinvwl-js"></script>
<script type="text/javascript" id="trx_addons-js-extra">
    /* <![CDATA[ */
    var TRX_ADDONS_STORAGE = { "admin_mode": "", "ajax_url": "https:\/\/integro.ancorathemes.com\/wp-admin\/admin-ajax.php", "ajax_nonce": "b09a737beb", "site_url": "https:\/\/integro.ancorathemes.com", "post_id": "17882", "vc_edit_mode": "", "is_preview": "", "is_preview_gb": "", "is_preview_elm": "", "popup_engine": "magnific", "scroll_progress": "hide", "hide_fixed_rows": "1", "smooth_scroll": "", "animate_inner_links": "1", "disable_animation_on_mobile": "", "add_target_blank": "0", "menu_collapse": "1", "menu_collapse_icon": "trx_addons_icon-ellipsis-vert", "menu_stretch": "1", "resize_tag_video": "", "resize_tag_iframe": "1", "user_logged_in": "", "theme_slug": "integro", "theme_bg_color": "#151414", "theme_accent_color": "#97B100", "page_wrap_class": ".page_wrap", "columns_wrap_class": "trx_addons_columns_wrap", "columns_in_single_row_class": "columns_in_single_row", "column_class_template": "trx_addons_column-$1_$2", "email_mask": "^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-zA-Z0-9_\\-]+(\\.[a-zA-Z0-9_\\-]+)*\\.[a-zA-Z0-9]{2,12}$", "mobile_breakpoint_fixedrows_off": "768", "mobile_breakpoint_fixedcolumns_off": "768", "mobile_breakpoint_stacksections_off": "768", "mobile_breakpoint_scroll_lag_off": "768", "mobile_breakpoint_fullheight_off": "1025", "mobile_breakpoint_mousehelper_off": "1025", "msg_caption_yes": "Yes", "msg_caption_no": "No", "msg_caption_ok": "OK", "msg_caption_accept": "Accept", "msg_caption_apply": "Apply", "msg_caption_cancel": "Cancel", "msg_caption_attention": "Attention!", "msg_caption_warning": "Warning!", "msg_ajax_error": "Invalid server answer!", "msg_magnific_loading": "Loading image", "msg_magnific_error": "Error loading image", "msg_magnific_close": "Close (Esc)", "msg_error_like": "Error saving your like! Please, try again later.", "msg_field_name_empty": "The name can't be empty", "msg_field_email_empty": "Too short (or empty) email address", "msg_field_email_not_valid": "Invalid email address", "msg_field_text_empty": "The message text can't be empty", "msg_search_error": "Search error! Try again later.", "msg_send_complete": "Send message complete!", "msg_send_error": "Transmit failed!", "msg_validation_error": "Error data validation!", "msg_name_empty": "The name can't be empty", "msg_name_long": "Too long name", "msg_email_empty": "Too short (or empty) email address", "msg_email_long": "E-mail address is too long", "msg_email_not_valid": "E-mail address is invalid", "msg_text_empty": "The message text can't be empty", "msg_copied": "Copied!", "ajax_views": "", "menu_cache": [".menu_mobile_inner nav > ul"], "login_via_ajax": "1", "double_opt_in_registration": "1", "msg_login_empty": "The Login field can't be empty", "msg_login_long": "The Login field is too long", "msg_password_empty": "The password can't be empty and shorter then 4 characters", "msg_password_long": "The password is too long", "msg_login_success": "Login success! The page should be reloaded in 3 sec.", "msg_login_error": "Login failed!", "msg_not_agree": "Please, read and check 'Terms and Conditions'", "msg_password_not_equal": "The passwords in both fields are not equal", "msg_registration_success": "Thank you for registering. Please confirm registration by clicking on the link in the letter sent to the specified email.", "msg_registration_error": "Registration failed!", "shapes_url": "https:\/\/integro.ancorathemes.com\/wp-content\/themes\/integro\/skins\/default\/trx_addons\/css\/shapes\/", "mouse_helper_in_swiper_slider": "1", "elementor_stretched_section_container": ".page_wrap", "pagebuilder_preview_mode": "", "elementor_animate_items": ".elementor-heading-title,.sc_item_subtitle,.sc_item_title,.sc_item_descr,.sc_item_posts_container + .sc_item_button,.sc_item_button.sc_title_button,nav > ul > li", "elementor_breakpoints": { "desktop": 999999, "tablet": 1279, "mobile": 767 }, "add_to_links_url": [{ "mask": "elementor.com\/", "link": "https:\/\/be.elementor.com\/visit\/?bta=2496&nci=5383&brand=elementor&utm_campaign=theme" }, { "page": ["admin.php?page=revslider", "plugins.php"], "mask": "\/\/account.sliderrevolution.com\/portal", "link": "https:\/\/themepunch.pxf.io\/4ekEVG" }, { "page": ["admin.php?page=revslider", "plugins.php"], "mask": "\/\/account.sliderrevolution.com\/portal\/pricing", "link": "https:\/\/themepunch.pxf.io\/KeRz5z" }, { "page": ["admin.php?page=revslider", "plugins.php"], "mask": "sliderrevolution.com\/premium-slider-revolution", "link": "https:\/\/themepunch.pxf.io\/9W1nyy" }, { "page": ["admin.php?page=revslider", "plugins.php"], "mask": "\/\/support.sliderrevolution.com", "link": "https:\/\/themepunch.pxf.io\/P0LbGq" }, { "page": ["admin.php?page=revslider", "plugins.php"], "mask": "sliderrevolution.com\/help-center", "link": "https:\/\/themepunch.pxf.io\/doXGdy" }, { "page": ["admin.php?page=revslider", "plugins.php"], "mask": "sliderrevolution.com\/manual", "link": "https:\/\/themepunch.pxf.io\/ZdkK3q" }, { "page": ["admin.php?page=revslider", "plugins.php"], "mask": "sliderrevolution.com\/get-on-board-the-slider-revolution-dashboard", "link": "https:\/\/themepunch.pxf.io\/QOqb1z" }, { "page": ["admin.php?page=revslider", "plugins.php"], "mask": "sliderrevolution.com\/expand-possibilities-with-addons", "link": "https:\/\/themepunch.pxf.io\/6baEN3" }, { "page": ["admin.php?page=revslider", "plugins.php"], "mask": "sliderrevolution.com\/examples", "link": "https:\/\/themepunch.pxf.io\/rnvXdB" }, { "page": ["admin.php?page=revslider", "plugins.php"], "mask": "sliderrevolution.com\/pro-level-design-with-slider-revolution", "link": "https:\/\/themepunch.pxf.io\/jWEmda" }, { "page": ["admin.php?page=revslider", "plugins.php"], "mask": "sliderrevolution.com\/plugin-privacy-policy", "link": "https:\/\/themepunch.pxf.io\/gbzGE0" }, { "page": ["admin.php?page=revslider", "plugins.php"], "mask": "sliderrevolution.com\/faq\/why-was-my-slider-revolution-license-deactivated", "link": "https:\/\/themepunch.pxf.io\/RyxbVy" }, { "page": ["admin.php?page=revslider", "plugins.php"], "mask": "sliderrevolution.com\/faq\/updating-make-sure-clear-caches", "link": "https:\/\/themepunch.pxf.io\/Yg5Nzq" }, { "page": ["admin.php?page=revslider", "plugins.php"], "mask": "sliderrevolution.com\/faq\/where-to-find-purchase-code", "link": "https:\/\/themepunch.pxf.io\/x9xZdO" }, { "page": ["admin.php?page=revslider", "plugins.php"], "mask": "sliderrevolution.com\/documentation\/changelog", "link": "https:\/\/themepunch.pxf.io\/EanyNn" }, { "page": ["admin.php?page=revslider", "plugins.php"], "mask": "sliderrevolution.com\/documentation\/system-requirements\/", "link": "https:\/\/themepunch.pxf.io\/LPv2kO" }, { "page": ["admin.php?page=revslider", "plugins.php"], "mask": "sliderrevolution.com", "link": "https:\/\/themepunch.pxf.io\/DVEORn" }], "animate_to_mc4wp_form_submitted": "1", "msg_no_products_found": "No products found! Please, change query parameters and try again.", "ai_helper_sc_igenerator_openai_sizes": { "256x256": " 256 x  256", "512x512": " 512 x  512", "1024x1024": "1024 x 1024", "1792x1024": "1792 x 1024 (Open AI DALL-E-3 only)", "1024x1792": "1024 x 1792 (Open AI DALL-E-3 only)" }, "msg_ai_helper_download": "Download", "msg_ai_helper_download_error": "Error", "msg_ai_helper_download_expired": "The generated image cache timed out. The download link is no longer valid.<br>But you can still download the image by right-clicking on it and selecting \"Save Image As...\"", "msg_ai_helper_igenerator_disabled": "Image generation is not available in edit mode!", "audio_effects_allowed": "0", "bg_colors_selector": "body:not(.body_style_boxed) .page_content_wrap,body.body_style_boxed .page_wrap", "mouse_helper": "1", "mouse_helper_delay": "4", "mouse_helper_centered": "1", "msg_mouse_helper_anchor": "Scroll to", "portfolio_use_gallery": "", "scroll_to_anchor": "0", "update_location_from_anchor": "0", "msg_sc_googlemap_not_avail": "Googlemap service is not available", "msg_sc_googlemap_geocoder_error": "Error while geocode address", "sc_icons_animation_speed": "50", "msg_sc_osmap_not_avail": "OpenStreetMap service is not available", "msg_sc_osmap_geocoder_error": "Error while geocoding address", "osmap_tiler": "vector", "osmap_tiler_styles": { "basic": { "title": "Basic", "slug": "basic", "url": "https:\/\/api.maptiler.com\/maps\/{style}\/style.json?key=C1rALu26mR1iTxEBrqQj", "maxzoom": "18", "token": "" } }, "osmap_attribution": "Map data \u00a9 <a href=\"https:\/\/www.openstreetmap.org\/\">OpenStreetMap<\/a> contributors", "slider_round_lengths": "1" };
    /* ]]> */
</script>
<script type="text/javascript" defer="defer" src="<?= get_template_directory_uri(); ?>/assets/js/trx__scripts.js"
    id="trx_addons-js"></script>

<script type="text/javascript" defer="defer" src="<?= get_template_directory_uri(); ?>/assets/js/mouse-helper.js"
    id="trx_addons-mouse-helper-js"></script>
<script type="text/javascript" defer="defer" src="<?= get_template_directory_uri(); ?>/assets/js/superfish.min.js"
    id="superfish-js"></script>
<script type="text/javascript" defer="defer" src="<?= get_template_directory_uri(); ?>/assets/js/curtains.min.js"
    id="curtains-js"></script>
<script type="text/javascript" defer="defer" src="<?= get_template_directory_uri(); ?>/assets/js/image-effects.js"
    id="trx_addons-image-effects-js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/gsap.min.js"
    id="tweenmax-js"></script>

<script type="text/javascript" defer="defer" src="<?= get_template_directory_uri(); ?>/assets/js/__scripts.js"
    id="integro-init-js"></script>

<script type="text/javascript" defer="defer" src="<?= get_template_directory_uri(); ?>/assets/js/skin.js"
    id="integro-skin-default-js"></script>

<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/webpack.runtime.min.js?ver=3.19.3"
    id="elementor-webpack-runtime-js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/frontend-modules.min.js?ver=3.19.3"
    id="elementor-frontend-modules-js"></script>

<script type="text/javascript" id="elementor-frontend-js-before">
    /* <![CDATA[ */
    var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close", "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right", "a11yCarouselPrevSlideMessage": "Previous slide", "a11yCarouselNextSlideMessage": "Next slide", "a11yCarouselFirstSlideMessage": "This is the first slide", "a11yCarouselLastSlideMessage": "This is the last slide", "a11yCarouselPaginationBulletMessage": "Go to slide" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1280, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile Portrait", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Landscape", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet Portrait", "value": 1279, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Landscape", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } }, "version": "3.19.3", "is_static": false, "experimentalFeatures": { "e_optimized_assets_loading": true, "block_editor_assets_optimize": true, "ai-layout": true, "landing-pages": true, "e_image_loading_optimization": true, "e_global_styleguide": true }, "urls": { "assets": "https:\/\/integro.ancorathemes.com\/wp-content\/plugins\/elementor\/assets\/" }, "swiperClass": "swiper-container", "settings": { "page": [], "editorPreferences": [] }, "kit": { "stretched_section_container": ".page_wrap", "viewport_tablet": 1279, "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 17882, "title": "Home%20Marketing%20Agency%20%E2%80%93%20Integro", "excerpt": "", "featuredImage": false } };
    /* ]]> */
</script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/frontend.min.js?ver=3.19.3"
    id="elementor-frontend-js"></script>

<script type="text/javascript" defer="defer"
    src="<?= get_template_directory_uri(); ?>/assets/js/imagesloaded.min.js?ver=5.0.0" id="imagesloaded-js"></script>

<script id="rs-initialisation-scripts">
    var tpj = jQuery;

    var revapi7;

    if (window.RS_MODULES === undefined) window.RS_MODULES = {};
    if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
    RS_MODULES.modules["revslider71"] = {
        once: RS_MODULES.modules["revslider71"] !== undefined ? RS_MODULES.modules["revslider71"].once : undefined, init: function () {
            window.revapi7 = window.revapi7 === undefined || window.revapi7 === null || window.revapi7.length === 0 ? document.getElementById("rev_slider_7_1") : window.revapi7;
            if (window.revapi7 === null || window.revapi7 === undefined || window.revapi7.length == 0) { window.revapi7initTry = window.revapi7initTry === undefined ? 0 : window.revapi7initTry + 1; if (window.revapi7initTry < 20) requestAnimationFrame(function () { RS_MODULES.modules["revslider71"].init() }); return; }
            window.revapi7 = jQuery(window.revapi7);
            if (window.revapi7.revolution == undefined) { revslider_showDoubleJqueryError("rev_slider_7_1"); return; }
            revapi7.revolutionInit({
                revapi: "revapi7",
                sliderType: "hero",
                DPR: "dpr",
                sliderLayout: "fullscreen",
                visibilityLevels: "1240,1460,785,500",
                gridwidth: "1920,1440,778,480",
                gridheight: "850,670,600,520",
                lazyType: "smart",
                perspective: 600,
                perspectiveType: "global",
                editorheight: "850,670,600,520",
                responsiveLevels: "1240,1460,785,500",
                progressBar: { disableProgressBar: true },
                navigation: {
                    onHoverStop: false
                },
                parallax: {
                    levels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 15, 17, 20, 25, 30],
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 0
                },
                viewPort: {
                    global: true,
                    globalDist: "-200px",
                    enable: false
                },
                fallbacks: {
                    allowHTML5AutoPlayOnAndroid: true
                },
            });

        }
    } // End of RevInitScript

    if (window.RS_MODULES.checkMinimal !== undefined) { window.RS_MODULES.checkMinimal(); };
</script>