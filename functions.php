<?php
/**
 * Asteriski theme functions
 */

/* Customizer */
require_once get_template_directory() . '/customizer.php';

if (! function_exists('asteriski_theme_setup')) {
    function asteriski_theme_setup()
    {

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        // Add default title support
        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        $defaults = array(
            'default-image'          => get_template_directory_uri() .'/assets/img/tausta.jpg',
            'width'                  => 1800,
            'height'                 => 999,
            'flex-height'            => false,
            'flex-width'             => false,
            'uploads'                => true,
            'default-text-color'     => "#35B233",
            'wp-head-callback'       => 'asteriski_header_style',

        );
        add_theme_support('custom-header', $defaults);

        /**
         * Set the content width in pixels, based on the theme's design and stylesheet.
         */
        $GLOBALS['content_width'] = apply_filters('asteriski_content_width', 980);

        // Add theme support for Semantic Markup
        add_theme_support('html5', array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ));

        add_theme_support('customize-selective-refresh-widgets');

        // add excerpt support for pages
        add_post_type_support('page', 'excerpt');

        if (is_singular() && comments_open()) {
            wp_enqueue_script('comment-reply');
        }
    }
    add_action('after_setup_theme', 'asteriski_theme_setup');
}

/**
 * Bootstrap navwalker
 */

require get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function register_my_menus()
{
    register_nav_menus(
        array(
            'primary' => __( 'Navigointivalikko' ),
        )
    );
}
add_action( 'init', 'register_my_menus' );

/**
 * Get header style and image from WP settings
 */

function asteriski_header_style()
{
    $asteriski_header_text_color = get_header_textcolor();
    $asteriski_small_header_image = get_theme_mod("asteriski_small_header_image"); ?>
    <style type="text/css">
<?php
    if (get_header_image()) :
?>

        .blogtitle {
            color: <?php echo esc_attr($asteriski_header_text_color); ?>;
        }
        .page-header {
            background-image: url('<?php echo $asteriski_small_header_image ?>');
        }
        .index-page-header {
            background-image: url('<?php header_image(); ?>');
        }
        .banner-image {
            background-image: url('<?php header_image(); ?>');
        }

        <?php endif; ?>
    </style>
<?php
}

/**
 * Admin CSS stylesheets
 */

function asteriski_admin_enqueue_scripts($hook)
{
    wp_enqueue_style('font-awesome', "https://use.fontawesome.com/releases/v5.8.1/css/all.css", array(), '5.8.1', 'all' );
}
add_action('admin_enqueue_scripts', 'asteriski_admin_enqueue_scripts');


/**
 * Enqueue CSS stylesheets
 */

if (! function_exists('asteriski_enqueue_styles')) {
    function asteriski_enqueue_styles()
    {

        wp_enqueue_style('asteriski-font', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500|Poppins:400,500,600,700,800');
        wp_enqueue_style('font-awesome', "https://use.fontawesome.com/releases/v5.8.1/css/all.css");
        wp_enqueue_style('hover', get_template_directory_uri() . '/assets/css/hover.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/hover.css'));
        wp_enqueue_style('asteriski-style', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'asteriski_enqueue_styles');
}

/**
 * Enqueue JS scripts
 */

if (! function_exists('asteriski_enqueue_scripts')) {
    function asteriski_enqueue_scripts()
    {
        wp_enqueue_script('asteriski-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true);
    }
    add_action('wp_enqueue_scripts', 'asteriski_enqueue_scripts');
}

/**
 * Sidebars
 */

function asteriski_sidebars()
{

    // Blog Sidebar

    register_sidebar(array(
        'name' => "Asteriski sivupaneeli",
        'id' => 'blog-sidebar',
        'description' => esc_html__('Sidebar on the blog layout.', "asteriski"),
        'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-heading">',
        'after_title' => '</h2>',
    ));


    // Footer Sidebar

    register_sidebar(array(
        'name' => 'Asteriski alapaneeli',
        'id' => 'asteriski-footer-widget-area',
        'description' => esc_html__('The footer widget area', "asteriski"),
        'before_widget' => '<div class="%2$s footer-widget col-md-4 col-sm-6 col-xs-12">',
        'after_widget' => '</div>',
        'before_title' => ' <h4 class="widget_title">',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'asteriski_sidebars');

/**
 * Widgets
 */

require_once get_template_directory() . '/widgets/join-riski-info-widget.php';
require_once get_template_directory() . '/widgets/other-widget.php';

function register_widgets()
{
    register_widget('JoinRiskiInfo');
    register_widget('Other');
}
add_action('widgets_init', 'register_widgets');

/**
 * Max-height for featured images
 */

set_post_thumbnail_size( 9999, 400, false );

/**
 * Max upload size
 */

@ini_set( 'upload_max_size' , '10M' );
@ini_set( 'post_max_size', '10M');
@ini_set( 'max_execution_time', '300' );

/**
 * Help page
 */

function register_help_page()
{
    add_menu_page(
        'Ohjeet',
        'Ohjeet',
        'publish_posts',
        'helppage',
        'help_page_callback',
        'dashicons-editor-help',
        110
    );
}

add_action( 'admin_menu', 'register_help_page' );

function help_page_callback()
{
    get_template_part('help-page', 'none');
}

// Remove useless stuff
remove_action('wp_head', 'wlwmanifest_link');

/**
Remove USELESS hahaha fields
 **/
function wc_remove_checkout_fields( $fields ) {

	// Billing fields
	unset( $fields['billing']['billing_company'] );
	unset( $fields['billing']['billing_country'] );
	unset( $fields['billing']['billing_state'] );
	unset( $fields['billing']['billing_address_1'] );
	unset( $fields['billing']['billing_address_2'] );
	unset( $fields['billing']['billing_city'] );
	unset( $fields['billing']['billing_postcode'] );

	// Shipping fields
	unset( $fields['shipping']['shipping_company'] );
	unset( $fields['shipping']['shipping_state'] );
	unset( $fields['shipping']['shipping_address_1'] );
	unset( $fields['shipping']['shipping_address_2'] );
	unset( $fields['shipping']['shipping_city'] );
	unset( $fields['shipping']['shipping_postcode'] );

	return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'wc_remove_checkout_fields' );