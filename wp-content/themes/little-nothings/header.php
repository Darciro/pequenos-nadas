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

<body <?php body_class('transparent-nav'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link visually-hidden" href="#primary"><?php esc_html_e('Skip to content', 'just-a-change'); ?></a>

    <header id="main-header">
        <nav class="navbar navbar-expand-lg fixed-top pt-0 pb-0">
            <div class="container">
                <a class="navbar-brand m-0 ps-0 p-3" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.png" class="white-logo" width="75" height="75" alt="Little Nothings" loading="lazy">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="colored-logo" width="75" height="75" alt="Little Nothings" loading="lazy">
                </a>

                <button id="menu-btn-toggler" class="inactive navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidenav" aria-controls="sidenav">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="main-navbar">
                    <?php
                    /* wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'depth' => 2,
                        'container' => '',
                        'menu_id' => 'main-navigation',
                        'menu_class' => 'navbar-nav mx-auto',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'items_wrap' => '<ul id="%1$s" class="%2$s text-font-just-nova">%3$s</ul>',
                        'walker' => new WP_Bootstrap_Navwalker(),
                    ));*/
                    ?>

                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo home_url(); ?>#intro">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?php echo home_url(); ?>#about-us">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?php echo home_url(); ?>#collections">Edições</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?php echo home_url(); ?>#projects">Projetos de Impacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?php echo home_url(); ?>#team">Equipa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?php echo home_url('/events'); ?>#">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?php echo home_url(); ?>#">Noticias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?php echo home_url(); ?>#">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php get_template_part('template-parts/site', 'sidenav'); ?>
        </nav>
    </header>
