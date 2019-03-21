<?php 
	/**
	 * Template Name: Home Page
	 *
	 */

	get_header(); 

	    get_template_part( 'section-parts/front-page-slider' );
	    get_template_part( 'section-parts/front-page-about' );
	    get_template_part( 'section-parts/front-page-service' );
	    get_template_part( 'section-parts/front-page-blog' );
	    get_template_part( 'section-parts/front-page-callout' );
        get_template_part( 'section-parts/front-page-thecontnent' );

	   get_footer();
	 ?>