<?php
/**
 * The template for displaying all archive post.
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

<section class="blog-section large-section gray-section">
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
