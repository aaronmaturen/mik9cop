<?php
/**
 * The Events Calendar Template
 *
 * This is a custom template for The Events Calendar plugin
 *
 * @package Mik9cop
 */

get_header();
?>

<div class="site-container">
    <main id="primary" class="site-main">

        <?php if ( is_front_page() ) : ?>
        <div class="hero-section">
            <h1><?php esc_html_e( 'Events Calendar', 'mik9cop' ); ?></h1>
        </div>
        <?php else : ?>
        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e( 'Events Calendar', 'mik9cop' ); ?></h1>
        </header>
        <?php endif; ?>

        <div class="events-wrapper">
            <?php
            // Let The Events Calendar plugin handle the display
            if ( function_exists( 'tribe_events_before_html' ) ) {
                tribe_events_before_html();
                tribe_get_view();
                tribe_events_after_html();
            } else {
                echo '<p>' . esc_html__( 'Please install and activate The Events Calendar plugin.', 'mik9cop' ) . '</p>';
            }
            ?>
        </div>

    </main>
</div>

<?php
get_footer();
