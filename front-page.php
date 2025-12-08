<?php
/**
 * Front page template for Alyka theme
 */
get_header();
?>

<main class="site-main">

    <section class="hero">
        <div class="hero-inner container">
            <div class="hero-copy">
                <h1>Lorem ipsum dolor sit amet, consectetur</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque quam tempus elit diam ante nisl, pretium. Tortor purus amet adipiscing adipiscing aliquamet adipiscing.</p>
                <p><a class="btn" href="#">Learn More</a></p>
            </div>
            <div class="hero-image">
                <?php
                // Use a local hero image if the user places one at assets/images/hero.jpg|png|svg
                $theme_path = get_template_directory();
                $theme_uri  = get_template_directory_uri();
                if ( file_exists( $theme_path . '/assets/images/hero.jpg' ) ) : ?>
                    <img src="<?php echo esc_url( $theme_uri . '/assets/images/hero.jpg' ); ?>" alt="Hero image">
                <?php elseif ( file_exists( $theme_path . '/assets/images/hero.png' ) ) : ?>
                    <img src="<?php echo esc_url( $theme_uri . '/assets/images/hero.png' ); ?>" alt="Hero image">
                <?php elseif ( file_exists( $theme_path . '/assets/images/hero.svg' ) ) : ?>
                    <img src="<?php echo esc_url( $theme_uri . '/assets/images/hero.svg' ); ?>" alt="Hero image">
                <?php else : ?>
                    <img src="https://source.unsplash.com/1200x600/?people,office" alt="Hero image">
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="features container">
        <ul class="features-list">
            <li><a href="https://example.com" target="_blank"><img src="https://source.unsplash.com/80x80/?icon" alt=""><span>Feature One</span></a></li>
            <li><a href="https://example.com" target="_blank"><img src="https://source.unsplash.com/80x80/?icon" alt=""><span>Feature Two</span></a></li>
            <li><a href="https://example.com" target="_blank"><img src="https://source.unsplash.com/80x80/?icon" alt=""><span>Feature Three</span></a></li>
            <li><a href="https://example.com" target="_blank"><img src="https://source.unsplash.com/80x80/?icon" alt=""><span>Feature Four</span></a></li>
        </ul>
    </section>

    <section class="intro container">
        <div class="intro-inner">
            <?php
            // Use the page content if front page is set to a page
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    the_content();
                }
            } else {
                ?>
                <h2>Welcome</h2>
                <p>Welcome to the Alyka demo theme. Replace this content in the WP editor.</p>
                <?php
            }
            ?>
            <p><a class="btn btn-outline" href="#">Discover More</a> <a class="btn" href="#">Contact Us</a></p>
        </div>
    </section>

    <section class="contact container">
        <div class="contact-grid">
            <div class="contact-info">
                <h3>Get in touch with us</h3>
                <p>146 Colin Street, West Perth WA 6005</p>
                <p>P: 08 9200 4429</p>
                <p><a class="btn" href="https://maps.google.com?q=146+Colin+Street+West+Perth" target="_blank">Get Directions</a></p>
            </div>
            <div class="contact-map">
                <iframe src="https://www.google.com/maps?q=146+Colin+Street+West+Perth+WA+6005&output=embed" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <section class="news container">
        <h3>Latest News</h3>
        <div class="news-grid">
            <?php
            $news = new WP_Query( array( 'posts_per_page' => 4 ) );
            if ( $news->have_posts() ) :
                while ( $news->have_posts() ) : $news->the_post(); ?>
                    <article class="news-item">
                        <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'medium' ); } else { echo '<img src="https://source.unsplash.com/400x250/?news" alt="news">'; } ?>
                            <h4><?php the_title(); ?></h4>
                            <p class="meta"><?php echo get_the_date(); ?></p>
                        </a>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No news yet.</p>';
            endif;
            ?>
        </div>
    </section>

</main>

<?php get_footer();
