<?php
/**
 * Template Name: Sales points
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package mediator
 */

get_header();
?>

    <main id="primary" class="site-main">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <section class="content-header vh-50 position-relative" <?php echo has_post_thumbnail() ? 'style="background-image: url(' . get_the_post_thumbnail_url() . ');"' : ''; ?>>
                <div class="container position-relative">
                    <div class="row vh-50 justify-content-center align-items-center">
                        <div class="justify-content-center align-self-center text-center mw-1100 mx-auto text-white mt-5 pt-5">
                            <div class="section-heading pb-4 mb-4 mb-md-5">
                                <?php if( $subtitle = get_field('subtitle') ): ?>
                                    <span class="text-white section-subtitle animate__animated" data-animation="fadeInUp"><?php echo $subtitle; ?></span>
                                <?php endif; ?>
                                <h2 class="display-1 text-white fw-bolder text-font-featured mt-4 animate__animated animate__delay-150ms" data-animation="fadeInUp"><?php the_title(); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="entry-content py-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <p class="text-center post-meta little-display-12"><?php little_nothings_posted_on(); ?> • <?php little_nothings_posted_by(); ?></p>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="entry-content pb-5 mb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <?php if (have_rows('sales-points')):
                                        while (have_rows('sales-points')) : the_row();

                                            $location = get_sub_field('address');
                                            $title = get_sub_field('name');
                                            $site = get_sub_field('site');
                                            $logo = get_sub_field('logo');
                                            ?>
                                            <div class="col-md-6">
                                                <div class="card mb-3" style="max-width: 540px;">
                                                    <div class="row g-0">
                                                        <div class="col-md-5">
                                                            <div class="card-cover img-fluid rounded-start w-100 h-100" style="background-image:url(<?php echo wp_get_attachment_image_url($logo, 'vertical-cover-smaller'); ?>)"></div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="card-body">
                                                                <h5 class="card-title fw-bolder text-font-featured"><?php echo esc_html($title); ?></h5>
                                                                <p class="card-text little-display-15 mb-3"><?php echo esc_html($location['address']); ?></p>
                                                                <a href="<?php echo esc_html($site); ?>" target="_blank" class="card-text text-decoration-none"><small class="text-muted little-display-12">Visitar site</small></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile;
                                    endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <?php if (have_rows('sales-points')): ?>
                                <div class="acf-map" data-zoom="10">
                                    <?php while (have_rows('sales-points')) : the_row();

                                        // Load sub field values.
                                        $location = get_sub_field('address');
                                        $title = get_sub_field('name');
                                        $site = get_sub_field('site');
                                        ?>
                                        <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>">
                                            <div class="card-body">
                                                <h5 class="card-title fw-bolder text-font-featured"><b><?php echo esc_html($title); ?></b></h5>
                                                <p class="card-text little-display-15 mb-3"><?php echo esc_html($location['address']); ?></p>
                                                <a href="<?php echo esc_html($site); ?>" target="_blank" class="card-text text-decoration-none"><small class="text-muted little-display-12">Visitar site</small></a>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="entry-footer">
                <?php // mediator_entry_footer(); ?>
            </footer>
        </article>

    </main>

<?php
get_footer();