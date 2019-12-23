
<?php
/**
 * The template for Asteriski 48v annual celebration page
 */

get_header();

?>
<header>
</header>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/tonsky/FiraCode@1.207/distr/fira_code.css">
<section class="white-section blog-section single-post-section" style="background-color: #111; min-height: 100%; font-family: 'Fira Code', monospace;">
<style>
html {
    height: 100%;
}
body {
    height: 100%;
}
footer {
    display: none;
}
</style>
    <div>
        <div class="row">
            <div class="col single-post-wrapper">
                <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                <div class="content-page">
                    <div class="page-content">
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
</section>
<?php get_footer(); ?>
