<?php
/**
 * The template part for displaying a message that posts cannot be found
 */
?>

<?php if (is_home() && current_user_can('publish_posts')) : ?>
<p>
    <?php printf(esc_html__('Haluatko julkaista ensimmäisen artikkelisi?', 'asteriski'), esc_url(admin_url('post-new.php'))); ?>
</p>
<?php elseif (is_search()) : ?>
<h4>
    <?php printf(esc_html__('Antamallasi hakusanalla ei löytynyt mitään.', 'asteriski'), '<span>' . get_search_query() . '</span>'); ?>
</h4>
<div class="widget widget_search cc-search">
    <?php get_search_form(); ?>
</div>
<?php else : ?>
<p>
    <?php echo(esc_html__('Hakemaasi sisältöä ei löytynyt. Kokeile hakua.', 'asteriski')); ?>
</p>
<div class="widget widget_search cc-search">
    <?php get_search_form(); ?>
</div>
<?php endif; ?>
