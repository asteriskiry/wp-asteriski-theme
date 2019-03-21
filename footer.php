  <footer class="footer-area">
            <div class="container">
                <div class="footer-top">
                   <div class="row clearfix">
                   <?php dynamic_sidebar('thebis-footer-widget-area'); ?>
                  </div>
                </div>
            </div>
            <?php 
            $thebis_footer_section_hideshow = get_theme_mod("thebis_footer_section_hideshow", 'show');
            $thebis_social_icon_url_1 = get_theme_mod( "thebis_social_icon_url_1", '' );
            $thebis_social_icon_url_2 = get_theme_mod( "thebis_social_icon_url_2", '' );
            $thebis_social_icon_url_3 = get_theme_mod( "thebis_social_icon_url_3", '' );
            $thebis_social_icon_url_4 = get_theme_mod( "thebis_social_icon_url_4", '' );
            $thebis_social_icon_url_5 = get_theme_mod( "thebis_social_icon_url_5", '' );

            if( $thebis_footer_section_hideshow == 'show' ) :
             ?>
            <div class="footer-inner ">
                <div class="container">
                    <div class="footer-social d-flex">
                        <?php if ( $thebis_social_icon_url_1 ): ?>
                        <div class="social-box">
                            <a href="<?php echo esc_url( $thebis_social_icon_url_1 ); ?>">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                        <?php endif; ?>
                        <?php if ( $thebis_social_icon_url_2 ): ?>
                        <div class="social-box">
                            <a href="<?php echo esc_url( $thebis_social_icon_url_2 ); ?>">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                        <?php endif; ?>
                        <?php if ( $thebis_social_icon_url_3 ): ?>
                        <div class="social-box">
                            <a href="<?php echo esc_url( $thebis_social_icon_url_3 ); ?>">
                               <i class="fab fa-tumblr"></i>
                            </a>
                        </div>
                        <?php endif; ?>
                        <?php if ( $thebis_social_icon_url_4 ): ?>
                        <div class="social-box">
                            <a href="<?php echo esc_url( $thebis_social_icon_url_4 ); ?>">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                        <?php endif; ?>
                        <?php if ( $thebis_social_icon_url_5 ): ?>
                        <div class="social-box">
                            <a href="<?php echo esc_url( $thebis_social_icon_url_5 ); ?>">
                                <i class="fab fa-vk"></i>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="footer-copyright">
                        <?php
                       if( get_theme_mod('thebis_footer_text') ) : ?>
                        <p><?php echo wp_kses_post( html_entity_decode(get_theme_mod('thebis_footer_text'))); ?></p>
                        <?php else : ?>
						 <a href="<?php echo esc_url( esc_html__( 'https://wordpress.org/', 'thebis' ) ); ?>" class="imprint">
							<?php
							/* translators: %s: WordPress. */
							printf( esc_html__( 'Proudly powered by %s.', 'thebis' ), 'WordPress' );
							?>
						</a>
					<?php 	endif; ?>
                    </div>
                </div>
            </div>
          <?php endif; ?>
        </footer>
<?php wp_footer(); ?>