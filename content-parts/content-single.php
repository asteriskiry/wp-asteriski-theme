<?php
/**
 * Template for showing single page parts
 */
?>

 <div class="post-content">
     <?php if (has_post_thumbnail()) : ?>
     <div class="post-thumb-wrapper">
         <?php the_post_thumbnail(); ?>
     </div>
     <?php endif; ?>
     <h4 class="post-title">
         <?php the_title(); ?>
     </h4>
     <ul class="meta-blog-list">
         <li>
             <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                 <i class="far fa-user">
                 </i><?php echo esc_html__('By ', 'asteriski'); ?>
                 <?php the_author(); ?>
             </a>
         </li>
         <li>
             <i class="fas fa-calendar-alt">
             </i>
             <?php echo get_the_date(); ?>
         </li>
         &nbsp;
         <li>
             <i class="fa fa-comment">
             </i>
             <?php comments_number(__('0 comments', 'asteriski'), __('1 comments', 'asteriski'), __('% comments', 'asteriski')); ?>
         </li>
     </ul>
     <?php the_content(); ?>
<?php
wp_link_pages(array(
    'before' => '<div class="page-links">' . esc_html__('Pages: ', 'asteriski'),
    'after'  => '</div>',
));
?>
 </div>
 <div class="description-box d-flex">
     <div class="tags">
         <?php if (has_tag()) : ?>
         <div class="d-flex tags-wrapper">
             <?php $seperator = ''; // blank instead of comma?>
             <?php echo esc_html__(' ', 'asteriski'); ?>
             <?php the_tags($seperator, '&nbsp;'); ?>
         </div>
         <?php endif; ?>
     </div>
 </div>
