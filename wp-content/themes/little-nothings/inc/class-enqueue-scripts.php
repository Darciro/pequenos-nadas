<?php

if ( ! class_exists( 'Enqueue_Scripts' ) ) :
    class Enqueue_Scripts {

        public $env;

        public function __construct() {
            $this->env = wp_get_environment_type();
        }

        public function run() {
            add_action( 'wp_enqueue_scripts', array( $this, 'theme_styles' ) );
            add_action( 'wp_enqueue_scripts', array( $this, 'theme_scripts' ) );
        }

        public function theme_styles() {
            $bundle_css = ( $this->env === 'local' ) ? 'bundle.css' : 'bundle.min.css';
            wp_enqueue_style(
                LITTLE_NOTHINGS_SLUG . '-styles',
                get_template_directory_uri() . '/assets/stylesheets/dist/' . $bundle_css,
                array(),
                LITTLE_NOTHINGS_VERSION
            );
        }

        public function theme_scripts() {
            $bundle_js = ( $this->env === 'local' ) ? 'main.js' : 'main.min.js';
            wp_enqueue_script( LITTLE_NOTHINGS_SLUG . '-scripts',
                get_template_directory_uri() . '/assets/js/dist/' . $bundle_js,
                array( 'jquery' ),
                LITTLE_NOTHINGS_VERSION,
                true
            );

            wp_enqueue_script( 'google-maps',
                'https://maps.googleapis.com/maps/api/js?key=' . LITTLE_GMAPS_API_KEY,
                array( 'jquery' ),
                LITTLE_NOTHINGS_VERSION,
                true
            );

            $cc = array(
                'ajax_url' => admin_url( 'admin-ajax.php' ),
            );

            wp_localize_script( LITTLE_NOTHINGS_SLUG . '-scripts', 'LN', $cc );

            if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
                wp_enqueue_script( 'comment-reply' );
            }
        }

    }

    ( new Enqueue_Scripts() )->run();
endif;