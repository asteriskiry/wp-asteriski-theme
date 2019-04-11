<?php
/**
 * Template for blog posts
 */
?>

 <div class="card-content hover3d-child">
     <div class="card-blog-header">
         <?php if (has_post_thumbnail()) : ?>
         <div class="img-wrapper d-flex align-items-center justify-content-center">
             <a href="<?php the_permalink(); ?>">
                 <?php the_post_thumbnail(); ?>
             </a>
         </div>
         <?php endif; ?>
     </div>
     <div class="card-blog-body">

<?php /** Comment out author

         <span>
             <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="blog-by-img"><?php echo get_avatar(get_the_author_meta('user_email'), $size = '140'); ?>
                 <?php echo esc_html__('Kirjoittaja', 'asteriski'); ?>
                 <?php the_author(); ?>
             </a>
         </span>

 */ ?>

         <h5>
             <a href="<?php the_permalink() ; ?>">
                 <?php the_title(); ?>
             </a>
         </h5>
         <?php the_excerpt(); ?>
         <div class="card-blog-footer d-flex justify-content-between align-items-end">
             <p class="date">
                 <i class="fas fa-calendar-alt">
                 </i>
                 <?php echo get_the_date(); ?>
             </p>
             <p class="info d-flex align-items-end">
                 <span>
                     <a href="<?php the_permalink(); ?>" class="blog-more-btn">
                         <?php echo esc_html__('Lue lisää', 'asteriski'); ?>
                     </a>
                 </span>
             </p>
         </div>
     </div>
 </div>
