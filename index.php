<?php
/**
 * The template for displaying all posts.
 *
 * This is the template that displays all posts by default.
 * Please note that this is the WordPress construct of posts
 * and that other 'posts' on your WordPress site will use a
 * different template.
 *
 * @package thebis 
 */
get_header();

?>
<header class="index-page-header">
    <div class="overlay-dark"></div>
    <div class="container breadcrumbs-wrapper">
        <div class="breadcrumbs d-flex flex-column justify-content-center">
            <div class="container headercontent">
                <div class="jumbotron headerjumbo">
                    <div class="logo3d">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/assets/img/3dasteriski.png'; ?>" />
                    </div>
                    <div class="headertext">
                    <h1>ASTERISKI RY</h1> 
                    <p>Asteriski ry (*) on vuonna 1972 perustettu Turun Yliopiston tietojenkäsittelytieteiden opiskelijoiden ainejärjestö</p>
                    </div>
                </div>
            </div>
            <h3><?php  ?></h3>
            <h3><?php wp_title(''); ?></h3>
            <div>

            </div>
        </div>
    </div>
</header>     

<section class="blog-section large-section gray-section">
    <div class="container-fluid blog-layout-sidebar-wrapper">
        <div class="row blog-layout-sidebar recent-posts">
            <div class="col-xl-8 col-md-8 col-sm-12">
                <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                <article class="blog-card-wrapper ">
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php get_template_part('content-parts/content', get_post_format()); ?>
                    </div>
                </article>
                <?php endwhile; ?>
<?php else : 
    get_template_part( 'content-parts/content', 'none' );
endif; ?>
<div class="d-flex justify-content-center">
    <ul class="styled-pagination">
<?php the_posts_pagination(
    array(
        'prev_text' => esc_html__('&lt;','thebis'),
        'next_text' => esc_html__('&gt;','thebis')
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
