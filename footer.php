<?php
/**
 * Alyka Theme Footer
 */
?>
    <footer class="footer">
        <div class="container">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer',
                'fallback_cb'    => false,
            ) );
            ?>
            
            <div class="footer-content">
                <div class="footer-grid">
                    <div class="footer-col footer-contact">
                        <h4>Contact</h4>
                        <p>146 Colin Street, West Perth WA 6005</p>
                        <p>P: 08 9200 4429</p>
                        <p>E: <a href="mailto:home@alyka.com.au">home@alyka.com.au</a></p>
                    </div>
                    <div class="footer-col footer-nav">
                        <h4>Site</h4>
                        <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false ) ); ?>
                    </div>
                    <div class="footer-col footer-brand">
                        <div class="footer-logo">
                            <?php if ( has_custom_logo() ) { the_custom_logo(); } else { echo '<strong>' . get_bloginfo( 'name' ) . '</strong>'; } ?>
                        </div>
                        <div class="social-icons">
                            <a href="#" target="_blank">Facebook</a> · <a href="#" target="_blank">LinkedIn</a>
                        </div>
                    </div>
                </div>
                <p class="site-copyright">&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
