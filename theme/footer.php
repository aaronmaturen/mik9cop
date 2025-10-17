<?php
/**
 * The template for displaying the footer
 *
 * @package Mik9cop
 */
?>

    <footer id="colophon" class="site-footer">
        <div class="site-container">
            <div class="footer-content">
                <div class="footer-section">
                    <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    <?php endif; ?>
                </div>

                <div class="footer-section">
                    <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> K9 Hero Guardians. <?php esc_html_e( 'All rights reserved.', 'mik9cop' ); ?></p>
            </div>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
