<?php
/**
 * Template Name: Events Page
 *
 * A page template for displaying The Events Calendar
 * Use this if you want events on a regular page instead of the archive
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

            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header>

            <div class="entry-content">
                <?php
                the_content();

                // Display The Events Calendar if plugin is active
                if ( function_exists( 'tribe_events' ) ) {
                    echo '<div class="events-wrapper">';
                    echo do_shortcode( '[tribe_events view="month"]' );
                    echo '</div>';
                } else {
                    echo '<p>' . esc_html__( 'Please install and activate The Events Calendar plugin to display events.', 'mik9cop' ) . '</p>';
                }
                ?>
            </div>

            <?php
        endwhile;
        ?>

    </main>
</div>

<?php
get_footer();
