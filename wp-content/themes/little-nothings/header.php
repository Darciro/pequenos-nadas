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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&family=Poppins:wght@300&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<?php $default_class = is_home() ? 'transparent-nav loading' : 'transparent-nav'; ?>
<body <?php body_class($default_class); ?>>
<?php wp_body_open(); ?>
<div id="viewport">
    <a class="skip-link visually-hidden" href="#primary"><?php esc_html_e('Skip to content', 'little-nothings'); ?></a>
    <header id="main-header">
        <nav class="navbar navbar-expand-xs fixed-top pt-0 pb-0">
            <div class="container-fluid">
                <a class="navbar-brand m-0 p-3" href="<?php echo home_url(); ?>">
                    <?php echo get_icon('logo', array('class' => 'logo-svg white')); ?>
                </a>

                <div class="collapse show navbar-collapse" id="main-navbar">
                    <?php
                     wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'depth' => 2,
                        'container' => '',
                        'menu_id' => 'main-navigation',
                        'menu_class' => 'navbar-nav ms-auto',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'walker' => new WP_Bootstrap_Navwalker(),
                    ));
                    ?>
                </div>

                <button id="menu-btn-toggler" class="inactive navbar-toggler me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidenav" aria-controls="sidenav">
                    <span></span>
                    <span></span>
                    <span></span>
                    <small class="label">Menu</small>
                    <small class="close-label"><?php echo pll_current_language() === 'pt' ? 'Fechar' : 'Close'; ?></small>
                </button>

                <?php get_template_part('template-parts/site', 'sidenav'); ?>
            </div>
        </nav>
    </header>
    <div id="scroll-view" class="site">
