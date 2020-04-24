<?php
/**
 * Template Name: Yhteistyökumppanit
 * The template for partners page
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
        <?php the_excerpt() ?>
                <div class="cooperation">
                    <h3 class="text-center">Asteriski ry:n yhteistyökumppanit <?php echo date("Y") ?></h3>
                <?php
                echo '<div class="company-logos row">';

                // Create companies array and randomize it
                $companies = [];
                for ($i = 1; $i < 13; $i++) {
                    if ( get_theme_mod( "asteriski_cooperation_url_" . $i ) ) {
                        $companies[] = '
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 company-logo">
                        <a href="' . esc_url(get_theme_mod( "asteriski_cooperation_url_" . $i )) . '"><img src="' . get_theme_mod( "asteriski_cooperation_image_" . $i ) . '"></a>
                        </div>';
                    }
                }
                shuffle($companies);
                array_unshift($companies, '
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 company-logo">
                    <a href="' . esc_url(get_theme_mod( "asteriski_cooperation_url_main" )) . '"><img src="' . get_theme_mod( "asteriski_cooperation_image_main" ) . '"></a>
                </div>');

                // Echo companies array
                foreach ($companies as $company) {
                    echo $company;
                }
                ?>
                </div>
        <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12 single-post-wrapper">
                <h3 class="text-center">Yritysesittelyt</h3>
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
<?php
if (comments_open() || get_comments_number()) :
    comments_template();
endif;
?>
</section>
<?php get_footer(); ?>
