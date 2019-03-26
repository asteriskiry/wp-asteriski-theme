    <?php  
    $asteriski_blog_title =  get_theme_mod('asteriski_blog_title');  
    $asteriski_blog_section = get_theme_mod('asteriski_blog_section_hideshow','show');
    if ($asteriski_blog_section =='show') { 
    ?>
    <section class="recent-posts gray-section large-section">
      <div class="container">
        <div class="container">
          <div class="row">
            <?php if($asteriski_blog_title != "")
              {?>
            <div class="col d-flex justify-content-center">
              <h2 class="section-title text-center title-divider">
                <?php echo esc_html(get_theme_mod('asteriski_blog_title')); ?>
              </h2>
            </div>
            <?php } ?>
          </div>
        </div>
        <div class="row blog-wrapper">
          <?php 
            $asteriski_latest_blog_posts = new WP_Query( array( 'posts_per_page' => 3 ) );
            if ( $asteriski_latest_blog_posts->have_posts() ) : 
            while ( $asteriski_latest_blog_posts->have_posts() ) : $asteriski_latest_blog_posts->the_post(); 
           ?>
          <div class="col-lg-4">
            <div class="blog-card-wrapper">
              <div class="card-content hover3d-child">
                <div class="card-blog-header">
                  <?php
                    if(has_post_thumbnail()){ ?>
                  <div class="img-wrapper d-flex align-items-center justify-content-center">
                    <a href="blog-single-post-sidebar-layout.html">
                      <?php the_post_thumbnail();  ?>
                    </a>
                  </div>
                  <?php }  ?>
                </div>
                <div class="card-blog-body">
                  <span>
                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="blog-by-img"><?php echo get_avatar( get_the_author_meta('user_email'), $size = '140'); ?>
                      <?php echo esc_html__('By','asteriski'); ?> :
                      <?php the_author(); ?>
                    </a>
                  </span>
                  <h5>
                    <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                    </a>
                  </h5>
                  <?php the_excerpt() ?>
                  <div class="card-blog-footer d-flex justify-content-between     align-items-end">
                    <p class="date d-flex align-items-end">
                      <i class="fas fa-calendar-alt">
                      </i>
                      <?php echo  get_the_date(); ?>
                    </p>
                    <p class="info d-flex align-items-end">
                      <span>
                        <a href="<?php the_permalink(); ?>" class="blog-more-btn">
                          <?php echo esc_html__('Read More','asteriski'); ?>
                        </a>
                      </span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; 
            endif; 
            ?>
        </div>
      </div>
    </section>
    <?php } ?>