<?php

// PHPMailer dosyalarını yükleyin
require_once ABSPATH . WPINC . '/PHPMailer/PHPMailer.php';
require_once ABSPATH . WPINC . '/PHPMailer/SMTP.php';
require_once ABSPATH . WPINC . '/PHPMailer/Exception.php';

// PHPMailer sınıflarını kullanın
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;




$version = wp_get_theme()->get('Version');

function udigital_theme_support()
{
    // add tag
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'udigital_theme_support');

function udigital_menus()
{
    $locations = array(
        'primary menu' => 'primary Menu',

        'footer menu' => 'footer Menu',

    );
    register_nav_menus($locations);
}
add_action('init', 'udigital_menus');

function udigital_register_styles()
{

    //    wp_enqueue_style('udigital-',get_template_directory_uri().'/',array(),'1.0','all');

}
add_action('wp_enqueue_scripts', 'udigital_register_styles');

function udigital_register_scripts()
{

    //    wp_enqueue_script('arch-',get_template_directory_uri().'/',array(),'1.0',true);

}
add_action('wp_enqueue_scripts', 'udigital_register_scripts');


function udigital_widget_areas()
{

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            //        ),
//        array(
            'name' => 'udigital social media',
            'id' => 'udigital-1',
            'description' => ''
        )
    );// dynamic_sidebar('arch-1');
}
add_action('widgets_init', 'udigital_widget_areas');




function custom_service_permalink($post_link, $post)
{
    if ($post->post_type == 'service') {
        $post_link = home_url('/service/' . $post->post_name . '/');
    }
    return $post_link;
}
add_filter('post_type_rewrite_rules', 'custom_service_permalink', 10, 2);


function custom_portfolio_permalink($post_link, $post)
{
    if ($post->post_type == 'project') {
        $post_link = home_url('/project/' . $post->post_name . '/');
    }
    return $post_link;
}
add_filter('post_type_rewrite_rules', 'custom_fortfolio_permalink', 10, 2);

//add_action( 'admin_init', 'register_custom_strings' );
//function register_custom_strings($name) {
////  name  string
//    pll_register_string(  'Learn More About Us','Learn More About Us', true );
//    pll_register_string(  'Locations','Locations', true );
//
//
//    // pll_register_string(  '','', true );
//}

function custom_meta_tags()
{
    echo '<meta name="robots" content="index, follow">';
}
add_action('wp_head', 'custom_meta_tags');

function allow_svg_upload($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');


function custom_schema_markup()
{
    ?>
    <script type="application/ld+json">
            {
        "@context": "https://schema.org",
        "@type": "LodgingBusiness",
        "name": "uDigital Agency",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "4 Nizami",
          "addressLocality": "Baku",
          "addressRegion": "Baki",
          "postalCode": "1000",
          "addressCountry": "Azerbaijan"
        },
        "telephone": "+994 50 962 0015",
        "url": "https://www.udigital.az",
        "image": "https://jugaad.az/wp-content/uploads/2024/03/jugaadmmclogo.png",
        "description": "Jugaad Digital Marketing, Rəqəmsal marketiniqinizi satışlarınızın artıırlması istiqmətində qısa zamanda formalaşdıracaq şirkət olaraq - SEO - SMM - ECOMMERCE - REMARKETİNG",
        "openingHours": "Mon-Sun 09:00-19:00",
        "amenityFeature": [
          {
            "@type": "LocationFeatureSpecification",
            "name": "SEO Agency",
            "value": "Available"
          },
          {
            "@type": "LocationFeatureSpecification",
            "name": "SEO Packages",
            "value": "Available"
          },
          {
            "@type": "LocationFeatureSpecification",
            "name": "Google Ads Management",
            "value": "Available"
          },
          {
            "@type": "LocationFeatureSpecification",
            "name": "Social Media Advertising",
            "value": "Available"
          },
          {
            "@type": "LocationFeatureSpecification",
            "name": "Social Media Marketing",
            "value": "Available"
          },
          {
            "@type": "LocationFeatureSpecification",
            "name": "Web Design",
            "value": "Available"
          }
        ],
        "hasMap": {
          "@type": "Map",
          "url": "https://www.google.com/maps/place/JUGAAD+Agency/@40.3688745,49.8273941,15z/data=!4m6!3m5!1s0x40307d1c373d49c7:0x1567ad0aa06c3541!8m2!3d40.3688745!4d49.8273941!16s%2Fg%2F11j0ht_4pc?entry=ttu"
        }
      }

        </script>
    <?php
}

add_action('wp_head', 'custom_schema_markup');


