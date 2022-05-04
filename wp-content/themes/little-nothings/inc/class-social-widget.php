<?php

if (!class_exists('Social_Widget')) :
    class Social_Widget extends WP_Widget
    {
        private $widget_id;

        public function __construct()
        {
            $this->widget_id = LITTLE_NOTHINGS_SLUG . '-social-widget';
            $widget_ops = array(
                'classname' => $this->widget_id,
                'description' => 'Some cool description here',
            );
            parent::__construct($this->widget_id, 'Social Widget', $widget_ops);
        }

        /**
         * Outputs the content of the widget
         *
         * @param array $args
         * @param array $instance
         */
        public function widget( $args, $instance ) {
            echo $args['before_widget'];
            if ( ! empty( $instance['title'] ) ) {
                echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
            }

            echo '<div class="d-flex justify-content-start mt-5 mt-lg-0">';

            if ( ! empty( $instance['facebook'] ) ) { ?>
                <a href="<?php echo $instance['facebook']; ?>" target="_blank" class="social-icon shadow-sm me-3 rounded-circle bg-purple">
                    <?php echo get_icon('facebook', array('class' => 'facebook')); ?>
                </a>
            <?php }

            if ( ! empty( $instance['instagram'] ) ) { ?>
                <a href="<?php echo $instance['instagram']; ?>" target="_blank" class="social-icon shadow-sm me-3 rounded-circle bg-purple">
                    <?php echo get_icon('instagram', array('class' => 'instagram')); ?>
                </a>
            <?php }

            if ( ! empty( $instance['youtube'] ) ) { ?>
                <a href="<?php echo $instance['youtube']; ?>" target="_blank" class="social-icon shadow-sm me-3 rounded-circle bg-purple">
                    <?php echo get_icon('youtube', array('class' => 'youtube')); ?>
                </a>
            <?php }

            if ( ! empty( $instance['linkedin'] ) ) { ?>
                <a href="<?php echo $instance['linkedin']; ?>" target="_blank" class="social-icon shadow-sm me-3 rounded-circle bg-purple">
                    <?php echo get_icon('linkedin', array('class' => 'linkedin')); ?>
                </a>
            <?php }

            echo '</div>';

            echo $args['after_widget'];
        }

        /**
         * Outputs the options form on admin
         *
         * @param array $instance The widget options
         */
        public function form( $instance ) {
            $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
            $facebook = ! empty( $instance['facebook'] ) ? $instance['facebook'] : '';
            $instagram = ! empty( $instance['instagram'] ) ? $instance['instagram'] : '';
            $youtube = ! empty( $instance['youtube'] ) ? $instance['youtube'] : '';
            $linkedin = ! empty( $instance['linkedin'] ) ? $instance['linkedin'] : '';
            ?>
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">Title</label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
            </p>
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>">Facebook</label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'facebook' ) ); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>">
            </p>
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>">Instagram</label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'instagram' ) ); ?>" type="text" value="<?php echo esc_attr( $instagram ); ?>">
            </p>
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>">Youtube</label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'youtube' ) ); ?>" type="text" value="<?php echo esc_attr( $youtube ); ?>">
            </p>
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>">Linkedin</label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'linkedin' ) ); ?>" type="text" value="<?php echo esc_attr( $linkedin ); ?>">
            </p>
            <?php
        }

        /**
         * Processing widget options on save
         *
         * @param array $new_instance The new options
         * @param array $old_instance The previous options
         *
         * @return array
         */
        public function update( $new_instance, $old_instance ) {
            $instance = array();
            $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
            $instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? sanitize_text_field( $new_instance['facebook'] ) : '';
            $instance['instagram'] = ( ! empty( $new_instance['instagram'] ) ) ? sanitize_text_field( $new_instance['instagram'] ) : '';
            $instance['youtube'] = ( ! empty( $new_instance['youtube'] ) ) ? sanitize_text_field( $new_instance['youtube'] ) : '';
            $instance['linkedin'] = ( ! empty( $new_instance['linkedin'] ) ) ? sanitize_text_field( $new_instance['linkedin'] ) : '';

            return $instance;
        }

        public function run()
        {
            add_action('widgets_init', array($this, 'register_social_widget'));
        }

        public function register_social_widget()
        {
            register_widget( 'Social_Widget' );
        }

    }

    (new Social_Widget())->run();
endif;