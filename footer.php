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
                <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
