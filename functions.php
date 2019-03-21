<?php 

/**
* thebis functions and definitions
* @package thebis
*/

if( ! function_exists( 'thebis_theme_setup' ) )
{

function thebis_theme_setup() {
	
    load_theme_textdomain( 'thebis', get_template_directory() . '/lang' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	// Add default title support
	add_theme_support( 'title-tag' ); 		

	// Add default logo support		
    add_theme_support( 'custom-logo' );	

    // To use additional css
	    add_editor_style( 'css/editor-style.css' );		

	
    
	add_theme_support('post-thumbnails');
	
	$defaults = array(
		'default-image'          => get_template_directory_uri() .'/assets/img/banner.jpg',
		'width'                  => 1920,
		'height'                 => 540,
		'uploads'                => true,
		'default-text-color'     => "#35B233",
		'wp-head-callback'       => 'thebis_header_style',

	);
	add_theme_support( 'custom-header', $defaults );

	/**
	* Set the content width in pixels, based on the theme's design and stylesheet.
	*/
	$GLOBALS['content_width'] = apply_filters( 'thebis_content_width', 980 );
	
	// Add theme support for Semantic Markup
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption'
	) );
	 
	 add_theme_support( 'customize-selective-refresh-widgets' );
	 
	// add excerpt support for pages
	add_post_type_support( 'page', 'excerpt' );
	
	if ( is_singular() && comments_open() ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	//Welcome Message 		
			if ( is_admin() ) {
				require( get_template_directory() . '/edit-screen.php');
			}
   
	// Menus
	//add_theme_support( 'menus' );

    register_nav_menus(array(
   'primary' => esc_html__('primary Menu', 'thebis')
   ));		

}
add_action( 'after_setup_theme', 'thebis_theme_setup' );
}


function thebis_header_style()
{
		$thebis_header_text_color = get_header_textcolor();

	?>
		<style type="text/css">
			<?php
				//Check if user has defined any header image.
				if ( get_header_image() ) :
			?>

			.blogtitle
			 {
			color: #<?php echo esc_attr($thebis_header_text_color); ?>;
			
			  }
			.page-header
			  {
				background-image:url('<?php header_image(); ?>');
			  }
		
			<?php endif; ?>	
		</style>
	<?php

}


if (!function_exists('thebis_ocdi_files')) :
/**
* OCDI files.
*
* @since 1.0.0
*
* @return array Files.
*/
function thebis_ocdi_files() {

return apply_filters( 'aft_demo_import_files', array(
    array(
        'import_file_name'             => esc_html__( 'The Bis', 'thebis' ),
        'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo-content/default/thebis.xml',
        'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo-content/default/thebis.wie',
        'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo-content/default/thebis.dat',
        
    ),
    	
    
));
}
endif;
add_filter( 'pt-ocdi/import_files', 'thebis_ocdi_files');



	/**
 * Load Upsell Button In Customizer
 * 2016 &copy; [Justin Tadlock](http://justintadlock.com).
 */

add_action( 'admin_init', 'thebis_detect_button' );
	function thebis_detect_button() {
	wp_enqueue_style( 'thebis-info-button', get_template_directory_uri() . '/assets/css/import-button.css' );
}

/**
 * admin  JS scripts
 */
function thebis_admin_enqueue_scripts( $hook ) { 
	wp_enqueue_style( 
		'font-awesome', 
		get_template_directory_uri() . '/assets/css/font-awesome.css', 
		array(), 
		'4.7.0', 
		'all' 
	);
	wp_enqueue_style( 
		'thebis-admin', 
		get_template_directory_uri() . '/assets/admin/css/admin.css', 
		array(), 
		'1.0.0', 
		'all' 
	);
 
}
add_action( 'admin_enqueue_scripts', 'thebis_admin_enqueue_scripts' );

// Register Nav Walker class_alias
require get_template_directory() . '/class-wp-bootstrap-navwalker.php';
require get_template_directory(). '/pro-feat.php';


	/**
	* Enqueue CSS stylesheets
	*/

	if( ! function_exists( 'thebis_enqueue_styles' ) ) {
	function thebis_enqueue_styles() {
		
	// Bootstrap CSS 
	wp_enqueue_style('thebis-font','https://fonts.googleapis.com/css?family=Montserrat:300,400,500|Poppins:400,500,600,700,800');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css');
	wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.css');
	wp_enqueue_style( 'thebis-style', get_stylesheet_uri() );

	}
	add_action( 'wp_enqueue_scripts', 'thebis_enqueue_styles' );
	}

	/**
	* Enqueue JS scripts
	*/

if( ! function_exists( 'thebis_enqueue_scripts' ) ) {
	function thebis_enqueue_scripts() {   
	 wp_enqueue_script('jquery.hover3d', get_template_directory_uri() . '/assets/js/jquery.hover3d.js', array('jquery'), '', true);
     wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.js', array(), '', true); 
     wp_enqueue_script('thebis-main', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);

	}
	add_action( 'wp_enqueue_scripts', 'thebis_enqueue_scripts' );	
    }


function thebis_sidebars() {

	// Blog Sidebar

	register_sidebar(array(
		'name' => esc_html__( 'Blog Sidebar', "thebis"),
		'id' => 'blog-sidebar',
		'description' => esc_html__( 'Sidebar on the blog layout.', "thebis"),
		'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-heading">',
		'after_title' => '</h2>',
	));
		

	// Footer Sidebar

	register_sidebar(array(
		'name' => esc_html__( 'Footer Widget Area', "thebis"),
		'id' => 'thebis-footer-widget-area',
		'description' => esc_html__( 'The footer widget area', "thebis"),
		'before_widget' => '<div class="%2$s footer-widget col-md-4 col-sm-6 col-xs-12">',
		'after_widget' => '</div>',
		'before_title' => ' <h4 class="widget_title">',
		'after_title' => '</h4>',
	));	

}
add_action( 'widgets_init', 'thebis_sidebars' );
