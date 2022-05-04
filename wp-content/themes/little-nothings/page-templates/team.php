<?php
/**
 * Template Name: Team
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
                            <?php if (have_rows('team-group')):
                                while (have_rows('team-group')): the_row();
                                    $team_name = get_sub_field('team-name');
                                    $cols = get_sub_field('cols'); ?>

                                    <div id="<?php echo slugify($team_name); ?>" class="container default-padding">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <h2 class="fw-bolder text-center text-font-featured text-purple mb-5 pb-3 border-1 display-4"><?php echo $team_name; ?></h2>
                                            </div>
                                            <?php
                                            if (have_rows('team')):
                                                while (have_rows('team')) : the_row();

                                                    $name = get_sub_field('name');
                                                    $desc = get_sub_field('desc');
                                                    $photo = get_sub_field('photo');
                                                    $contacts = get_sub_field('contacts'); ?>

                                                    <div class="<?php echo (int)$cols === 3 ? 'col-md-4' : 'col-md-3'; ?> card-features text-center mb-3 mb-lg-5">
                                                        <div class="team-member-card <?php echo (int)$cols === 4 ? 'smaller' : ''; ?> shadow-sm h-100">
                                                            <div class="d-flex flex-column h-100 justify-content-start">
                                                                <?php echo wp_get_attachment_image($photo, 'card-img-top-smaller', false, array('class' => 'shadow-md mx-auto h-auto')); ?>
                                                                <h3 class="my-3 text-font-featured fw-bold"><?php echo $name; ?></h3>
                                                                <p class="fw-light little-display-15"><?php echo $desc; ?></p>
                                                                <?php if ((int)$cols === 3) : ?>
                                                                    <div class="d-flex justify-content-center mt-3 mb-3 mb-lg-5">
                                                                        <?php if ($contacts['email']): ?>
                                                                            <a href="<?php echo $contacts['email']; ?>" class="social-icon shadow-sm mx-3 rounded-circle bg-purple">
                                                                                <?php echo get_icon('mail', array('class' => 'mail')); ?>
                                                                            </a>
                                                                        <?php endif; ?>

                                                                        <?php if ($contacts['linkedin']): ?>
                                                                            <a href="<?php echo $contacts['linkedin']; ?>" class="social-icon shadow-sm mx-3 rounded-circle bg-purple">
                                                                                <?php echo get_icon('linkedin', array('class' => 'linkedin')); ?>
                                                                            </a>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                <?php endwhile;
                                            endif; ?>

                                        </div>
                                    </div>
                                <?php endwhile;
                            endif; ?>
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