function acf_svg_upload($args, $field, $post_id)
{
    $args['mime_types'] = 'image/svg+xml';
    return $args;
}
add_filter('acf/upload_prefilter/key=YOUR_FIELD_KEY_HERE', 'acf_svg_upload', 10, 3);


function get_section_slider()
{
    ob_start(); // Start output buffering

    // Include the HTML content from section_slider.php
    include get_template_directory() . '/section_slider.php';

    $content = ob_get_contents(); // Get the buffered content
    ob_end_clean(); // End buffering and discard the buffer

    return $content;
}

function handle_subscription()
{
    if (isset($_POST['subscribe'])) {
        global $wpdb;
        $table = $wpdb->prefix . 'subscribers';
        $email = sanitize_email($_POST['email']);

        if (is_email($email)) {
            $wpdb->insert(
                $table,
                array(
                    'email' => $email
                )
            );
            echo "Başarıyla abone oldunuz!";
        } else {
            echo "Geçerli bir e-posta adresi giriniz.";
        }
    }
}
add_action('wp_head', 'handle_subscription');
function send_email_to_subscribers($subject, $message)
{
    global $wpdb;
    $table = $wpdb->prefix . 'subscribers';
    $subscribers = $wpdb->get_results("SELECT email FROM $table");

    foreach ($subscribers as $subscriber) {
        $mail = new PHPMailer();
        try {
            // Sunucu ayarları
            $mail->isSMTP();
            $mail->Host = 'smtp.example.com'; // SMTP sunucunuz
            $mail->SMTPAuth = true;
            $mail->Username = 'your_email@example.com'; // SMTP kullanıcı adı
            $mail->Password = 'your_password'; // SMTP şifresi
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Alıcılar
            $mail->setFrom('your_email@example.com', 'Your Name');
            $mail->addAddress($subscriber->email);

            // İçerik
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();
        } catch (Exception $e) {
            error_log("Mail göndərmək başarısız: {$mail->ErrorInfo}");
        }
    }
}
function email_subscribers_page()
{
    if (isset($_POST['send_email'])) {
        $subject = sanitize_text_field($_POST['subject']);
        $message = wp_kses_post($_POST['message']);
        send_email_to_subscribers($subject, $message);
        echo "<p>E-postlar başarıyla göndərildi.</p>";
    }

    ?>
    <div class="wrap">
        <h1>Abonelere E-posta Gönder</h1>
        <form method="post" action="">
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Mövzu</th>
                    <td><input type="text" name="subject" required /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Mesaj</th>
                    <td><textarea name="message" rows="10" cols="50" required></textarea></td>
                </tr>
            </table>
            <input type="submit" name="send_email" class="button-primary" value="E-postları Göndər" />
        </form>
    </div>
    <?php
}

function add_email_subscribers_menu()
{
    add_menu_page('E-post Göndər', 'E-post Göndər', 'manage_options', 'email-subscribers', 'email_subscribers_page');
}
add_action('admin_menu', 'add_email_subscribers_menu');

function display_subscribers_page()
{
    global $wpdb;
    $table = $wpdb->prefix . 'subscribers';
    $subscribers = $wpdb->get_results("SELECT * FROM $table");

    if (isset($_POST['delete_subscriber'])) {
        $subscriber_id = intval($_POST['subscriber_id']);
        $wpdb->delete($table, ['id' => $subscriber_id]);
        echo '<div class="updated"><p>Abonə silindi.</p></div>';
        echo '<meta http-equiv="refresh" content="0">';
    }

    ?>
    <div class="wrap">
        <h1>Aboneleri Görüntüle</h1>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th scope="col" id="id" class="manage-column column-id column-primary">ID</th>
                    <th scope="col" id="email" class="manage-column column-email">Email</th>
                    <th scope="col" id="actions" class="manage-column column-actions">Actions</th>
                </tr>
            </thead>
            <tbody id="the-list">
                <?php foreach ($subscribers as $subscriber): ?>
                    <tr>
                        <td class="column-primary" data-colname="ID"><?php echo $subscriber->id; ?></td>
                        <td data-colname="Email"><?php echo $subscriber->email; ?></td>
                        <td data-colname="Actions">
                            <form method="post" action="">
                                <input type="hidden" name="subscriber_id" value="<?php echo $subscriber->id; ?>">
                                <input type="submit" name="delete_subscriber" value="Sil" class="button button-danger"
                                    onclick="return confirm('Bu abonəyi silmək istədiyinizə əminsiniz?');">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php
}



function add_display_subscribers_menu()
{
    add_menu_page(
        'Aboneleri Görüntüle',
        'Aboneleri Görüntüle',
        'manage_options',
        'display-subscribers',
        'display_subscribers_page',
        'dashicons-email-alt2'
    );
}
add_action('admin_menu', 'add_display_subscribers_menu');
?>