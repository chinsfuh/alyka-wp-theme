<?php
/**
 * Alyka Theme Header
 *
 * @package Alyka
 * @author Jeremy Chen
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="top-bar">
        <div class="container top-bar-inner">
            <div class="top-links">
                <a href="https://www.alyka.com.au/contact" target="_blank">Contact</a>
                <a href="https://www.alyka.com.au/about-us">About</a>
            </div>
        </div>
    </div>

    <header class="header">
        <div class="container header-inner">
            <div class="site-branding">
                <?php
                // Prefer the Custom Logo if set in Customizer
                if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    // Fallback to a logo file inside the theme if the user uploads assets
                    $theme_path = get_template_directory();
                    $theme_uri  = get_template_directory_uri();
                    if ( file_exists( $theme_path . '/assets/images/logo.svg' ) ) {
                        echo '<a class="custom-logo-link" href="' . esc_url( home_url( '/' ) ) . '"><img src="' . esc_url( $theme_uri . '/assets/images/logo.svg' ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '"></a>';
                    } elseif ( file_exists( $theme_path . '/assets/images/logo.png' ) ) {
                        echo '<a class="custom-logo-link" href="' . esc_url( home_url( '/' ) ) . '"><img src="' . esc_url( $theme_uri . '/assets/images/logo.png' ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '"></a>';
                    } else {
                        ?>
                        <h1 class="site-title">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <?php bloginfo( 'name' ); ?>
                            </a>
                        </h1>
                        <?php
                        $description = get_bloginfo( 'description' );
                        if ( $description ) {
                            echo '<p class="site-description">' . esc_html( $description ) . '</p>';
                        }
                    }
                }
                ?>
            </div>

            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">Menu</button>

            <nav id="site-navigation" class="primary-navigation" role="navigation">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'menu',
                    'depth'          => 3,
                    'fallback_cb'    => function() { echo '<ul class="menu"><li><a href="#">Menu</a></li></ul>'; },
                    'link_before'    => '',
                    'link_after'     => '',
                ) );
                ?>
            </nav>
        </div>
    </header>
