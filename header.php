<?php
/**
 * Alyka Theme Header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <div class="top-bar">
        <div class="container top-bar-inner">
            <div class="top-links">
                <a href="/contact" target="_blank">Contact</a>
                <a href="/careers">Careers</a>
            </div>
        </div>
    </div>

    <header class="header">
        <div class="container header-inner">
            <div class="site-branding">
                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
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
                    'fallback_cb'    => 'wp_page_menu',
                ) );
                ?>
            </nav>
        </div>
    </header>
