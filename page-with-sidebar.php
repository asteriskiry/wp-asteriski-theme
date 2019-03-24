<?php
/**
 * Template name: Page-with-sidebar
 *
 * The template for displaying pages with sidebar.
 */

get_header();

?>
<header class="page-header">
    <div class="overlay-dark"></div>
    <div class="container breadcrumbs-wrapper">
        <div class="breadcrumbs d-flex flex-column justify-content-center">
            <h3><?php  ?></h3>
            <h3><?php wp_title(''); ?></h3>
            <div>

            </div>
        </div>
    </div>
</header>

<section class="white-section blog-section single-post-section">
    <div class="container">
        <div class="row">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <div class="col-xl-8 col-md-8 col-sm-12 single-post-wrapper">
                <div class="content-page">
                    <?php if(has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>&nbsp;
                    <?php endif; ?>
                    <?php the_content(); ?>
<?php
wp_link_pages( array(
    'before' => '<div class="page-links">' . esc_html__('Pages: ', 'asteriski' ),
    'after'  => '</div>',
) );
?>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="col-xl-4 col-md-4 col-sm-12">
                <aside class="sidebar">
                    <?php get_sidebar(); ?>
                </aside>
            </div>
        </div>
    </div>
</section>
<?php
if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;
?>
<?php get_footer(); ?>
