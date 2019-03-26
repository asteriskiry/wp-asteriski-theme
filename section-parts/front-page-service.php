        <?php
        $asteriski_services_section = get_theme_mod( 'asteriski_services_section_hideshow','hide');
        $asteriski_services_title   =  get_theme_mod('asteriski_services_title');  
        $asteriski_services_no        = 6;
        $asteriski_services_pages      = array();
        $asteriski_services_icons     = array();
        for( $i = 1; $i <= $asteriski_services_no; $i++ ) {
        $asteriski_services_pages[]    =  get_theme_mod( "asteriski_service_page_$i", 1 );
        $asteriski_services_icons[]    = get_theme_mod( "asteriski_page_service_icon_$i", '' );
        }
        $asteriski_services_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $asteriski_services_pages ),
        'posts_per_page' => absint($asteriski_services_no),
        'orderby' => 'post__in'
        ); 
        $asteriski_services_query = new wp_Query( $asteriski_services_args );
        if( $asteriski_services_section == "show") :
        ?>
        <section class="content-section-type-2 flip-section large-section gray-section">
          <div class="container">
            <div class="row">
              <?php if($asteriski_services_title != "")
               {?>
              <div class="col d-flex justify-content-center">
                <h2 class="section-title text-center title-divider">
                  <?php echo esc_html(get_theme_mod('asteriski_services_title')); ?>
                </h2>
              </div>
              <?php  } ?> 
            </div>
          </div>
          <div class="container">
            <div class="icon-boxes-type-2">
              <div class="row justify-content-center">
                <?php
                    $count = 0;
                    while($asteriski_services_query->have_posts() && $count <= 5 ) :
                    $asteriski_services_query->the_post();
                 ?>
                <div class="col-md-6 col-xl-4 icon-box-wrapper hover3d-wrapper">
                  <div class="icon-box d-flex flex-column hover3d-child">
                    <?php if($asteriski_services_icons[$count] !=""){ ?>
                    <i class="fa <?php echo esc_attr($asteriski_services_icons[$count]); ?>">
                    </i>
                    <?php } ?>
                    <h5>
                      <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                      </a>
                    </h5>
                    <?php the_content(); ?>
                  </div>
                </div>
                <?php
                    $count = $count + 1;
                    endwhile;
                    wp_reset_postdata();
                ?>     
              </div>
            </div>
          </div>
        </section> 
        <?php endif; ?>