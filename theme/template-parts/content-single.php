<?php
/**
 * Template part for displaying single posts
 *
 * @package Mik9cop
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

        <?php if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
                <?php
                mik9cop_posted_on();
                mik9cop_posted_by();
                ?>
            </div>
        <?php endif; ?>
    </header>

    <?php mik9cop_post_thumbnail(); ?>

    <div class="entry-content">
        <?php
        the_content();

        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mik9cop' ),
                'after'  => '</div>',
            )
        );
        ?>
    </div>

    <footer class="entry-footer">
        <?php mik9cop_entry_footer(); ?>
    </footer>
</article>
