<?php
/**
 * Template for main page
 */

get_header();

?>
<header class="index-page-header">
    <div class="overlay-dark"></div>
    <div class="container breadcrumbs-wrapper">
        <div class="breadcrumbs d-flex flex-column justify-content-center">
            <div class="container headercontent">
                <div class="jumbotron headerjumbo" data-aos="zoom-in" data-aos-delay="100" data-aos-offset="-200">
                    <div class="logo3d">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/assets/img/3dasteriski.png'; ?>" />
                    </div>
                    <div class="headertext">
                        <h1>ASTERISKI RY</h1> 
                        <p>
                        <?php
                        $asteriski_social_icon_url_facebook = get_theme_mod( "asteriski_social_icon_url_facebook", '' );
                        $asteriski_social_icon_url_twitter = get_theme_mod( "asteriski_social_icon_url_twitter", '' );
                        $asteriski_social_icon_url_youtube = get_theme_mod( "asteriski_social_icon_url_youtube", '' );
                        $asteriski_social_icon_url_instagram = get_theme_mod( "asteriski_social_icon_url_instagram", '' );
                        $asteriski_social_icon_url_github = get_theme_mod( "asteriski_social_icon_url_github", '' );
                        if( get_theme_mod('asteriski_hero_header_text') ) : ?>
                        <p><?php echo wp_kses_post( html_entity_decode(get_theme_mod('asteriski_hero_header_text'))); ?></p>
                        <?php else : ?>
                        <p>Asteriski ry (*) on vuonna 1972 perustettu Turun Yliopiston tietojenkäsittelytieteiden opiskelijoiden ainejärjestö.</p>
                        <?php endif; ?>
                        <div class="header-social d-flex">
                            <?php if ( $asteriski_social_icon_url_facebook ): ?>
                            <div class="social-box">
                                <a href="<?php echo esc_url( $asteriski_social_icon_url_facebook ); ?>">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                            <?php endif; ?>
                            <?php if ( $asteriski_social_icon_url_twitter ): ?>
                            <div class="social-box">
                                <a href="<?php echo esc_url( $asteriski_social_icon_url_twitter ); ?>">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                            <?php endif; ?>
                            <?php if ( $asteriski_social_icon_url_youtube ): ?>
                            <div class="social-box">
                                <a href="<?php echo esc_url( $asteriski_social_icon_url_youtube ); ?>">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                            <?php endif; ?>
                            <?php if ( $asteriski_social_icon_url_instagram ): ?>
                            <div class="social-box">
                                <a href="<?php echo esc_url( $asteriski_social_icon_url_instagram ); ?>">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                            <?php endif; ?>
                            <?php if ( $asteriski_social_icon_url_github ): ?>
                            <div class="social-box">
                                <a href="<?php echo esc_url( $asteriski_social_icon_url_github ); ?>">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
                <div class="arrowdown" data-aos="zoom-in" data-aos-delay="400" data-aos-offset="-200">
                    <a href="#posts"><i class="fas fa-chevron-circle-down hvr-sink"></i></a>
                </div>
            <div style="margin-top: 200px;" id="posts"></div>
        </div>
    </div>
</header>

<section class="blog-section large-section gray-section">
    <div class="container-fluid blog-layout-sidebar-wrapper">
        <div class="row blog-layout-sidebar recent-posts">
            <div class="col-xl-8 col-md-8 col-sm-12">
                <h3 class="widget-heading">Uusimmat artikkelit</h3>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <article class="blog-card-wrapper" data-aos="fade-in" data-aos-delay="50">
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php get_template_part('content-parts/content', get_post_format()); ?>
                    </div>
                </article>
                <?php endwhile; ?>
                <?php else :
                    get_template_part('content-parts/content', 'none');
                endif; ?>
                <div class="d-flex justify-content-center">
                    <ul class="styled-pagination">
                <?php the_posts_pagination(
                    array(
                        'prev_text' => esc_html__('&lt;', 'asteriski'),
                        'next_text' => esc_html__('&gt;', 'asteriski')
                    )
                ); ?>
    </ul>
</div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-12">
                <aside class="sidebar" data-aos="fade-in" data-aos-delay="50">
                    <?php get_sidebar(); ?>
                </aside>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
