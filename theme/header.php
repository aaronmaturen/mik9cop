<?php
/**
 * The header for the theme
 *
 * @package Mik9cop
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mik9cop' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="site-container">
            <div class="header-wrapper" style="display: flex; align-items: center; justify-content: space-between;">
                <div class="site-branding">
                    <?php
                    if ( has_custom_logo() ) :
                        the_custom_logo();
                    else :
                        // Use the default dark theme logo from theme assets
                        $logo_url = get_template_directory_uri() . '/assets/images/dark-logo.png';
                        ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="custom-logo-link">
                            <img src="<?php echo esc_url( $logo_url ); ?>"
                                 alt="<?php bloginfo( 'name' ); ?>"
                                 class="custom-logo">
                        </a>
                        <?php
                    endif;
                    ?>
                </div>

                <nav id="site-navigation" class="main-navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <?php esc_html_e( 'Menu', 'mik9cop' ); ?>
                    </button>
                    <?php
                    if ( has_nav_menu( 'primary' ) ) {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'menu_id'        => 'primary-menu',
                                'fallback_cb'    => false,
                            )
                        );
                    } else {
                        // No menu set - menu can be configured in Appearance > Menus
                    }
                    ?>
                </nav>
            </div>
        </div>
    </header>
