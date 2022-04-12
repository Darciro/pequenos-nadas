<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Just_a_Change
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="d-flex justify-content-center vh-60 position-relative entry-header">

        <div class="heading-content container-fluid mw-10 align-self-center">
            <?php the_title('<h1 class="display-3 text-center text-font-just-nova text-white mx-auto mt-0 mb-4 animate__animated" data-animation="fadeInUp">', '</h1>'); ?>
        </div>

        <?php just_a_change_post_thumbnail(); ?>

    </header>

    <div class="entry-content animate__animated" data-animation="fadeInUp">
        <?php the_content(); ?>
    </div>

</article>
