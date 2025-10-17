<?php
/**
 * The front page template file
 *
 * @package Mik9cop
 */

get_header();
?>

<div class="site-container">
    <main id="primary" class="site-main">
        <div class="content-area">
            <div class="main-content">
                <?php
                // Get the page content if set as static front page
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();

                        // Show featured image if set
                        if ( has_post_thumbnail() ) :
                            echo '<div class="page-featured-image">';
                            the_post_thumbnail( 'large' );
                            echo '</div>';
                        endif;

                        // Show the page content
                        the_content();
                    endwhile;
                else :
                    // Default content if no page is set - Instructions for setup
                    ?>
                    <div style="background: #fff3cd; padding: 20px; border-left: 4px solid #ffc107; margin-bottom: 30px;">
                        <h3 style="margin-top: 0;">⚠️ Setup Required</h3>
                        <p><strong>To edit your homepage content:</strong></p>
                        <ol>
                            <li>Go to <a href="<?php echo admin_url('post-new.php?post_type=page'); ?>">Pages > Add New</a></li>
                            <li>Create a page called "Home" with your content</li>
                            <li>Go to <a href="<?php echo admin_url('options-reading.php'); ?>">Settings > Reading</a></li>
                            <li>Select "A static page" and choose your "Home" page</li>
                            <li>Save changes</li>
                        </ol>
                    </div>

                    <p>Welcome to K9 Hero Guardians, formerly known as the Saginaw Valley Police Canine Association (SVPCA)! We are currently working on a new website and are excited to launch it in the near future! Please check back to see our new look!</p>

                    <p>K9 Hero Guardians provides assistance to law enforcement agencies by covering the costs for the dog, training, medical expenses, dog food, equipment, car inserts, carriers, leads, harnesses, heat alarms and other costs related to the K9 unit. We also provide funding for veterinary care for our retired K9's. K9 Hero Guardians does not cover wages, overtime or benefits. Those are costs that departments already understand.</p>

                    <p>K9 Hero Guardians is funded by private and corporate donations, grants and various fundraising events. All donations are tax-deductible.</p>

                    <p>Follow us on <a href="https://www.facebook.com" target="_blank" rel="noopener">Facebook</a> to stay up-to-date with the daily activities of the K9's and K9 Hero Guardians!</p>
                    <?php
                endif;
                ?>

                <div class="contact-section">
                    <h2><?php esc_html_e( 'Contact Us', 'mik9cop' ); ?></h2>

                    <?php
                    // Check if Contact Form 7 is active
                    if ( function_exists( 'wpcf7_contact_form' ) ) {
                        echo do_shortcode( '[contact-form-7 id="1" title="Contact form 1"]' );
                    } else {
                        // Fallback basic contact form
                        ?>
                        <form class="contact-form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                            <input type="hidden" name="action" value="contact_form">

                            <div class="form-row">
                                <div class="form-field">
                                    <label for="contact-first-name">
                                        <?php esc_html_e( 'Name', 'mik9cop' ); ?> <span class="required">*</span>
                                    </label>
                                    <input type="text" id="contact-first-name" name="first_name" placeholder="First" required>
                                    <small><?php esc_html_e( 'First', 'mik9cop' ); ?></small>
                                </div>

                                <div class="form-field">
                                    <label for="contact-last-name" class="screen-reader-text">
                                        <?php esc_html_e( 'Last Name', 'mik9cop' ); ?>
                                    </label>
                                    <input type="text" id="contact-last-name" name="last_name" placeholder="Last" required>
                                    <small><?php esc_html_e( 'Last', 'mik9cop' ); ?></small>
                                </div>
                            </div>

                            <div class="form-field">
                                <label for="contact-email">
                                    <?php esc_html_e( 'Email', 'mik9cop' ); ?> <span class="required">*</span>
                                </label>
                                <input type="email" id="contact-email" name="email" required>
                            </div>

                            <div class="form-field">
                                <label for="contact-message">
                                    <?php esc_html_e( 'Comment or Message', 'mik9cop' ); ?> <span class="required">*</span>
                                </label>
                                <textarea id="contact-message" name="message" rows="10" required></textarea>
                            </div>

                            <button type="submit" class="submit-button"><?php esc_html_e( 'Submit', 'mik9cop' ); ?></button>
                        </form>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
</div>

<?php
get_footer();
