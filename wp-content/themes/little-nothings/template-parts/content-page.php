<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Little_Nothings
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <section class="content-header vh-50 position-relative" <?php echo has_post_thumbnail() ? 'style="background-image: url('. get_the_post_thumbnail_url() .');"' : ''; ?>>
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

    <div class="entry-content py-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p class="text-center post-meta little-display-12"><?php little_nothings_posted_on(); ?> • <?php little_nothings_posted_by(); ?></p>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>

    <footer class="entry-footer">
        <?php // mediator_entry_footer(); ?>
    </footer>
</article>

