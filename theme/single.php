<?php
/**
 * The template for displaying all single posts
 *
 * @package Mik9cop
 */

get_header();
?>

<div class="site-container">
    <main id="primary" class="site-main">

        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', 'single' );

            the_post_navigation(
                array(
                    'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'mik9cop' ) . '</span> <span class="nav-title">%title</span>',
                    'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'mik9cop' ) . '</span> <span class="nav-title">%title</span>',
                )
            );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile;
        ?>

    </main>
</div>

<?php
get_footer();
