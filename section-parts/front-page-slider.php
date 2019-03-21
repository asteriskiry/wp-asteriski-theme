        <?php
        /**
        * Template part - Features Section of FrontPage
        *
        * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
        *
        * @package thebis
        */
        $thebis_slider_section     = get_theme_mod( 'thebis_slider_section_hideshow','hide');
        $thebis_slider_no        = 3;
        $thebis_slider_pages      = array();
        for( $i = 1; $i <= $thebis_slider_no; $i++ ) {
        $thebis_slider_pages[]    =  get_theme_mod( "thebis_slider_page_$i", 1 );
        $thebis_slider_btntxt[]    =  get_theme_mod( "thebis_slider_btntxt_$i", '' );
        $thebis_slider_btnurl[]    =  get_theme_mod( "thebis_slider_btnurl_$i", '' );
        $thebis_slider_btntxt2[]    =  get_theme_mod( "thebis_slider_btntxt2_$i", '' );
        $thebis_slider_btnurl2[]    =  get_theme_mod( "thebis_slider_btnurl2_$i", '' );
        }
        $thebis_slider_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $thebis_slider_pages ),
        'posts_per_page' => absint($thebis_slider_no),
        'orderby' => 'post__in'
        ); 
        $thebis_slider_query = new wp_Query( $thebis_slider_args );
        if ($thebis_slider_section =='show' && $thebis_slider_query->have_posts() ) { ?>
        <section class="hero-header hero-default dark_overlay bg_img" data-section-type="slider_default">
          <div class="swiper-container swiper-hero">
            <div class="swiper-wrapper">
              <?php
                $count = 0;
                while($thebis_slider_query->have_posts()) :
                $thebis_slider_query->the_post();
                ?>
              <?php if($count%2==0){ ?>
              <div class="swiper-slide bg_img" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                <div class="container hero-content hero-center d-flex align-items-center">
                  <div class="content-default">
                    <h2 class="display-3 content-heading bold-heading">
                      <?php the_title(); ?>
                    </h2>
                      <?php the_excerpt(); ?>
                      <?php
                        if (!empty($thebis_slider_btntxt[$count])) {
                        ?>
                      <a href="<?php echo esc_url($thebis_slider_btnurl[$count]); ?>" class="button-default-color hero-btn">
                        <?php echo esc_html($thebis_slider_btntxt[$count]); ?>
                      </a>
                      <?php } ?>
                      <?php
                        if (!empty($thebis_slider_btntxt2[$count])) {
                        ?>
                      <a href="<?php echo esc_url($thebis_slider_btnurl2[$count]); ?>" class="button-default-white hero-btn">
                        <i class="fa fa-th-large">
                        </i>
                        <?php echo esc_html($thebis_slider_btntxt2[$count]); ?>
                      </a>
                      <?php } ?>
                  </div>
                </div>
              </div>
              <?php } 
                else {
                ?>
              <div class="swiper-slide bg_img" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                <div class="container hero-content d-flex align-items-center">
                  <div class="content-default">
                    <h2 class="display-3 content-heading bold-heading">
                      <?php the_title(); ?>
                    </h2>
                      <?php the_content(); ?>
                    <?php
                    if (!empty($thebis_slider_btntxt[$count])) {
                    ?>
                    <a href="<?php echo esc_url($thebis_slider_btnurl[$count]); ?>" class="button-default-color hero-btn">
                      <?php echo esc_html($thebis_slider_btntxt[$count]); ?>
                    </a>
                    <?php } ?>
                    <?php
                    if (!empty($thebis_slider_btntxt2[$count])) {
                    ?>
                    <a href="<?php echo esc_url($thebis_slider_btnurl2[$count]); ?>" class="button-default-white hero-btn">
                      <i class="fa fa-th-large">
                      </i>
                      <?php echo esc_html($thebis_slider_btntxt2[$count]); ?>
                    </a>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <?php } ?>       
              <?php
                $count = $count + 1;
                endwhile;
                wp_reset_postdata();
                ?>    
            </div>   
          </div>
          <div class="swiper-pagination-bullets-default">
          </div>
          <div class="swiper-button-prev-default">
            <i class="fa fa-angle-left">
            </i>
          </div>
          <div class="swiper-button-next-default">
            <i class="fa fa-angle-right">
            </i>
          </div>
          </div>
        </section>

        <?php }
else
{?>
 <header class="page-header">
            <div class="overlay-dark"></div>
            <div class="container breadcrumbs-wrapper">
                <div class="breadcrumbs d-flex flex-column justify-content-center">
                     <?php if (is_home() || is_front_page()) { ?>
                      <h3><?php echo esc_html__('Home', 'thebis') ?></h3>
                      <?php } ?>
                    <div>
                    </div>
                </div>
            </div>
        </header>
        <?php }


   ?>