<?php

/**
 * asteriski functions
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

        // To use additional css
        add_editor_style('css/editor-style.css');

        add_theme_support('post-thumbnails');

        $defaults = array(
            'width'                  => 1920,
            'height'                 => 540,
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


function asteriski_header_style()
{
    $asteriski_header_text_color = get_header_textcolor(); ?>
<style type="text/css">
<?php
    //Check if user has defined any header image.
    if (get_header_image()) :
?>

    .blogtitle
    {
        color: #<?php echo esc_attr($asteriski_header_text_color); ?>;

    }
    .page-header
    {
        background-image:url('<?php header_image(); ?>');
    }

    <?php endif; ?>	
</style>
<?php
}

/**
 * Load Upsell Button In Customizer
 * 2016 &copy; [Justin Tadlock](http://justintadlock.com).
 */

add_action('admin_init', 'asteriski_detect_button');
function asteriski_detect_button()
{
    wp_enqueue_style('asteriski-info-button', get_template_directory_uri() . '/assets/css/import-button.css');
}

/**
 * admin  JS scripts
 */
function asteriski_admin_enqueue_scripts($hook)
{
    wp_enqueue_style(
        'font-awesome',
        get_template_directory_uri() . '/assets/css/font-awesome.css',
        array(),
        '4.7.0',
        'all'
    );
    wp_enqueue_style(
        'asteriski-admin',
        get_template_directory_uri() . '/assets/admin/css/admin.css',
        array(),
        '1.0.0',
        'all'
    );
}
add_action('admin_enqueue_scripts', 'asteriski_admin_enqueue_scripts');

// Register Nav Walker class_alias
require get_template_directory() . '/class-wp-bootstrap-navwalker.php';


/**
 * Enqueue CSS stylesheets
 */

if (! function_exists('asteriski_enqueue_styles')) {
    function asteriski_enqueue_styles()
    {

        // Bootstrap CSS
        wp_enqueue_style('asteriski-font', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500|Poppins:400,500,600,700,800');
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css');
        wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.css');
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
        wp_enqueue_script('jquery.hover3d', get_template_directory_uri() . '/assets/js/jquery.hover3d.js', array('jquery'), '', true);
        wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.js', array(), '', true);
        wp_enqueue_script('asteriski-main', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);
    }
    add_action('wp_enqueue_scripts', 'asteriski_enqueue_scripts');
}


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
