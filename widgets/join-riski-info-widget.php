<?php

/**
 * Adds "Join Riski-info" widget.
 */

class JoinRiskiInfo extends WP_Widget
{
    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'joinriskiinfo',
            'Asteriski Liity Riski-infoon',
            array( 'description' => 'Widgetti riski-infoon liittymiselle.' )
        );
    }

    /**
     * Backend widget form.
     */
    public function form($instance)
    {
        $title = ! empty($instance['title']) ? $instance['title'] : 'Liity Riski-infoon!';
        $infotext = ! empty($instance['infotext']) ? $instance['infotext'] : 'Liittymällä riski-infoon saat ajantasaista tietoa meidän tapahtumista. Tilaus tulee vahvistaa klikkaamalla sähköpostiisi lähetettävää linkkiä.'; ?>
<p> Otsikko:
    <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php 'Otsikko: '; ?></label> 
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
</p>
<p> Teksti:
    <label for="<?php echo esc_attr($this->get_field_id('infotext')); ?>"><?php 'Teksti: '; ?></label> 
    <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('infotext')); ?>" name="<?php echo esc_attr($this->get_field_name('infotext')); ?>" type="text"><?php echo esc_attr($infotext); ?></textarea>
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
        <p><?php echo $instance['infotext']; ?></p>
        <form method="post" action="https://lists.utu.fi/mailman/subscribe/riski-info">
        <input class="form-control riski-info-input riski-input" placeholder="riski@utu.fi" name="email"><input class="btn riski-info-button riskibutton"  type="submit" name="email-button" value="Tilaa" >
        </form>
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
        $instance['infotext'] = (! empty($new_instance['infotext'])) ? sanitize_text_field($new_instance['infotext']) : '';
        return $instance;
    }
}
