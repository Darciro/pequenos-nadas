<?php
/**
 * Little Nothings functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Just_a_Change
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.5.0');
}

if (!function_exists('little_nothings_setup')) :

    function little_nothings_setup()
    {
        load_theme_textdomain('little-nothings', get_template_directory() . '/languages');
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('banner', 1450, 550, true);
        add_image_size('vertical-cover', 360, 735, true);
        add_image_size('vertical-cover-smaller', 200, 400, true);
        add_image_size('horizontal-cover-smaller', 320, 160, true);
        add_image_size('card-img-top', 384, 240, true);
        add_image_size('card-img-top-smaller', 300, 225, true);
        add_image_size('square', 320, 320, true);

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'main-menu' => esc_html__('Main menu', 'little-nothings'),
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'little_nothings_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');
    }
endif;
add_action('after_setup_theme', 'little_nothings_setup');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function little_nothings_widgets_init()
{
    for ($i = 1; $i <= 4; $i++) {
        register_sidebar(
            array(
                'name' => esc_html__('Footer - ' . $i, 'little-nothings'),
                'id' => 'footer-' . $i,
                'description' => esc_html__('Add widgets here.', 'little-nothings'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h2 class="widget-title text-white text-font-just-nova display-5">',
                'after_title' => '</h2>',
            )
        );
    }
}

add_action('widgets_init', 'little_nothings_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function little_nothings_scripts()
{
    $app_env = wp_get_environment_type();
    $bundle_css = ($app_env == 'local') ? 'bundle.css' : 'bundle.min.css';
    wp_enqueue_style('just-a-style', get_template_directory_uri() . '/assets/stylesheets/dist/' . $bundle_css, array(), _S_VERSION);
    wp_style_add_data('just-a-style', 'rtl', 'replace');

    // wp_enqueue_script( 'just-a-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

    $bundle_js = ($app_env == 'local') ? 'main.js' : 'main.min.js';
    wp_enqueue_script('just-a-script', get_template_directory_uri() . '/assets/js/dist/' . $bundle_js, array('jquery'), _S_VERSION, true);

    if (is_page('impacto')) {
        wp_enqueue_script('gmaps', 'https://maps.googleapis.com/maps/api/js?key=' . GMAPS_API_KEY, array('jquery'), _S_VERSION, true);
        wp_enqueue_script('gmaps-markerclusterer', 'https://unpkg.com/@googlemaps/markerclustererplus/dist/index.min.js', array('jquery'), _S_VERSION, true);
    }
}

add_action('wp_enqueue_scripts', 'little_nothings_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Register Custom Navigation Walker
 *
 */
function register_navwalker()
{
    require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}

add_action('after_setup_theme', 'register_navwalker');

/**
 * Returns a SVG icon. An array of args can be used to set properties, such as "fill" or "class"
 *
 * @param $icon
 * @param array $args
 * @return false|string|string[]|null
 */
function get_icon($icon, $args = array())
{
    ob_start();
    include get_template_directory() . '/assets/img/icons/' . $icon . '.svg';
    $svg = ob_get_contents();
    ob_end_clean();

    if (!empty($args)) {
        $pattern = '/(<svg\b[^><]*)>/';
        foreach ($args as $arg => $value) {
            $svg = preg_replace($pattern, '$1 ' . $arg . '="' . $value . '">', $svg);
        }
        // $svg = preg_replace($pattern, '$1 fill="red">', $svg);
    }

    return $svg;
}

function add_responsive_embeds($icon, $args = array())
{
    add_theme_support('responsive-embeds');
}

add_action('after_setup_theme', 'add_responsive_embeds');


/**
 * Registering Google API key
 *
 */
function my_acf_init()
{
    if (defined('GMAPS_API_KEY')) {
        acf_update_setting('google_api_key', GMAPS_API_KEY);
    }
}

add_action('acf/init', 'my_acf_init');

/**
 * Function to change the excerpt length
 *
 * @param int $limit
 * @return string|string[]|null
 */
function get_just_an_excerpt($limit = 190)
{
    $excerpt = explode(' ', get_the_excerpt(), $limit);

    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }

    $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

    return $excerpt;
}

/**
 * Query all posts versions on home page.
 *
 */
function lang_independent_home_query($query)
{
    if (function_exists('pll__') && !is_admin() && is_home()) {
        $query->set('tax_query', '');
        $query->set('lang', '');
    }
}

add_action('pre_get_posts', 'lang_independent_home_query');

/**
 * Returns the page url from current selected language for a given path
 *
 * @param $page_slug
 * @return false|string|WP_Error
 */
function get_page_url_from_current_lang($page_slug)
{
    return get_the_permalink(pll_get_post(get_page_by_path($page_slug)->ID));
}

function prefix_category_title($title)
{
    if (is_category()) {
        $title = single_cat_title('', false);
    }
    return $title;
}

add_filter('get_the_archive_title', 'prefix_category_title');

/**
 * Function to change the excerpt length
 *
 * @param int $limit
 *
 * @return string|string[]|null
 */
function get_little_nothings_excerpt($limit = 190)
{
    $excerpt = explode(' ', get_the_excerpt(), $limit);

    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }

    $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

    return $excerpt;
}

add_filter('use_block_editor_for_post', '__return_false', 10, 2);
add_filter('use_block_editor_for_pages', '__return_false', 10, 2);
add_filter('use_widgets_block_editor', '__return_false');

/**
 *  Function to get post ID By slug
 */

function get_post_id_by_slug($slug)
{
    if ($post = get_page_by_path($slug)) {
        return $post->ID;
    }

    return null;
}