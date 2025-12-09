<?php
/**
 * Alyka Theme Footer
 *
 * @package Alyka
 * @author Jeremy Chen
 * @since 1.0.0
 */

?>
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-grid">
                    <div class="footer-col footer-nav">
                        <h4>Site Map</h4>
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/news' ) ); ?>">News</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer-col footer-contact">
                        <h4>Contact Details</h4>
                        <p>146 Colin Street, West Perth WA 6005</p>
                        <p>P: 08 9200 4429</p>
                        <p>E: <a href="mailto:home@alyka.com.au">home@alyka.com.au</a></p>
                    </div>
                    <div class="footer-col footer-brand">
                        <div class="footer-logo">
                            <?php if ( has_custom_logo() ) {
                                the_custom_logo();
                            } else {
                                echo '<strong>' . get_bloginfo( 'name' ) . '</strong>';
                            } ?>
                        </div>
                        <p class="footer-tagline">Find Us On Social Media</p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/Alykadigital" target="_blank">Facebook</a> ·
                            <a href="https://www.linkedin.com/company/alyka" target="_blank">LinkedIn</a> ·
                            <a href="https://www.instagram.com/alykadigital" target="_blank">Instagram</a>
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
