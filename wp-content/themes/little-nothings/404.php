<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Little_Nothings
 */

get_header();
?>

	<main id="primary" class="site-main">

        <article class="error-404 not-found">
            <section class="content-header vh-50 position-relative" <?php echo has_post_thumbnail() ? 'style="background-image: url('. get_the_post_thumbnail_url() .');"' : ''; ?>>
                <div class="container position-relative">
                    <div class="row vh-50 justify-content-center align-items-center">
                        <div class="justify-content-center align-self-center text-center mw-1100 mx-auto text-white mt-5 pt-5">
                            <div class="section-heading pb-4 mb-4 mb-md-5">
                                <span class="text-white section-subtitle animate__animated" data-animation="fadeInUp">404</span>
                                <h2 class="display-1 text-white fw-bolder text-font-featured mt-4 animate__animated animate__delay-150ms" data-animation="fadeInUp"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'little-nothings' ); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="entry-content py-5 mb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-8 text-center">
                            <p>It looks like nothing was found at this location. Return to <a href="<?php echo home_url(); ?>">homepage</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
	</main>

<?php
get_footer();
