<?php
/**
 * Template for footer area
 */
?>

<footer class="footer-area">
    <div class="container">
        <div class="footer-top">
            <div class="row clearfix">
                <?php dynamic_sidebar('asteriski-footer-widget-area'); ?>

                <div class="cooperation">

                <?php
                // Cooperation company logos ?>

                <h4 class="widget_title">Yhteistyössä</h4>
                <?php
                // Main partner
                if ( get_theme_mod( "asteriski_cooperation_url_main" ) ) {
                    echo '<div style="text-align: center;" class="main-company">';
                    echo '<a href="' . esc_url(get_theme_mod( "asteriski_cooperation_url_main" )) . '" target="_blank"><img src="' . get_theme_mod( "asteriski_cooperation_image_main" ) . '"></a>';
                    echo '</div>';
                }
                echo '<div class="company-logos row">';

                // Create companies array and randomize it
                $companies = [];
                for ($i = 1; $i < 20; $i++) {
                    if ( get_theme_mod( "asteriski_cooperation_url_" . $i ) ) {
                        $companies[] = '
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 company-logo">
                        <a href="' . esc_url(get_theme_mod( "asteriski_cooperation_url_" . $i )) . '" target="_blank"><img src="' . get_theme_mod( "asteriski_cooperation_image_" . $i ) . '"></a>
                        </div>';
                    }
                }
                shuffle($companies);

                // Echo companies array
                foreach ($companies as $company) {
                    echo $company;
                }
                ?>
                </div>
                </div>
                <a style="margin: auto; margin-top: 30px;" href="/yhteistyo">Yhteistyöhön Asteriskin kanssa?</a>
            </div>
        </div>
    </div>
    <div style="clear:both;"></div>
<?php
// Social icons transferred to hero header
$asteriski_social_icon_url_facebook = get_theme_mod( "asteriski_social_icon_url_facebook", '' );
$asteriski_social_icon_url_twitter = get_theme_mod( "asteriski_social_icon_url_twitter", '' );
$asteriski_social_icon_url_youtube = get_theme_mod( "asteriski_social_icon_url_youtube", '' );
$asteriski_social_icon_url_instagram = get_theme_mod( "asteriski_social_icon_url_instagram", '' );
$asteriski_social_icon_url_github = get_theme_mod( "asteriski_social_icon_url_github", '' );
?>
<div class="footer-inner">
    <div class="container">
        <div class="footer-copyright">
        <?php
        if( get_theme_mod('asteriski_footer_text') ) : ?>
        <p><?php echo wp_kses_post( html_entity_decode(get_theme_mod('asteriski_footer_text'))); ?></p>
        <?php else : ?>
        <p>© <?php echo date("Y"); ?> Asteriski ry</p>
        <?php endif; ?>
        </div>
    </div>
</div>
</footer>
<?php wp_footer(); ?>
