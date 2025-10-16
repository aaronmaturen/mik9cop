<?php
/**
 * Single Event Template
 *
 * This is a custom template for single events from The Events Calendar plugin
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
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'single-event' ); ?>>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="event-image">
                        <?php the_post_thumbnail( 'large' ); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php
                    // Display event details if The Events Calendar is active
                    if ( function_exists( 'tribe_get_start_date' ) ) :
                        ?>
                        <div class="event-details">
                            <div class="event-meta">
                                <p class="event-date">
                                    <strong><?php esc_html_e( 'Date:', 'mik9cop' ); ?></strong>
                                    <?php echo tribe_get_start_date( null, false, 'F j, Y' ); ?>
                                    <?php if ( tribe_get_start_date() !== tribe_get_end_date() ) : ?>
                                        - <?php echo tribe_get_end_date( null, false, 'F j, Y' ); ?>
                                    <?php endif; ?>
                                </p>

                                <p class="event-time">
                                    <strong><?php esc_html_e( 'Time:', 'mik9cop' ); ?></strong>
                                    <?php echo tribe_get_start_date( null, false, 'g:i A' ); ?>
                                    <?php if ( tribe_get_start_time() !== tribe_get_end_time() ) : ?>
                                        - <?php echo tribe_get_end_date( null, false, 'g:i A' ); ?>
                                    <?php endif; ?>
                                </p>

                                <?php if ( tribe_has_venue() ) : ?>
                                    <p class="event-venue">
                                        <strong><?php esc_html_e( 'Venue:', 'mik9cop' ); ?></strong>
                                        <?php echo tribe_get_venue(); ?>
                                        <?php if ( tribe_get_address() ) : ?>
                                            <br><?php echo tribe_get_full_address(); ?>
                                        <?php endif; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php
                    endif;

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
                    <?php
                    // Navigation to other events
                    the_post_navigation(
                        array(
                            'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous Event:', 'mik9cop' ) . '</span> <span class="nav-title">%title</span>',
                            'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next Event:', 'mik9cop' ) . '</span> <span class="nav-title">%title</span>',
                        )
                    );
                    ?>
                </footer>
            </article>

            <?php
        endwhile;
        ?>

    </main>
</div>

<?php
get_footer();
