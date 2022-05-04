<?php

if (!class_exists('Theme_Setup')) :
    class Theme_Setup
    {

        public function run()
        {
            add_action('after_setup_theme', array($this, 'theme_setup'));
            add_action('after_setup_theme', array($this, 'theme_navigation'));
            add_action('after_setup_theme', array($this, 'custom_thumbs'));
            add_action('init', array($this, 'disable_gutenberg_editor'));
            add_action('widgets_init', array($this, 'widgets_setup'));
            add_filter('get_the_archive_title', array($this, 'prefix_category_title'));
            add_filter('acf/fields/google_map/api', array($this, 'little_acf_google_map_api'));
        }

        public function theme_setup()
        {
            load_theme_textdomain('little-nothings', get_template_directory() . '/languages');
            add_theme_support('automatic-feed-links');
            add_theme_support('title-tag');
            add_theme_support('post-thumbnails');
            add_theme_support('responsive-embeds');
            add_theme_support(
                'html5',
                array(
                    'search-form',
                    'comment-form',
                    'comment-list',
                    'gallery',
                    'caption',
                    'style',
                    'script',
                )
            );
            add_theme_support('customize-selective-refresh-widgets');
        }

        public function theme_navigation()
        {
            register_nav_menus(
                array(
                    'main-menu' => esc_html__('Main menu', 'little-nothings'),
                )
            );
        }

        public function widgets_setup()
        {
            register_sidebar(
                array(
                    'name' => 'Menu suspenso - Esquerda',
                    'id' => 'offcanvas-left',
                    'description' => 'Adicione as tuas widgets',
                    'before_widget' => '<section id="%1$s" class="widget %2$s mt-5">',
                    'after_widget' => '</section>',
                    'before_title' => '<h3 class="text-font-featured fw-bold text-white">',
                    'after_title' => '</h3>',
                )
            );

            register_sidebar(
                array(
                    'name' => 'Menu suspenso - Direita',
                    'id' => 'offcanvas-right',
                    'description' => 'Adicione as tuas widgets',
                    'before_widget' => '<section id="%1$s" class="widget %2$s mt-5">',
                    'after_widget' => '</section>',
                    'before_title' => '<h3 class="text-font-featured fw-bold text-white">',
                    'after_title' => '</h3>',
                )
            );
        }

        public function custom_thumbs()
        {
            add_image_size('banner', 1450, 550, true);
            add_image_size('vertical-cover', 360, 735, true);
            add_image_size('vertical-cover-smaller', 200, 400, true);
            add_image_size('horizontal-cover-smaller', 320, 160, true);
            add_image_size('card-img-top', 384, 240, true);
            add_image_size('card-img-top-smaller', 300, 225, true);
            add_image_size('square', 320, 320, true);
        }

        public function theme_options_page()
        {
            if (!function_exists('acf_add_options_page'))
                return;

            acf_add_options_page(array(
                'page_title' => 'Theme Settings',
                'menu_title' => 'Theme Settings',
                'menu_slug' => 'cc-theme-general-settings',
                'capability' => 'edit_posts',
                'redirect' => false
            ));
        }

        public function disable_gutenberg_editor()
        {
            add_filter('use_block_editor_for_post', '__return_false', 10, 2);
            add_filter('use_block_editor_for_pages', '__return_false', 10, 2);
            add_filter('use_widgets_block_editor', '__return_false');
        }

        public function prefix_category_title()
        {
            if (is_category()) {
                $title = single_cat_title('', false);
            }
            return $title;
        }

        public function little_acf_google_map_api( $api )
        {
            $api['key'] = LITTLE_GMAPS_API_KEY;
            return $api;
        }

    }

    (new Theme_Setup())->run();
endif;