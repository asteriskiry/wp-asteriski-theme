<?php
/**
 * The template for displaying all pages
 */

get_header();

?>
<header class="page-header">
    <div class="overlay-dark"></div>
    <div class="container breadcrumbs-wrapper">
        <div class="breadcrumbs d-flex flex-column justify-content-center">
            <h3><?php wp_title(''); ?></h3>
        </div>
    </div>
</header>

<section class="white-section blog-section single-post-section">
    <div class="container">
        <div class="row">
            <div class="col single-post-wrapper">
                <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                <div class="content-page">
                    <div class="page-content" data-aos="fade-in" data-aos-delay="50">
                        <?php if(has_post_thumbnail()) : ?>
                        <div class="post-thumb-wrapper">
                            <?php the_post_thumbnail(); ?>
                        </div>
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
            </div>
        </div>
    </div>
    <?php get_template_part( 'section-parts/front-page-callout' ); ?>
<?php
if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;
?>
</section>
<?php get_footer(); ?>
