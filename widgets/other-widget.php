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
            'Asteriski Muuta',
            array( 'description' => 'Muuta-widgetti' )
        );
    }

    /**
     * Backend widget form.
     */
    public function form($instance)
    {
        $title = ! empty($instance['title']) ? $instance['title'] : 'Muuta';
        $customlink1 = ! empty($instance['customlink1']) ? $instance['customlink1'] : '';
        $customlink2 = ! empty($instance['customlink2']) ? $instance['customlink2'] : '';
        $customlink3 = ! empty($instance['customlink3']) ? $instance['customlink3'] : '';
?>
<p> Otsikko:
    <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php 'Otsikko: '; ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
</p>

<p> Näytettävät asiat:</p>
<p>
    <input class="checkbox" type="checkbox" <?php checked( $instance[ 'login' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'login' ); ?>" name="<?php echo $this->get_field_name( 'login' ); ?>" />
    <label for="<?php echo $this->get_field_id( 'login' ); ?>">Kirjaudu sisään</label>
</p>
<p>
    <input class="checkbox" type="checkbox" <?php checked( $instance[ 'logoff' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'logoff' ); ?>" name="<?php echo $this->get_field_name( 'logoff' ); ?>" />
    <label for="<?php echo $this->get_field_id( 'logoff' ); ?>">Kirjaudu ulos</label>
</p>
<p>
    <input class="checkbox" type="checkbox" <?php checked( $instance[ 'register' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'register' ); ?>" name="<?php echo $this->get_field_name( 'register' ); ?>" />
    <label for="<?php echo $this->get_field_id( 'register' ); ?>">Rekisteröidy</label>
</p>
<p>
    <input class="checkbox" type="checkbox" <?php checked( $instance[ 'rssfeed' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'rssfeed' ); ?>" name="<?php echo $this->get_field_name( 'rssfeed' ); ?>" />
    <label for="<?php echo $this->get_field_id( 'rssfeed' ); ?>">Artikkeleiden RSS feed</label>
</p>
<p>
    <input class="checkbox" type="checkbox" <?php checked( $instance[ 'ilmot' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'ilmot' ); ?>" name="<?php echo $this->get_field_name( 'ilmot' ); ?>" />
    <label for="<?php echo $this->get_field_id( 'ilmot' ); ?>">Ilmojärjestelmä</label>
</p>
<p>
    <input class="checkbox" type="checkbox" <?php checked( $instance[ 'nakitin' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'nakitin' ); ?>" name="<?php echo $this->get_field_name( 'nakitin' ); ?>" />
    <label for="<?php echo $this->get_field_id( 'nakitin' ); ?>">Nakitin</label>
</p>
<p>
    <input class="checkbox" type="checkbox" <?php checked( $instance[ 'kuvagalleria' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'kuvagalleria' ); ?>" name="<?php echo $this->get_field_name( 'kuvagalleria' ); ?>" />
    <label for="<?php echo $this->get_field_id( 'kuvagalleria' ); ?>">Kuvagalleria</label>
</p>

<p>Voit määrittää lisää linkkejä HTML &lt;a&gt;-täginä</p>
<p> Custom linkki 1:
    <label for="<?php echo esc_attr($this->get_field_id('customlink1')); ?>"><?php 'Custom linkki 1: '; ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('customlink1')); ?>" name="<?php echo esc_attr($this->get_field_name('customlink1')); ?>" type="text" value="<?php echo esc_attr($customlink1); ?>">
</p>
<p> Custom linkki 2:
    <label for="<?php echo esc_attr($this->get_field_id('customlink2')); ?>"><?php 'Custom linkki 2: '; ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('customlink2')); ?>" name="<?php echo esc_attr($this->get_field_name('customlink2')); ?>" type="text" value="<?php echo esc_attr($customlink3); ?>">
</p>
<p> Custom linkki 3:
    <label for="<?php echo esc_attr($this->get_field_id('customlink3')); ?>"><?php 'Custom linkki 3: '; ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('customlink3')); ?>" name="<?php echo esc_attr($this->get_field_name('customlink3')); ?>" type="text" value="<?php echo esc_attr($customlink3); ?>">
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
        $logoff = $instance[ 'logoff' ] ? 'true' : 'false';
        $login = $instance[ 'login' ] ? 'true' : 'false';
        $register = $instance[ 'register' ] ? 'true' : 'false';
        $rssfeed = $instance[ 'rssfeed' ] ? 'true' : 'false';
        $ilmot = $instance[ 'ilmot' ] ? 'true' : 'false';
        $nakitin = $instance[ 'nakitin' ] ? 'true' : 'false';
        $kuvagalleria = $instance[ 'kuvagalleria' ] ? 'true' : 'false';
        $customlink1 = $instance[ 'customlink1' ];
        $customlink2 = $instance[ 'customlink2' ];
        $customlink3 = $instance[ 'customlink3' ];
    ?>
    <div class="other">
    <ul>
    <?php
        if (is_user_logged_in())
        {
            if( 'on' == $instance[ 'logoff' ] )
            {
                echo '<li class="otheritem"><a href="' . get_site_url() . '/wp-login.php?action=logout">Kirjaudu ulos</a></li>';
            }
        } else {
            if( 'on' == $instance[ 'login' ] )
            {
                echo '<li class="otheritem"><a href="' . get_site_url() . '/wp-admin">Kirjaudu sisään</a></li>';
            }
            if( 'on' == $instance[ 'register' ] )
            {
                echo '<li class="otheritem"><a href="' . get_site_url() . '/register">Rekisteröidy</a></li>';
            }
        }
        if( 'on' == $instance[ 'rssfeed' ] )
        {
            echo '<li class="otheritem"><a href="' . get_site_url() . '/feed">Artikkeleiden RSS-feed</a></li>';
        }
        if( 'on' == $instance[ 'nakitin' ] )
        {
            echo '<li class="otheritem"><a href="https://nakit.asteriski.fi">Nakitin</a></li>';
        }
        if( 'on' == $instance[ 'ilmot' ] )
        {
            echo '<li class="otheritem"><a href="https://ilmot.asteriski.fi">Ilmojärjestelmä</a></li>';
        }
        if( 'on' == $instance[ 'kuvagalleria' ] )
        {
            echo '<li class="otheritem"><a href="https://kuvat.asteriski.fi">Kuvagalleria</a></li>';
        }
        if ( ! empty($customlink1) )
        {
            echo '<li class="otheritem">' . $customlink1 . '</li>';
        }
        if ( ! empty($customlink2) )
        {
            echo '<li class="otheritem">' . $customlink2 . '</li>';
        }
        if ( ! empty($customlink3) )
        {
            echo '<li class="otheritem">' . $customlink3 . '</li>';
        }
?>
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
        $instance[ 'logoff' ] = $new_instance[ 'logoff' ];
        $instance[ 'login' ] = $new_instance[ 'login' ];
        $instance[ 'register' ] = $new_instance[ 'register' ];
        $instance[ 'rssfeed' ] = $new_instance[ 'rssfeed' ];
        $instance[ 'nakitin' ] = $new_instance[ 'nakitin' ];
        $instance[ 'ilmot' ] = $new_instance[ 'ilmot' ];
        $instance[ 'kuvagalleria' ] = $new_instance[ 'kuvagalleria' ];
        $instance['customlink1'] = (! empty($new_instance['customlink1'])) ? $new_instance['customlink1'] : '';
        $instance['customlink2'] = (! empty($new_instance['customlink2'])) ? $new_instance['customlink2'] : '';
        $instance['customlink3'] = (! empty($new_instance['customlink3'])) ? $new_instance['customlink3'] : '';
        return $instance;
    }
}
