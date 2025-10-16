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
                    <?php else : ?>
                        <!-- Default content for Footer Column 1 -->
                        <h3><?php esc_html_e( 'About K9 Hero Guardians', 'mik9cop' ); ?></h3>
                        <p><?php esc_html_e( 'Providing assistance to law enforcement agencies by covering costs for K9 units, training, medical expenses, and equipment.', 'mik9cop' ); ?></p>
                        <div class="social-links">
                            <a href="https://www.facebook.com/SVPCA" target="_blank" rel="noopener" aria-label="Facebook">
                                <span>f</span>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="footer-section">
                    <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    <?php else : ?>
                        <!-- Default content for Footer Column 2 -->
                        <h3><?php esc_html_e( 'Contact', 'mik9cop' ); ?></h3>
                        <address>
                            <strong>K9 Hero Guardians</strong><br>
                            3381 Sterling Road<br>
                            Omer, MI 48749
                        </address>
                        <p style="margin-top: 15px;">
                            <a href="mailto:info@k9heroguardians.org" style="color: var(--text-secondary);">info@k9heroguardians.org</a>
                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> K9 Hero Guardians. <?php esc_html_e( 'All rights reserved.', 'mik9cop' ); ?></p>
                <p style="margin-top: 10px; font-size: 0.85em;">
                    <?php esc_html_e( 'Formerly Saginaw Valley Police Canine Association (SVPCA)', 'mik9cop' ); ?>
                </p>
            </div>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
