<?php
/**
 * The template for displaying comments
 */

if (post_password_required()) {
    return;
}
?>
<div class="container-fluid gray-section">
    <div class="container">
        <div class="row">
            <div class="col comments-col">
                <div class="post-comments-wrapper gray-section">
                    <?php if (have_comments()) : ?>
                    <p class="comments-title">
                    <?php
                    $comments_number = get_comments_number();
                        printf(
                            esc_html(
                                _nx(
                                    'Kommentit',
                                    'Kommentit',
                                    $comments_number,
                                    'comments title',
                                    'asteriski'
                                )
                            ),
                            esc_html(number_format_i18n($comments_number)),
                            get_the_title()
                        );
                    ?>
                    </p>
                    <?php the_comments_navigation(); ?>
                    <ul>
                    <?php
                    wp_list_comments(array(
                        'style'       => 'ul',
                        'short_ping'  => true,
                        'avatar_size' => 42,
                    ));
                    ?>
                    </ul>

                    <?php the_comments_navigation(); ?>
                    <?php endif; ?>

                    <?php
                    if (! comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'asteriski')) :
                    ?>
                    <p class="no-comments"><?php esc_html__('Kommentointi pois käytöstä..', 'asteriski'); ?></p> 
                    <?php endif; ?>
                </div>
                <?php
                    comment_form();
                ?>
            </div>
        </div>
    </div>
</div>
