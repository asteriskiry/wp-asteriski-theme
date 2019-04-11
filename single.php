<?php
/**
 * The template for displaying single pages
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
            <div class="col-xl-12 col-md-12 col-sm-12 single-post-wrapper">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php  get_template_part('content-parts/content', 'single'); ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php
if (comments_open() || get_comments_number()) :
    comments_template();
endif;
?>
</section>
<?php get_footer(); ?>
