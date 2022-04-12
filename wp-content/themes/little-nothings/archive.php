<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Just_a_Change
 */

get_header();
?>

	<main id="primary" class="site-main hentry">

		<?php if ( have_posts() ) : ?>

            <header class="entry-header text-center p-5">
				<?php
				the_archive_title( '<h1 class="page-title entry-title text-green">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header>

			<?php else :
			get_template_part( 'template-parts/content', 'none' );
		endif; ?>

        <section class="my-5">
            <div class="container">

                <div class="row row-flex mt-5">
                    <?php

                    $i = 0;
                    if ( get_query_var('paged') ) {
                        $paged = get_query_var('paged');
                    } else if ( get_query_var('page') ) {
                        $paged = get_query_var('page');
                    } else {
                        $paged = 1;
                    }

                    $category = get_queried_object();
                    $args = array(
                        'post_type' => 'post',
                        'cat' => $category->term_id,
                        'paged' => $paged
                    );
                    $news = new WP_Query( $args );

                    if ( $news->have_posts() ) :
                        while ( $news->have_posts() ) :
                            $news->the_post();
                            $permalink = get_the_permalink();

                            if( $external_news = get_field('external_news') ) {
                                $permalink = get_field('external_news_link');
                            }
                            ?>

                            <div class="col-lg-4 mb-md-5 text-center animate__animated <?php $delay = ( $i * 150 ); echo $i > 0 ? 'animate__delay-'. $delay .'ms' : ''; ?>" data-animation="fadeInRight">
                                <div class="card card-news text-center shadow-sm h-100">
                                    <a href="<?php echo $permalink; ?>" <?php echo $external_news ? 'target="_blank"' : ''; ?>>
                                        <?php if (has_post_thumbnail()):
                                            the_post_thumbnail('card-img-top', ['class' => 'card-img-top', 'title' => get_the_title()]);
                                        else: ?>
                                            <img src="https://picsum.photos/300/150?random=5" class="card-img-top">
                                        <?php endif; ?>
                                    </a>
                                    <div class="card-body">
                                        <?php
                                        $categories = get_the_category();
                                        if ( ! empty( $categories ) ) {
                                            echo '<a class="text-uppercase d-block mb-1 text-green-lighter" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '"><small>' . esc_html( $categories[0]->name ) . '</small></a>';
                                        }?>
                                        <h5 class="card-title text-font-just-nova display-5 mb-3">
                                            <a class="text-green" href="<?php echo $permalink; ?>" <?php echo $external_news ? 'target="_blank"' : ''; ?>><?php the_title(); ?></a>
                                        </h5>

                                        <?php if ( $external_news ) : ?>
                                            <h6 class="card-subtitle mb-2 text-muted"><?php the_field('editorial'); ?> - <?php echo get_the_date(); ?></h6>
                                        <?php endif; ?>

                                        <p class="card-text"><?php echo get_just_an_excerpt(20); ?></p>
                                        <a href="<?php echo $permalink; ?>" <?php echo $external_news ? 'target="_blank"' : ''; ?> title="<?php the_title_attribute(); ?>" class="btn btn-warning text-font-just-nova px-3 display-6 text-white shadow-sm"><?php _e('Read more', 'just-a-change'); ?></a>
                                    </div>
                                </div>
                            </div>

                            <?php $i++; if($i > 2) $i = 0; endwhile; ?>

                        <div class="col-12">
                            <nav class="pagination-wrapper my-5">
                                <?php
                                $pages = paginate_links(array(
                                    'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                                    'total' => $news->max_num_pages,
                                    'current' => max(1, $paged),
                                    'format' => '?paged=%#%',
                                    'show_all' => false,
                                    'type' => 'array',
                                    'end_size' => 2,
                                    'mid_size' => 1,
                                    'prev_next' => true,
                                    'prev_text' => sprintf('<i></i> %1$s', __('Recent posts', 'just-a-change')),
                                    'next_text' => sprintf('%1$s <i></i>', __('Older posts', 'just-a-change')),
                                    'add_args' => false,
                                    'add_fragment' => '',
                                    'paged' => $paged
                                ));

                                if (is_array($pages)) {
                                    $paged = ($paged == 0) ? 1 : $paged;

                                    $pagination = '<ul class="pagination m-auto justify-content-center">';

                                    foreach ($pages as $page) {
                                        $pagination .= "<li class='page-item'>$page</li>";
                                    }

                                    $pagination .= '</ul>';

                                    echo $pagination;
                                }
                                ?>
                            </nav>
                        </div>
                    <?php endif;

                    wp_reset_postdata(); ?>

                </div>
            </div>
        </section>

	</main>

<?php
get_footer();
