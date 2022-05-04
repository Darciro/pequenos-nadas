<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Little_Nothings
 */

get_header();

$homepage_id = get_post_id_by_slug('pagina-inicial');
if( pll_current_language() === 'en' ) {
    $homepage_id = get_post_id_by_slug('home');
}

?>

    <main id="primary" class="site-main" xmlns="http://www.w3.org/1999/html">

        <?php if ($intro_section = get_field('intro_section', $homepage_id)): ?>
            <section id="intro" class="panel w-100 vh-100 bg-blue">
                <div class="d-flex flex-column justify-content-center align-items-center vh-100">
                    <div id="intro-text" class="z-index-1 w-100">
                        <div class="container">
                            <div class="row justify-content-center align-items-end">
                                <div class="col-lg-10 animate__animated" data-animation="fadeInUp">
                                    <h1 class="display-1 text-white fw-bolder text-font-featured mb-3"><?php echo $intro_section['title']; ?></h1>
                                    <p class="fw-light mb-5 mw-900 ms-auto me-auto text-white"><?php echo $intro_section['description']; ?></p>
                                    <a href="<?php echo $intro_section['button']['link']; ?>"
                                       class="<?php echo $intro_section['button']['custom_class']; ?>"><?php echo $intro_section['button']['text']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lang-switcher z-index-1">
                        <div class="btn-group">
                            <a href="<?php echo pll_home_url('pt'); ?>" class="btn btn-primary <?php echo pll_current_language() === 'pt' ? 'active' : ''; ?>" aria-current="page">Pt</a>
                            <a href="<?php echo pll_home_url('en'); ?>" class="btn btn-primary <?php echo pll_current_language() === 'en' ? 'active' : ''; ?>">En</a>
                        </div>
                    </div>

                    <?php if (!empty($intro_section['intro_carousel'])): ?>
                        <div id="intro-carousel" class="vh-100 w-100 z-index-0">
                            <?php foreach ($intro_section['intro_carousel'] as $slide) : ?>
                                <div class="carousel-bg vh-100" style="background-image:url(<?php echo wp_get_attachment_url($slide['image']); ?>)"></div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>

        <?php if ($about_us_section = get_field('about_us_section', $homepage_id)): ?>
            <section id="about-us" class="panel bg-purple bg-pattern-circles">
                <div class="container">
                    <div class="row align-items-center justify-content-center vh-100">
                        <div class="col-lg-6 order-2 order-lg-1 text-end animate__animated pe-lg-5" data-animation="fadeInUp">
                            <p class="text-white section-subtitle"><?php echo $about_us_section['feature_text']; ?></p>
                            <h1 class="display-3 text-white fw-bold text-font-featured"><?php echo $about_us_section['title']; ?></h1>
                            <p class="text-white mb-5"><?php echo $about_us_section['description']; ?></p>
                            <a href="<?php echo $about_us_section['button']['link']; ?>"
                               class="<?php echo $about_us_section['button']['custom_class']; ?>"><?php echo $about_us_section['button']['text']; ?></a>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 ps-lg-5">
                            <div class="d-none d-lg-block position-relative">
                                <?php echo wp_get_attachment_image($about_us_section['bigger_image'], 'vertical-cover', false, array('class' => 'img-1 img-fluid animate__animated', 'data-animation' => 'fadeInRight')); ?>
                                <?php echo wp_get_attachment_image($about_us_section['smaller_image'], 'vertical-cover-smaller', false, array('class' => 'img-2 img-fluid animate__animated', 'data-animation' => 'fadeInRight')); ?>
                            </div>
                            <div class="d-block d-lg-none mb-5 position-relative">
                                <?php echo wp_get_attachment_image($about_us_section['bigger_image'], 'horizontal-cover-smaller', false, array('class' => 'img-1 img-fluid animate__animated', 'data-animation' => 'fadeInRight')); ?>
                                <?php echo wp_get_attachment_image($about_us_section['smaller_image'], 'horizontal-cover-smaller', false, array('class' => 'img-2 img-fluid animate__animated', 'data-animation' => 'fadeInRight')); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if ($collections_section = get_field('collections_section', $homepage_id)): ?>
            <section id="collections" class="panel bg-orange">
                <div class="d-flex flex-row justify-content-center align-items-center vh-100 bg-orange">
                    <div class="container">
                        <div class="row align-items-end">
                            <div class="col-lg-5 position-relative z-index-1 animate__animated mb-5" data-animation="fadeInLeft">
                                <p class="text-white section-subtitle"><?php echo $collections_section['feature_text']; ?></p>
                                <h1 class="display-3 text-white fw-bold text-font-featured"><?php echo $collections_section['title']; ?></h1>
                                <p class="text-white mb-5"><?php echo $collections_section['description']; ?></p>
                                <a href="<?php echo $collections_section['button']['link']; ?>"
                                   class="<?php echo $collections_section['button']['custom_class']; ?>"><?php echo $collections_section['button']['text']; ?></a>
                            </div>
                            <div class="col-lg-7">
                                <?php if (!empty($collections_section['collections_carousel'])): ?>
                                    <div id="collections-carousel">
                                        <?php foreach ($collections_section['collections_carousel'] as $slide) : ?>
                                            <div class="mx-3 animate__animated" data-animation="fadeInRight">
                                                <div class="collection-card d-flex flex-column justify-content-end align-items-end" style="background-image:url(<?php echo wp_get_attachment_image_url($slide['cover'], 'vertical-cover'); ?>)">
                                                    <div class="custom-card-body">
                                                        <h3 class="text-font-featured fw-bold"><?php echo $slide['title']; ?></h3>
                                                        <p><?php echo $slide['description']; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if ($team_section = get_field('team_section', $homepage_id)): ?>
            <section id="team" class="panel bg-green bg-pattern-circles green-circles">
                <div class="d-flex flex-column justify-content-center align-items-center vh-100">
                    <div class="container">
                        <div class="row justify-content-center align-items-end">
                            <div class="col-lg-10 text-center mb-lg-5 animate__animated" data-animation="fadeInUp">
                                <p class="text-white section-subtitle"><?php echo $team_section['feature_text']; ?></p>
                                <h1 class="display-3 fw-bold text-font-featured text-white"><?php echo $team_section['title']; ?></h1>
                                <p class="mb-0 text-white"><?php echo $team_section['description']; ?></p>
                            </div>
                        </div>

                        <?php if (!empty($team_section['team_carousel'])): ?>
                            <div class="row justify-content-center align-items-end">
                                <div class="col-lg-10 text-center mb-lg-5 animate__animated animate__delay-150ms" data-animation="fadeInUp">
                                    <div id="team-carousel" class="row justify-content-center">
                                        <?php foreach ($team_section['team_carousel'] as $slide) : ?>
                                            <div class="col-3 card-features text-center px-3">
                                                <?php echo wp_get_attachment_image($slide['photo'], 'card-img-top-smaller', false, array('class' => 'shadow-md mx-auto w-100')); ?>
                                                <h3 class="my-3 text-font-featured fw-bold text-white"><?php echo $slide['name']; ?></h3>
                                                <p class="text-white fw-light"><?php echo $slide['description']; ?></p>
                                                <div class="d-flex justify-content-center mt-3 mb-3 mb-lg-5">
                                                    <?php if ($slide['email']): ?>
                                                        <a href="<?php echo $slide['email']; ?>" class="social-icon shadow-sm mx-3 rounded-circle bg-purple">
                                                            <?php echo get_icon('mail', array('class' => 'mail')); ?>
                                                        </a>
                                                    <?php endif; ?>

                                                    <?php if ($slide['linkedin']): ?>
                                                        <a href="<?php echo $slide['linkedin']; ?>" class="social-icon shadow-sm mx-3 rounded-circle bg-purple">
                                                            <?php echo get_icon('linkedin', array('class' => 'linkedin')); ?>
                                                        </a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>


                        <div class="row justify-content-center align-items-end">
                            <div class="col-lg-10 text-center mb-lg-5 animate__animated animate__delay-350ms" data-animation="fadeInUp">
                                <a href="<?php echo $team_section['button']['link']; ?>"
                                   class="<?php echo $team_section['button']['custom_class']; ?>"><?php echo $team_section['button']['text']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if ($partners_section = get_field('partners_section', $homepage_id)): ?>
            <section id="partners" class="panel bg-light-green">
                <div class="container py-lg-5">
                    <div class="row justify-content-center align-items-center text-center">
                        <div class="col-lg-12 mb-5 animate__animated" data-animation="fadeInUp">
                            <p class="text-white section-subtitle"><?php echo $partners_section['feature_text']; ?></p>
                            <h1 class="display-3 text-white fw-bold text-font-featured"><?php echo $partners_section['title']; ?></h1>
                        </div>
                    </div>
                    <?php if (!empty($partners_section['partners_carousel'])): ?>
                        <div class="row px-5 mb-5">
                            <div id="partners-carousel" class="d-flex justify-content-center custom-shadow py-4 animate__animated animate__delay-150ms" data-animation="fadeInUp">
                                <?php foreach ($partners_section['partners_carousel'] as $slide) : ?>
                                    <div class="partner-card mx-3">
                                        <a href="<?php echo $slide['category']; ?>" class="text-decoration-none" target="_blank">
                                            <?php echo wp_get_attachment_image($slide['logo'], 'card-img-top-smaller', false, array('class' => 'card-img')); ?>
                                            <div class="overlay">
                                                <h2 class="fw-bold text-font-featured m-0"><?php echo $slide['name']; ?></h2>
                                                <p class="m-0"><?php echo $slide['category']; ?></p>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="row justify-content-center align-items-center text-center animate__animated animate__delay-300ms" data-animation="fadeInUp">
                        <div class="col-lg-12 mb-5">
                            <a href="<?php echo $partners_section['button']['link']; ?>"
                               class="<?php echo $partners_section['button']['custom_class']; ?>"><?php echo $partners_section['button']['text']; ?></a>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if ($newsletter_section = get_field('newsletter_section', $homepage_id)): ?>
            <section class="panel bg-red bg-pattern-circles red-circles">
                <div class="container py-lg-5">
                    <div class="row justify-content-center align-items-end">
                        <div class="col-lg-10 text-center my-lg-5 animate__animated" data-animation="fadeInUp">
                            <p class="text-white section-subtitle"><?php echo $newsletter_section['feature_text']; ?></p>
                            <h1 class="display-3 fw-bold text-font-featured text-white"><?php echo $newsletter_section['title']; ?></h1>
                            <p class="mb-5 text-white"><?php echo $newsletter_section['description']; ?></p>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center mb-3 mb-lg-5">
                        <div class="col-lg-6 animate__animated" data-animation="fadeInUp">
                            <?php echo do_shortcode($newsletter_section['newsletter_form']); ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </main>

<?php
get_footer();
