      <?php
      $thebis_enable_about     = get_theme_mod( 'thebis_aboutus_section_hideshow','hide');
      $thebis_about_no        = 1;
      $thebis_about_pages      = array();
      for( $i = 1; $i <= $thebis_about_no; $i++ ) {
      $thebis_about_pages[]    =  get_theme_mod( "thebis_about_page_$i", 1 );
      $thebis_about_btntxt    =  get_theme_mod( "thebis_about_btntxt_$i", '' );
      $thebis_about_btnurl    =  get_theme_mod( "thebis_about_btnurl_$i", '' );
      $thebis_about_title   =  get_theme_mod('thebis_about_title');  
      }
      $thebis_about_args  = array(
      'post_type' => 'page',
      'post__in' => array_map( 'absint', $thebis_about_pages ),
      'posts_per_page' => absint($thebis_about_no),
      'orderby' => 'post__in'
      ); 
      $thebis_about_query = new   wp_Query( $thebis_about_args );
      if( $thebis_enable_about == "show" && $thebis_about_query->have_posts() ) :
      ?>  
      <section class="content-section-type-2 flip-section large-section gray-section">
        <div class="container">
          <div class="row">
            <?php if($thebis_about_title != "")
      {?>
            <div class="col d-flex justify-content-center">
              <h2 class="section-title text-center title-divider">
                <?php echo esc_html($thebis_about_title); ?>
              </h2>
            </div>
            <?php } ?>
          </div>
        </div>
        <div class="content-section-type-1 container">
            <?php
              $count = 0;
              while($thebis_about_query->have_posts()) :
              $thebis_about_query->the_post();
            ?>
          <div class="row">
            <div class="col-lg-6">
              <div class="flip-container" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out" data-aos-duration="800" style="height: 359.438px;">
                <div class="img-wrapper">
                  <div class="front side">
                    <?php the_post_thumbnail(); ?> 
                  </div>
                  <div class="back side">
                    <div class="content-wrapper d-flex flex-column justify-content-center align-items-center">
                      <h4>
                        <?php the_title(); ?>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div class="col-lg-6">
              <div class="row services-wrapper">
                <div class="col-12 service-wrapper d-flex align-items-center">
                  <div class="content-wrapper d-flex flex-column">
                    <?php the_content(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
                  $count = $count + 1;
                  endwhile;
                  wp_reset_postdata();
                  ?>
        </div>
      </section>
      <?php endif; ?>