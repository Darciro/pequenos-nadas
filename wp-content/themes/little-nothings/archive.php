<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mediator
 */

get_header();
?>

    <main id="primary" class="site-main">

        <?php if (have_posts()) : ?>

            <section class="content-header vh-50 position-relative" <?php echo has_post_thumbnail() ? 'style="background-image: url(' . get_the_post_thumbnail_url() . ');"' : ''; ?>>
                <div class="container position-relative">
                    <div class="row vh-50 justify-content-center align-items-center">
                        <div class="justify-content-center align-self-center text-center mw-1100 mx-auto text-white mt-5 pt-5">
                            <div class="section-heading pb-4 mb-4 mb-md-5">
                                <span class="text-white section-subtitle animate__animated" data-animation="fadeInUp">Categoria</span>
                                <h2 class="display-1 text-white fw-bolder text-font-featured mt-4 animate__animated animate__delay-150ms" data-animation="fadeInUp"><?php the_archive_title(); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="entry-content py-5 mb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <?php while (have_posts()) :the_post(); ?>
                            <div class="col-lg-4">
                                <div class="card mb-5 borderless card-article">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('card-img-top', array('class' => 'card-img-top', 'alt' => 'Feature image')); ?>
                                    </a>
                                    <div class="card-body px-0">
                                        <p class="post-meta little-display-12"><?php little_nothings_posted_on(); ?> • <?php little_nothings_posted_by(); ?></p>
                                        <h2 class="card-title mt-3 fw-bolder text-font-featured ">
                                            <a class="text-decoration-none text-color-default" href="<?php the_permalink(); ?>"><?php the_title(); ?><?php echo get_icon('arrow-up-right', array('class' => 'open-icon')); ?></a>
                                        </h2>
                                        <p class="card-text">
                                            <a class="text-color-default text-decoration-none" href="<?php the_permalink(); ?>"><?php echo get_little_nothings_excerpt(15); ?></a>
                                        </p>

                                        <?php
                                        $post_categories = wp_get_post_categories(get_the_ID());
                                        foreach ($post_categories as $c) :
                                            $cat = get_category($c); ?>
                                            <a href="<?php echo get_category_link($c); ?>" class="d-inline-block text-decoration-none">
                                                <span class="badge rounded-pill bg-purple me-1 me-md-2 mb-1 mb-md-2 little-display-15"><?php echo $cat->name; ?></span>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <?php the_posts_navigation(); ?>
                        </div>
                    </div>
                </div>
            </div>


        <?php
        else :
            get_template_part('template-parts/content', 'none');
        endif;
        ?>

    </main>

<?php
get_footer();
