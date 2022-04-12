<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Just_a_Change
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
    <header class="entry-header text-center p-5">
        <?php
        if (is_singular()) :
            the_title('<h1 class="entry-title text-green">', '</h1>');
        else :
            the_title('<h2 class="entry-title text-green"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;

        if ('post' === get_post_type()) :
            ?>
            <div class="entry-meta">
                <?php
                just_a_change_posted_on();
                just_a_change_posted_by();
                ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <?php just_a_change_post_thumbnail(); ?>

    <div class="entry-content mw-8 mx-auto mb-5">
        <?php
        the_content(
            sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'just-a-change'),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post(get_the_title())
            )
        );
        ?>
    </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
