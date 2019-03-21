<?php
       /**
       * The template for displaying all posts.
       *
       * This is the template that displays all posts by default.
       * Please note that this is the WordPress construct of posts
       * and that other 'posts' on your WordPress site will use a
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
                     <?php if ( have_posts() ) : ?>
                    <h3><?php   /* translators: %s: search term */             
                         printf( esc_html__( 'Search Results for: %s', 'thebis' ), '<span>' . get_search_query() . '</span>' ); ?>
                    </h3>
                    <?php else : ?>

                     <h3><?php /* translators: %s: nothing found term */
                         printf( esc_html__( 'Nothing Found for: %s', 'thebis' ), '<span>' . get_search_query() . '</span>' );  ?>       
                     </h3>
                      <?php endif; ?>
                    <div>
                       
                    </div>
                </div>
            </div>
        </header>     

        <section class="blog-section large-section gray-section">
            <div class="container-fluid blog-layout-sidebar-wrapper">
                <div class="row blog-layout-sidebar recent-posts">
                    <div class="col-xl-8 col-md-8 col-sm-12">
                        <?php if(have_posts()) : ?>
                         <?php while(have_posts()) : the_post(); ?>
                        <article class="blog-card-wrapper ">
                            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php get_template_part('content-parts/content', get_post_format()); ?>
                            </div>
                         </article>
                          <?php endwhile; ?>
                            <?php else : 
                              get_template_part( 'content-parts/content', 'none' );
                          endif; ?>
                            <div class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100"
                                data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out" data-aos-duration="800">
                                <ul class="styled-pagination">
                                 <?php the_posts_pagination(
                                  array(
                                 'prev_text' => esc_html__('&lt;','thebis'),
                                 'next_text' => esc_html__('&gt;','thebis')
                                   )
                                   ); ?>
                                </ul>
                            </div>
                    </div>
                     <div class="col-xl-4 col-md-4 col-sm-12">
                        <aside class="sidebar">
                            <?php get_sidebar(); ?>
                       
                        </aside>
                     </div>
                </div>
            </div>
        </section>
        <?php get_footer(); ?>