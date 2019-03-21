<?php
/**
 * Template Name: error
 *
 * @package thebis
 */ 
get_header(); ?>

 <header class="page-header">
            <div class="overlay-dark"></div>
            <div class="container breadcrumbs-wrapper">
                <div class="breadcrumbs d-flex flex-column justify-content-center">
                    <h3><?php echo esc_html__( '404', 'thebis' ); ?></h3>
                     <h3><?php echo esc_html__( 'Nothig Found', 'thebis' ); ?></h3>
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="theme-btn btn-style-one"><?php echo esc_html__( 'Back To Home
                      ', 'thebis' ); ?></a>
                </div>
            </div>
    </header>  
        <?php get_footer(); ?>