<?php
/**
 * Template for header area
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
        <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php endif; ?>

    </head>

    <body <?php body_class(); ?>>
        <nav class="navbar navbar-default desktop-menu logo-left header-type-one">
            <div class="container-fluid navbar-inner">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link d-flex align-items-center">
                    <div class="navbarlogo">
                        <img class="hvr-rotate-more" src="<?php echo get_template_directory_uri() . '/assets/img/asteriski-logo.png'; ?>" />
                    </div>
                    <div class="navbartitles">
                        <h2 class="blogtitle">
                            <?php bloginfo('name'); ?>
                        </h2>
                        <p class="blogdesc">
                            <?php bloginfo('description'); ?>
                        </p>
                    </div>
                </a>
                <div class="navbar-menu">
<?php wp_nav_menu(
    array(
        'container'        => 'ul',
        'theme_location'    => 'primary',
        'menu_class'        => 'dropdown',
        'items_wrap'        => '<ul class="navbar-menu-list">%3$s</ul>',
        'fallback_cb'       => 'asteriski_wp_bootstrap_navwalker::fallback',
        'walker'            => new asteriski_wp_bootstrap_navwalker()
    )
);

$asteriski_header_section = get_theme_mod('asteriski_header_section_hideshow', 'show');
if ($asteriski_header_section =='show') {
    $asteriski_ctah_btn_text = get_theme_mod('asteriski_ctah_btn_text');
    $asteriski_ctah_btn_url=get_theme_mod('asteriski_ctah_btn_url');

    if (!empty($asteriski_ctah_btn_url)) {
        ?>
<div class="navbar-additional align-items-center">
    <div class="qoute-btn">
        <a href="<?php echo esc_url($asteriski_ctah_btn_url); ?>"><?php echo esc_html($asteriski_ctah_btn_text); ?></a>
    </div>
</div>

<?php
    }
} ?>
<div class="navbar-search align-items-center justify-content-center">
    <div class="search-input d-flex align-items-center justify-content-center">
        <div class="search-icon">
            <i class="fa fa-search"></i>
        </div>
        <div class="search-times">
            <i class="fa fa-times"></i>
        </div>
    </div>
    <form class="search-form" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <input type="text" name="s" placeholder="Hae tästä">
    </form>
</div>
                </div>
                <button class="hamburger justify-content-center align-items-center hamburger--spin" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
            </div>
        </nav>
