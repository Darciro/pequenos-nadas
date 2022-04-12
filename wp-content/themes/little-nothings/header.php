<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Just_a_Change
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class('transparent-nav'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link sr-only" href="#primary"><?php esc_html_e('Skip to content', 'just-a-change'); ?></a>

    <header id="main-header">
        <nav class="navbar navbar-expand-lg fixed-top pt-0">
            <div class="container">
                <a class="navbar-brand m-0 p-3" href="<?php echo home_url(); ?>" style="background: #0e315e;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pequenos-nadas-logo-no-text-blue.png" width="100" height="100" alt="Little Nothings" loading="lazy">
                </a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'depth' => 2,
                        'container' => '',
                        'menu_id' => 'main-navigation',
                        'menu_class' => 'navbar-nav mx-auto',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'items_wrap' => '<ul id="%1$s" class="%2$s text-font-just-nova">%3$s</ul>',
                        'walker' => new WP_Bootstrap_Navwalker(),
                    ));
                    ?>

                    <div id="lang-dropdown-menu" class="dropdown mr-5">
                        <button class="btn dropdown-toggle" type="button" id="lang-dropdown-menu-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            English
                        </button>
                        <div class="dropdown-menu" aria-labelledby="lang-dropdown-menu-btn">
                            <a class="dropdown-item" href="#">English</a>
                            <a class="dropdown-item" href="#">Portuguese</a>
                        </div>
                    </div>
                </div>

                <div class="menu-toggler-wrapper">
                    <div class="menu-toggler not-active">
                        <span></span>
                        <span></span>
                        <span></span>
                        <p class="close-txt"><?php _e('Close', 'just-a-change'); ?></p>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <?php get_template_part('template-parts/site', 'sidenav'); ?>