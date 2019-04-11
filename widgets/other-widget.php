<?php

/**
 * Adds "Other stuff" widget.
 */

class Other extends WP_Widget
{
    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'other',
            'Asteriski muuta',
            array( 'description' => 'Widgetti joka näyttää random muita asioita.' )
        );
    }

    /**
     * Backend widget form.
     */
    public function form($instance)
    {
        $title = ! empty($instance['title']) ? $instance['title'] : 'Muuta'; ?>
<p> Otsikko:
    <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php 'Otsikko: '; ?></label> 
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
</p>
<?php
    }

    /**
     * Frontend display of widget.
     */
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        if (! empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }
    ?>
    <div class="other">
    <ul>
    <?php
        if (is_user_logged_in())
        {
            echo '<li class="otheritem"><a href="https://asteriski.fi/wp-login.php?action=logout">Kirjaudu ulos</a></li>';
        } else { ?>
            <li class="otheritem"><a href="https://asteriski.fi/wp-admin">Kirjaudu sisään</a></li>
            <li class="otheritem"><a href="https://asteriski.fi/register">Rekisteröidy</a></li>
        <?php } ?>
        <li class="otheritem"><a href="https://asteriski.fi/feed">Artikkeleiden RSS-feed</a></li>
        <li class="otheritem"><a href="https://nakit.asteriski.fi">Nakitin</a></li>
        <li class="otheritem"><a href="https://ilmot.asteriski.fi">Ilmojärjestelmä</a></li>
    </ul>
    </div>
    <?php
        echo $args['after_widget'];
    }

    /**
     * Sanitize widget form values as they are saved.
     */
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (! empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
        return $instance;
    }
}

// register Other widget
function register_other()
{
    register_widget('Other');
}

add_action('widgets_init', 'register_other');
