<!DOCTYPE html>
<html lang="<?php echo get_locale() ?>">

<?php
get_header();

?>
<!-- <style>
    .header_position_over .top_panel {
        position: relative;
    }
</style> -->

<body
    class="post-template-default single single-post postid-21862 single-format-standard wp-custom-logo theme-integro hide_fixed_rows_enabled woocommerce-js tinvwl-theme-style skin_default scheme_dark blog_mode_post body_style_wide is_single single_style_style-5 sidebar_show sidebar_right sidebar_small_screen_below trx_addons_present header_type_custom header_style_header-custom-17913 header_position_default menu_side_none fixed_blocks_sticky elementor-default elementor-kit-15 e--ua-blink e--ua-chrome e--ua-webkit ua_retina ua_blink ua_webkit ua_chrome animate_to_inited added_to_cart_inited desktop_layout">
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


            <div class="page_content_wrap" bis_skin_checked="1">
                <div class="content_wrap" bis_skin_checked="1">
                    <div class="post_header_wrap post_header_wrap_in_header post_header_wrap_style_style-5"
                        bis_skin_checked="1">
                        <div class="post_header post_header_single entry-header" bis_skin_checked="1">
                            <div class="post_meta post_meta_categories" bis_skin_checked="1">
                                <span class="post_meta_item post_categories"><a href="<?php echo get_permalink(); ?>"
                                        rel="category tag"><?php echo get_field('sub_title'); ?></a></span>
                            </div>
                            <h1 class="post_title entry-title"><?php echo get_field('title'); ?></h1>
                            <div class="post_meta post_meta_other" bis_skin_checked="1">
                                <a class="post_meta_item post_author" rel="author"
                                    href="<?php echo get_permalink(); ?>"><span class="post_author_by">By</span><span
                                        class="post_author_avatar"><img alt=""
                                            src="<?php echo get_field('author_img'); ?>"
                                            srcset="<?php echo get_field('author_img'); ?> 2x"
                                            class="avatar avatar-56 photo" height="56" width="56"
                                            decoding="async"></span><span class="post_author_name"><?php echo get_field('author_name'); ?></span></a><span
                                    class="post_meta_item post_date"><?php echo get_the_date('Y F'); ?></span>
                                <!-- <a  href="https://integro.ancorathemes.com/how-to-build-a-successful-marketing-ai-team/#respond"
                                    class="post_meta_item post_meta_comments icon-comment-light inited"><span
                                        class="post_meta_number">0</span><span
                                        class="post_meta_label">Comments</span></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content_wrap" bis_skin_checked="1">
                    <div class="content" bis_skin_checked="1">
                        <a id="content_skip_link_anchor" class="integro_skip_link_anchor" href="#"></a>
                        <article id="post-21862"
                            class="post_item_single post_type_post post_format_ post-21862 post type-post status-publish format-standard has-post-thumbnail hentry category-digital tag-it-services tag-lifestyle tag-seo">
                            <div class="post_header_wrap post_header_wrap_in_content post_header_wrap_style_style-5 with_featured_image"
                                bis_skin_checked="1">
                                <div class="post_featured alignwide with_thumb" bis_skin_checked="1"><img loading="lazy"
                                        width="1920" height="1433" src="<?php echo get_field('img'); ?>"
                                        class="attachment-full size-full" alt="" decoding="async"
                                        srcset="<?php echo get_field('img'); ?> 1920w, <?php echo get_field('img'); ?>g 300w, <?php echo get_field('img'); ?> 1024w, <?php echo get_field('img'); ?> 768w, <?php echo get_field('img'); ?> 890w, <?php echo get_field('img'); ?> 750w"
                                        sizes="(max-width: 1920px) 100vw, 1920px"></div>
                            </div>
                            <div class="post_content post_content_single entry-content" itemprop="mainEntityOfPage"
                                bis_skin_checked="1">
                                <p class="has-drop-cap"><?php echo get_field('desc_1'); ?> </p>
                                <div style="height:5px" aria-hidden="true" class="wp-block-spacer" bis_skin_checked="1">
                                </div>
                                <?php echo get_field('desc_2'); ?>
                            </div>
                            <div class="post_footer post_footer_single entry-footer" bis_skin_checked="1">
                                <div class="post_tags_single" bis_skin_checked="1"><span
                                        class="post_meta_label">Tags:</span>

                                    <?php if (has_tag()): ?>
                                        <div class="post-tags">
                                            <?php
                                            $tags = get_the_tags();
                                            if ($tags) {
                                                foreach ($tags as $tag) {
                                                    $tag_link = get_tag_link($tag->term_id);
                                                    $tag_name = $tag->name;
                                                    echo '<a href="' . esc_url($tag_link) . '" rel="tag">' . esc_html($tag_name) . '</a> ';
                                                }
                                            }
                                            ?>
                                        </div>
                                    <?php endif; ?>


                                </div>
                                <!-- <div class="post_meta post_meta_single" bis_skin_checked="1"><a href="#"
                                        class="post_meta_item post_meta_likes trx_addons_icon-heart-empty enabled inited"
                                        title="Like" data-postid="21862" data-likes="1" data-title-like="Like"
                                        data-title-dislike="Dislike"><span class="post_meta_number">1</span><span
                                            class="post_meta_label">Like</span></a><span
                                        class="post_meta_item post_share"><span
                                            class="socials_share socials_size_tiny socials_type_block socials_dir_horizontal socials_wrap"><span
                                                class="social_items inited"><a class="social_item social_item_popup"
                                                    href="//twitter.com/intent/tweet?text=How+to+build+a+successful+marketing+AI+team&amp;url=https%3A%2F%2Fintegro.ancorathemes.com%2Fhow-to-build-a-successful-marketing-ai-team%2F"
                                                    data-link="//twitter.com/intent/tweet?text=How to build a successful marketing AI team&amp;url=https%3A%2F%2Fintegro.ancorathemes.com%2Fhow-to-build-a-successful-marketing-ai-team%2F"
                                                    data-count="twitter-x"><span
                                                        class="social_icon social_icon_twitter-x sc_icon_type_icons"
                                                        style=""><span
                                                            class="trx_addons_icon-twitter-x"></span></span></a><a
                                                    class="social_item social_item_popup"
                                                    href="//www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fintegro.ancorathemes.com%2Fhow-to-build-a-successful-marketing-ai-team%2F"
                                                    data-link="//www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fintegro.ancorathemes.com%2Fhow-to-build-a-successful-marketing-ai-team%2F"
                                                    data-count="facebook-1"><span
                                                        class="social_icon social_icon_facebook-1 sc_icon_type_icons"
                                                        style=""><span class="icon-facebook-1"></span></span></a><a
                                                    class="social_item"
                                                    href="mailto:test@fwe.com?subject=How%20to%20build%20a%20successful%20marketing%20AI%20team&amp;body=https%3A%2F%2Fintegro.ancorathemes.com%2Fhow-to-build-a-successful-marketing-ai-team%2F"
                                                    target="_blank" data-count="share-email"><span
                                                        class="social_icon social_icon_share-email sc_icon_type_icons"
                                                        style=""><span class="icon-share-email"></span></span></a><a
                                                    class="social_item" title="Copy URL to clipboard"
                                                    data-message="Copied!"
                                                    data-copy-link-url="https://integro.ancorathemes.com/how-to-build-a-successful-marketing-ai-team/"
                                                    nopopup="true" href="#" target="_blank" data-count="link"><span
                                                        class="social_icon social_icon_link sc_icon_type_icons"
                                                        style=""><span
                                                            class="icon-link"></span></span></a></span></span></span>
                                </div> -->

                                <div class="nav-links-single" bis_skin_checked="1">

                                    <nav class="navigation post-navigation" aria-label="Posts">
                                        <h2 class="screen-reader-text">Post navigation</h2>
                                        <div class="nav-links">
                                            <div class="nav-previous">
                                                <?php
                                                $prev_post = get_previous_post();
                                                if ($prev_post) {
                                                    $prev_title = get_the_title($prev_post);
                                                    $prev_date = get_the_date('M j, Y', $prev_post);
                                                    previous_post_link('%link', '<span class="nav-arrow-label">Previous</span><h6 class="post-title">%title</h6><span class="post_date">' . $prev_date . '</span>');
                                                }
                                                ?>
                                            </div>
                                            <div class="nav-next">
                                                <?php
                                                $next_post = get_next_post();
                                                if ($next_post) {
                                                    $next_title = get_the_title($next_post);
                                                    $next_date = get_the_date('M j, Y', $next_post);
                                                    next_post_link('%link', '<span class="nav-arrow-label">Next</span><h6 class="post-title">%title</h6><span class="post_date">' . $next_date . '</span>');
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </nav>


                                </div>
                                <!-- <div class="author_info author vcard" itemprop="author" itemscope="itemscope"
                                    itemtype="https://schema.org/Person" bis_skin_checked="1">
                                    <div class="author_avatar" itemprop="image" bis_skin_checked="1">
                                        <a class="author_avatar_link"
                                            href="https://integro.ancorathemes.com/author/trx_admin/">
                                            <img alt=""
                                                src="https://secure.gravatar.com/avatar/034d0d50b729d2cb6a0ef19af78238cd?s=120&amp;d=mm&amp;r=g"
                                                srcset="https://secure.gravatar.com/avatar/034d0d50b729d2cb6a0ef19af78238cd?s=240&amp;d=mm&amp;r=g 2x"
                                                class="avatar avatar-120 photo" height="120" width="120"
                                                decoding="async"> </a>
                                    </div>
                                    <div class="author_description" bis_skin_checked="1">
                                        <h5 class="author_title" itemprop="name"><a class="author_link fn"
                                                href="https://integro.ancorathemes.com/author/trx_admin/"
                                                rel="author">Ashton Porter</a></h5>
                                        <div class="author_label" bis_skin_checked="1">About Author</div>
                                        <div class="author_bio" itemprop="description" bis_skin_checked="1">
                                            <p>Ignissimos ducimus quin blandiitis praesentium voluptatem deleniti atque
                                                corrupti quos dolores
                                                et quas molestias excepturi. scint occaecatti gnissimus.</p>
                                            <div class="author_links" bis_skin_checked="1">
                                                <div class="socials_wrap" bis_skin_checked="1"><a target="_blank"
                                                        href="https://www.facebook.com/AncoraThemes/"
                                                        class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span
                                                            class="social_icon social_icon_facebook" style=""><span
                                                                class="icon-facebook"></span></span></a><a
                                                        target="_blank" href="https://twitter.com/themes_ancora"
                                                        class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span
                                                            class="social_icon social_icon_twitter-x" style=""><span
                                                                class="trx_addons_icon-twitter-x"></span></span></a><a
                                                        target="_blank" href="https://dribbble.com/AncoraThemes"
                                                        class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span
                                                            class="social_icon social_icon_dribbble-1" style=""><span
                                                                class="icon-dribbble-1"></span></span></a><a
                                                        target="_blank" href="https://www.instagram.com/ancora_themes/"
                                                        class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span
                                                            class="social_icon social_icon_instagramm" style=""><span
                                                                class="icon-instagramm"></span></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </article>
                        <!-- <section class="comments_wrap opened">
                            <div class="comments_form_wrap" bis_skin_checked="1">
                                <div class="comments_form" bis_skin_checked="1">
                                    <div id="respond" class="comment-respond" bis_skin_checked="1">
                                        <h3 id="reply-title"
                                            class="section_title comments_form_title comment-reply-title">Leave a
                                            comment
                                            <small><a rel="nofollow" id="cancel-comment-reply-link"
                                                    href="/how-to-build-a-successful-marketing-ai-team/#respond"
                                                    style="display:none;" class="inited">Cancel reply</a></small>
                                        </h3>
                                        <form action="https://integro.ancorathemes.com/wp-comments-post.php"
                                            method="post" id="commentform" class="comment-form inited_validation"
                                            novalidate="" data-inited-validation="1">
                                            <div class="comments_field comments_author" bis_skin_checked="1"><label
                                                    for="author" class="required">Name</label><span
                                                    class="sc_form_field_wrap"><input id="author" name="author"
                                                        type="text" placeholder="Your Name *" value=""
                                                        aria-required="true" class="fill_inited"></span></div>
                                            <div class="comments_field comments_email" bis_skin_checked="1"><label
                                                    for="email" class="required">E-mail</label><span
                                                    class="sc_form_field_wrap"><input id="email" name="email"
                                                        type="text" placeholder="Your E-mail *" value=""
                                                        aria-required="true" class="fill_inited"></span></div>
                                            <div class="comments_field comments_comment" bis_skin_checked="1"><label
                                                    for="comment" class="required">Comment</label><span
                                                    class="sc_form_field_wrap"><textarea id="comment" name="comment"
                                                        placeholder="Your comment *" aria-required="true"
                                                        class="fill_inited"></textarea></span></div>
                                            <div class="comments_field comments_i_agree_privacy_policy"
                                                bis_skin_checked="1"><span class="sc_form_field_wrap"><input
                                                        id="i_agree_privacy_policy" name="i_agree_privacy_policy"
                                                        type="checkbox" value="1" class="inited"> <label
                                                        for="i_agree_privacy_policy" class="optional">I agree that my
                                                        submitted data is being <a href="/privacy-policy/">collected and
                                                            stored</a>.</label></span></div>
                                            <p class="form-submit"><input name="submit" type="submit" id="send_comment"
                                                    class="submit" value="Leave a comment"> <input type="hidden"
                                                    name="comment_post_ID" value="21862" id="comment_post_ID">
                                                <input type="hidden" name="comment_parent" id="comment_parent"
                                                    value="0">
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section> -->
                        <section class="related_wrap related_position_below_content related_style_classic">
                            <h3 class="section_title related_wrap_title">You May Also Like</h3>
                            <div class="columns_wrap posts_container columns_padding_bottom inited_open_full_post"
                                bis_skin_checked="1">
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 2,
                                    'orderby' => 'rand',
                                    'post__not_in' => array(get_the_ID())
                                );

                                $query = new WP_Query($args);

                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post();
                                        ?>
                                <div class="column-1_2" bis_skin_checked="1">
                                    <div id="post-286"
                                        class="related_item post_format_standard post-286 post type-post status-publish format-standard has-post-thumbnail hentry category-digital tag-it-services tag-seo tag-startup"
                                        data-post-id="286" bis_skin_checked="1">
                                        <div class="post_featured with_thumb hover_link" bis_skin_checked="1"><img
                                                width="890" height="664"
                                                src="<?php echo get_field('img'); ?> "
                                                class="attachment-integro-thumb-square size-integro-thumb-square wp-post-image"
                                                alt="" decoding="async"
                                                srcset="<?php echo get_field('img'); ?> 890w, <?php echo get_field('img'); ?> 300w, <?php echo get_field('img'); ?> 1024w, <?php echo get_field('img'); ?> 750w,<?php echo get_field('img'); ?> 1920w"
                                                sizes="(max-width: 890px) 100vw, 890px">
                                            <div class="mask" bis_skin_checked="1"></div>
                                            <a href="<?php echo get_permalink(); ?>"
                                                aria-hidden="true" class="link"></a>
                                        </div>
                                        <div class="post_header entry-header" bis_skin_checked="1">
                                            <div class="post_meta post_meta_categories" bis_skin_checked="1"><span
                                                    class="post_meta_item post_categories cat_sep"><a
                                                        href="<?php echo get_permalink(); ?>"
                                                        rel="category tag"><?php echo get_field('sub_title'); ?></a></span></div>
                                            <h6 class="post_title entry-title"><a
                                                    href="<?php echo get_permalink(); ?>"><?php echo get_field('title'); ?> </a></h6>
                                        </div>
                                    </div>
                                </div>
                              
                                <?php
                                    }
                                    wp_reset_postdata();
                                }
                                ?>
                            </div>
                        </section>
                    </div>
                    <div class="sidebar widget_area right sidebar_below sidebar_default scheme_dark		"
                        role="complementary" bis_skin_checked="1">
                        <a id="sidebar_skip_link_anchor" class="integro_skip_link_anchor" href="#"></a>
                        <div class="sidebar_inner" bis_skin_checked="1">
                            <aside class="widget widget_search">
                                <h5 class="widget_title">Search</h5>
                                <!-- <form role="search" method="get" class="search-form" action="/"
                                    data-inited-validation="1">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field fill_inited" placeholder="Search …"
                                            value="" name="s">
                                    </label>
                                    <input type="submit" class="search-submit" value="Search">
                                </form> -->
                                <form role="search" method="get" id="searchform" class="search-form"
                                    action="<?php echo esc_url(home_url('/')); ?>">
                                    <div>
                                        <label class="screen-reader-text" for="s">Search for:</label>
                                        <input type="text" value="<?php echo get_search_query(); ?>"
                                            class="search-field fill_inited" placeholder="Search …" name="s" id="s" />
                                        <input type="submit" id="searchsubmit" class="search-submit" value="Search" />
                                    </div>
                                </form>
                            </aside>
                            <aside class="widget widget_categories">
                                <h5 class="widget_title">Categories</h5>
                                <ul>
                                    <ul class="categories-list">
                                        <?php
                                        $categories = get_categories();

                                        foreach ($categories as $category) {
                                            echo '<li class="cat-item cat-item-' . $category->term_id . '">';
                                            echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
                                            echo '</li>';
                                        }
                                        ?>
                                    </ul>

                                </ul>
                            </aside>
                            <aside class="widget widget_recent_posts">
                                <h5 class="widget_title">Recent Posts</h5>



                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 2,
                                    'orderby' => 'rand',
                                    'post__not_in' => array(get_the_ID())
                                );

                                $query = new WP_Query($args);

                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post();
                                        ?>
                                        <article class="post_item with_thumb">
                                            <div class="post_thumb hover_zoom" bis_skin_checked="1"><a
                                                    href="<?php echo get_permalink(); ?>"><img width="120" height="120"
                                                        src="<?php echo get_field('img'); ?> "
                                                        class="attachment-integro-thumb-tiny size-integro-thumb-tiny wp-post-image"
                                                        alt="Brainstorming session as a way to come out of the creative crisis"
                                                        decoding="async"
                                                        srcset="<?php echo get_field('img'); ?> 120w, <?php echo get_field('img'); ?>  150w, <?php echo get_field('img'); ?>  500w, <?php echo get_field('img'); ?>  370w"
                                                        sizes="(max-width: 120px) 100vw, 120px"></a></div>
                                            <div class="post_content" bis_skin_checked="1">
                                                <div class="post_info" bis_skin_checked="1">
                                                    <div class="post_info_item post_categories" bis_skin_checked="1"><a
                                                            href="<?php echo get_permalink(); ?>"
                                                            title="View all posts in Standard">Blog</a></div><span
                                                        class="post_info_item post_info_posted"><a
                                                            href="<?php echo get_permalink(); ?>"
                                                            class="post_info_date"><?php echo get_the_date('Y F'); ?></a></span>
                                                </div>
                                                <h6 class="post_title"><a
                                                        href="<?php echo get_permalink(); ?>"><?php echo get_field('title'); ?>
                                                    </a></h6>
                                            </div>
                                        </article>

                                        <?php
                                    }
                                    wp_reset_postdata();
                                } else {
                                    // Yazı bulunamadıysa yapılacak işlemler
                                    echo 'Yazı bulunamadı.';
                                }
                                ?>
                            </aside>
                            <aside class="widget widget_tag_cloud">
                                <h5 class="widget_title">Tags</h5>
                                <div class="tagcloud" bis_skin_checked="1">
                                    <?php
                                    // Get all tags
                                    $tags = get_tags();

                                    // Check if there are tags
                                    if ($tags) {
                                        foreach ($tags as $tag) {
                                            $tag_link = get_tag_link($tag->term_id);
                                            $tag_name = esc_html($tag->name);
                                            $tag_count = $tag->count; // Number of posts with this tag
                                    
                                            // Example font size calculation based on tag count (optional)
                                            // Adjust this formula to fit your needs
                                            $font_size = 8 + ($tag_count * 1.5); // Basic example: 8pt + 1.5pt per post
                                    
                                            echo '<a href="' . esc_url($tag_link) . '" class="tag-cloud-link tag-link-' . $tag->term_id . '" style="font-size: ' . $font_size . 'pt;" aria-label="' . $tag_name . ' (' . $tag_count . ' items)">' . $tag_name . '</a>';
                                        }
                                    } else {
                                        echo '<p>No tags found.</p>';
                                    }
                                    ?>

                                </div>
                            </aside>
                            <!-- <aside class="widget trx_addons_show_on_permanent widget_banner"><a
                                    href="/" class="image_wrap"><img
                                        src="//integro.ancorathemes.com/wp-content/uploads/2023/11/new-banner-copyright.jpg"
                                        alt="" width="300" height="250"></a></aside> -->
                        </div>
                    </div>
                    <div class="clearfix" bis_skin_checked="1"></div>
                </div>
            </div>


            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                    <?php
                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                            ?>

                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <header class="entry-header">
                                    <h1 class="entry-title"><?php the_title(); ?></h1>
                                </header>

                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div>
                            </article>

                            <?php
                        endwhile;
                    else:
                        echo '<p>No posts found</p>';
                    endif;
                    ?>
                </main>
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