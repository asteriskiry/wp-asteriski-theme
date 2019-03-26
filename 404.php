<?php
/**
 * Template Name: error
 */ 
get_header(); ?>

<header class="index-page-header">
    <div class="overlay-dark"></div>
    <div class="container breadcrumbs-wrapper">
        <div class="breadcrumbs d-flex flex-column justify-content-center">
            <div class="page404">
                <img class="" src="<?php echo get_template_directory_uri() . '/assets/img/404.png'; ?>" />
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn"><?php echo esc_html__( 'Takaisin etusivulle', 'asteriski' ); ?></a>
            </div>
        </div>
    </div>
</header>
<?php get_footer(); ?>
