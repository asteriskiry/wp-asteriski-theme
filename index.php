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
                <div class="jumbotron headerjumbo" data-aos="fade-in" data-aos-delay="200">
                    <div class="logo3d">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/assets/img/3dasteriski.png'; ?>" />
                    </div>
                    <div class="headertext">
                        <h1>ASTERISKI RY</h1> 
                        <p>
                        <?php
                        if( get_theme_mod('asteriski_hero_header_text') ) : ?>
                        <p><?php echo wp_kses_post( html_entity_decode(get_theme_mod('asteriski_hero_header_text'))); ?></p>
                        <?php else : ?>
                        <p>Asteriski ry (*) on vuonna 1972 perustettu Turun Yliopiston tietojenkäsittelytieteiden opiskelijoiden ainejärjestö.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="arrowdown" data-aos="fade-in" data-aos-delay="500">
                    <a href="#posts"><i class="fas fa-chevron-circle-down hvr-sink"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="blog-section large-section gray-section" id="posts">
    <div class="container-fluid blog-layout-sidebar-wrapper">
        <div class="row blog-layout-sidebar recent-posts">
            <div class="col-xl-8 col-md-8 col-sm-12">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <article class="blog-card-wrapper ">
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
                <aside class="sidebar">
                    <?php get_sidebar(); ?>

                </aside>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
