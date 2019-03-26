<?php
/**
 * Welcome Screen Class
 */
class asteriski_screen {

    /**
     * Constructor for the welcome screen
     */
    public function __construct() {

        /* activation notice */
        add_action( 'load-themes.php', array( $this, 'asteriski_activation_admin_notice' ) );

    }

    public function asteriski_activation_admin_notice() {
        global $pagenow;

        if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
            add_action( 'admin_notices', array( $this, 'asteriski_admin_notice' ), 99 );
        }
    }

    /**
     * Display an admin notice linking to the welcome screen
     * @sfunctionse 1.8.2.4
     */
    public function asteriski_admin_notice() {
?>			
<div class="updated notice is-dismissible construction-zone-notice">
<h1><?php
        $theme_info = wp_get_theme();
        printf( esc_html__('Welcome to the Wordpress User!', 'asteriski'), esc_html( $theme_info->Name ), esc_html( $theme_info->Version ) ); ?>
</h1>
<p><?php echo sprintf( esc_html__("Heartily Welcome! Thanks for choosing our theme. To take full advantage of the features this theme has to offer visit our %1\$s welcome page %2\$s.", "asteriski"), '<a href="' . esc_url( admin_url( 'themes.php?page=asteriski_upgrade' ) ) . '">', '</a>' ); ?></p>
<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=asteriski_upgrade' ) ); ?>" class="button button-blue-secondary button_info" style="text-decoration: none;"><?php echo esc_html__('Get started with asteriski','asteriski'); ?></a></p>
</div>
<?php
    }

}

$GLOBALS['asteriski_screen'] = new asteriski_screen();
