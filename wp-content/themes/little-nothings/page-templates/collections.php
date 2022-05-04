<?php
/**
 * Template Name: Collections
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
                        <div class="col-md-10">
                            <?php if (have_rows('collections')): $i = 0; ?>
                                <div class="container default-padding collections-timeline">
                                    <?php while (have_rows('collections')): the_row();
                                        $title = get_sub_field('title');
                                        $date = get_sub_field('date');
                                        $description = get_sub_field('description');
                                        $cover = get_sub_field('cover'); ?>

                                        <div class="row align-items-end">
                                            <div class="col-md-6 mb-5 <?php echo $i % 2 === 0 ? 'order-md-0' : 'order-md-1'; ?>">
                                                <p class="text-white section-subtitle"><?php echo $date; ?></p>
                                                <h2 class="fw-bolder text-font-featured mb-5 pb-3 border-1 text-purple display-4"><?php echo $title; ?></h2>
                                                <p><?php echo $description; ?></p>
                                            </div>

                                            <div class="col-md-6 mb-5 <?php echo $i % 2 === 0 ? 'order-md-1' : 'order-md-0'; ?>">
                                                <div class="collection-card smaller" style="background-image:url(<?php echo wp_get_attachment_image_url($cover, 'square'); ?>)"></div>
                                            </div>
                                        </div>
                                    <?php $i++; endwhile; ?>
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