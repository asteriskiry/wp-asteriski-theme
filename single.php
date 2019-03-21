 <?php
       /**
       * The template for displaying single pages.
       *
       * This is the template that displays single pages by default.
       * Please note that this is the WordPress construct of pages
       * and that other 'pages' on your WordPress site will use a
       * different template.
       *
       * @package thebis 
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
                    <div class="col-xl-8 col-md-8 col-sm-12 single-post-wrapper">
                       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php  get_template_part( 'content-parts/content', 'single' ); ?>
                         <?php endwhile; ?>
                         <?php endif; ?>
                    </div>
                      <div class="col-xl-4 col-md-4 col-sm-12">
                          <aside class="sidebar">
                              <?php get_sidebar(); ?>
                          </aside>
                      </div>
                </div>
            </div>
              <?php 
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif; 
              ?> 
 </section>
        <?php get_footer(); ?>